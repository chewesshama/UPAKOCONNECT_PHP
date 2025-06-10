<?php
// forms/contact.php
require_once '../includes/base.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $subject && $message) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO Contacts (name, email, subject, message)
                VALUES (:name, :email, :subject, :message)
            ");
            $stmt->execute([
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            ]);
            $message = '<div class="sent-message">Your message has been sent. Thank you!</div>';
        } catch (PDOException $e) {
            $message = '<div class="error-message">Error saving message: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }
    } else {
        $message = '<div class="error-message">Please fill in all required fields.</div>';
    }
} else {
    $message = '<div class="error-message">Invalid request method.</div>';
}
?>

<section id="contact" class="contact section">
  <div class="container">
    <h3>Contact Form Submission</h3>
    <?php echo $message; ?>
    <p><a href="/index.php#contact" class="btn btn-primary">Return to Contact Form</a></p>
  </div>
</section>