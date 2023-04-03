<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Process the data as needed, e.g., send an email, store in a database, etc.

    // Redirect to the contact page with a success message
    header('Location: contact.php?success=1');
}
