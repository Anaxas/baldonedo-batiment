<?php
declare(strict_types=1);

// ── Only allow POST requests ──────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit;
}

// ── Autoload PHPMailer (via Composer) ─────────────────────────────────────
$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Configuration serveur incorrecte.']);
    exit;
}
require $autoload;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ── Sanitize & validate input ─────────────────────────────────────────────
function sanitize(string $value): string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

$nom       = sanitize($_POST['nom']       ?? '');
$email     = sanitize($_POST['email']     ?? '');
$telephone = sanitize($_POST['telephone'] ?? '');
$sujet     = sanitize($_POST['sujet']     ?? '');
$message   = sanitize($_POST['message']   ?? '');

$errors = [];

if (empty($nom)) {
    $errors[] = 'Le nom est obligatoire.';
}
if (empty($email) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Une adresse e-mail valide est obligatoire.';
}
if (empty($message)) {
    $errors[] = 'Le message est obligatoire.';
}

if (!empty($errors)) {
    http_response_code(422);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Build the e-mail ──────────────────────────────────────────────────────
$sujetLabels = [
    'construction' => 'Construction neuve',
    'renovation'   => 'Rénovation',
    'extension'    => 'Extension / Agrandissement',
    'amenagement'  => 'Aménagement intérieur',
    'autre'        => 'Autre',
];
$sujetLabel = $sujetLabels[$sujet] ?? 'Non précisé';

$emailBody = <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Nouveau message – Baldonedo Bâtiment</title></head>
<body style="font-family: Arial, sans-serif; background: #f4f7f8; margin: 0; padding: 0;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background: #f4f7f8; padding: 30px 0;">
    <tr><td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 16px rgba(0,0,0,0.1);">
        <!-- Header -->
        <tr>
          <td style="background: linear-gradient(135deg, #3d90a1, #5aaec0); padding: 32px 40px;">
            <h1 style="margin: 0; color: #ffffff; font-size: 22px; font-weight: 700; letter-spacing: 0.03em;">Baldonedo Bâtiment</h1>
            <p style="margin: 6px 0 0; color: rgba(255,255,255,0.8); font-size: 14px;">Nouveau message reçu depuis le site web</p>
          </td>
        </tr>
        <!-- Body -->
        <tr>
          <td style="padding: 36px 40px;">
            <h2 style="margin: 0 0 24px; font-size: 18px; color: #1a2332;">Détails du contact</h2>
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; width: 140px; color: #546e7a; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em;">Nom</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #1a2332; font-size: 15px;">{$nom}</td>
              </tr>
              <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #546e7a; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em;">E-mail</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #1a2332; font-size: 15px;">{$email}</td>
              </tr>
              <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #546e7a; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em;">Téléphone</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #1a2332; font-size: 15px;">{$telephone}</td>
              </tr>
              <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #546e7a; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em;">Type de projet</td>
                <td style="padding: 10px 0; border-bottom: 1px solid #dde6ea; color: #1a2332; font-size: 15px;">{$sujetLabel}</td>
              </tr>
            </table>
            <h3 style="margin: 28px 0 12px; font-size: 16px; color: #1a2332;">Message :</h3>
            <div style="background: #f4f7f8; border-left: 3px solid #5aaec0; padding: 16px 20px; border-radius: 0 6px 6px 0; color: #2c3e50; font-size: 15px; line-height: 1.7; white-space: pre-wrap;">{$message}</div>
          </td>
        </tr>
        <!-- Footer -->
        <tr>
          <td style="background: #f4f7f8; padding: 20px 40px; border-top: 1px solid #dde6ea;">
            <p style="margin: 0; font-size: 12px; color: #8a9ab0;">Ce message a été envoyé depuis le formulaire de contact de <a href="https://baldonedo.com" style="color: #3d90a1;">baldonedo.com</a></p>
          </td>
        </tr>
      </table>
    </td></tr>
  </table>
</body>
</html>
HTML;

// ── Send via PHPMailer ────────────────────────────────────────────────────
$mail = new PHPMailer(true);

try {
    // ── SMTP configuration ──────────────────────────────────────────
    // Update these settings for your mail server / hosting provider.
    // For testing without SMTP, comment out the SMTP block and let
    // PHPMailer fall back to PHP's native mail() function.
    // ────────────────────────────────────────────────────────────────
    $mail->isSMTP();
    $mail->Host       = 'smtp.example.com';        // ← replace with your SMTP host
    $mail->SMTPAuth   = true;
    $mail->Username   = 'no-reply@baldonedo.com';  // ← your SMTP username
    $mail->Password   = 'YOUR_SMTP_PASSWORD';      // ← your SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Encoding / charset
    $mail->CharSet  = 'UTF-8';
    $mail->Encoding = 'base64';

    // Recipients
    $mail->setFrom('no-reply@baldonedo.com', 'Site Baldonedo Bâtiment');
    $mail->addAddress('courrielchristos@gmail.com', 'Baldonedo Bâtiment');
    $mail->addReplyTo($email, $nom);

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Nouveau contact : {$nom} – {$sujetLabel}";
    $mail->Body    = $emailBody;
    $mail->AltBody = "Nouveau message de {$nom} ({$email})\nTéléphone : {$telephone}\nProjet : {$sujetLabel}\n\n{$message}";

    $mail->send();

    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès.']);

} catch (Exception $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    // Never expose raw error details to the client
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
    echo json_encode(['success' => false, 'message' => 'Impossible d\'envoyer le message. Veuillez nous contacter par téléphone.']);
}
