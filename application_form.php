<?php
include 'config.php'; // Connect to MySQL

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];

    $stmt = $conn->prepare("INSERT INTO applications (name, email, phone, course) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $course);

    if ($stmt->execute()) {
        $message = "✅ Your application has been submitted successfully!";
    } else {
        $message = "❌ Error submitting the application. Please try again.";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form - MPL HR SEC School</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensures existing styles apply -->
</head>
<body>
    <section id="application" class="section fade-in">
        <h2>Apply Now</h2>
        <p>Fill out the application form below:</p>

        <?php if (!empty($message)): ?>
            <p class="success-message"><?php echo $message; ?></p>
        <?php endif; ?>

        <form action="application_form.php" method="POST" class="application-form">
            <input type="text" name="name" placeholder="Your Full Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>
            <select name="course" required>
                <option value="" disabled selected>Select Your Course</option>
                <option value="Science">Science</option>
                <option value="Commerce">Commerce</option>
                <option value="Arts">Arts</option>
            </select>
            <button type="submit" class="btn">Submit Application</button>
        </form>
    </section>
</body>
</html>
