<?php
// forms/appointment.php
require_once '../includes/base.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['phone'] ?? '');
    $date = trim($_POST['date'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $doctor = trim($_POST['doctor'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $phone && $date && $department && $doctor) {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO Appointments (name, email, phone, appointment_date, department, doctor, message)
                VALUES (:name, :email, :phone, :appointment_date, :department, :doctor, :message)
            ");
            $stmt->execute([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'appointment_date' => $date,
                'department' => $department,
                'doctor' => $doctor,
                'message' => $message
            ]);
            $message = '<div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>';
        } catch (PDOException $e) {
            $message = '<div class="error-message">Error saving appointment: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }
    } else {
        $message = '<div class="error-message">Please fill in all required fields.</div>';
    }
} else {
    $message = '<div class="error-message">Invalid request method.</div>';
}
?>

<section id="appointment" class="appointment section">
  <div class="container">
    <h3>Appointment Form Submission</h3>
    <?php echo $message; ?>
    <p><a href="/index.php#appointment" class="btn btn-primary">Return to Appointment Form</a></p>
  </div>
</section>