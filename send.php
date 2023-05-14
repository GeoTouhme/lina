<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form fields
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  // Construct the email message
  $message = "Name: $first_name $last_name\n\nEmail: $email\n\nSubject: $subject";

  // Send the email
  mail('gtouhme@gmail.com', 'New message from website', $message);

  // Redirect to thank you page
  header('Location: thank-you.php');
  exit;
}
?>
