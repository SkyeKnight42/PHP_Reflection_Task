<?php

    include_once 'database_connection.inc.php';

    $conn = OpenConnection();

    if (!$conn) {
        die("Error: Could not connect. " . mysqli_connect_error());
    }

    $namevalid = false;
    $emailvalid = false;
    $phonevalid = false;
    $subjectvalid = false;
    $messagevalid = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        session_start();

        $name = $_POST['name'];
        $email = $_POST['email_address'];
        $phone = $_POST['phone_number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (preg_match('/^[a-z .\-]+$/i', $_POST['name']) && strlen($_POST["name"]) > 0) {
            $name = $_POST["name"];
            $nameError = "";
            $namevalid = true;
        } else {
            $namevalid = false;
            $nameError = "invalid";
        }

        if (filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
            $emailvalid = true;
            $email = $_POST["email_address"];
            $emailError = "";
        } else {
            $emailvalid = false;
            $emailError = "invalid";
        }

        if (is_numeric($_POST["phone_number"]) && strlen($_POST["phone_number"]) > 0) {
            $phoneError = "";
            $phonevalid = true;
            $phone = $_POST["phone_number"];
        } else {
            $phoneError = "invalid";
            $phonevalid = false;
        }

        if (strlen($_POST["subject"]) > 0 && preg_match('/^[a-z0-9 .\-]+$/i', $_POST["subject"])) {
            $subjectError = "";
            $subjectvalid = true;
            $subject = $_POST["subject"];
        } else {
            $subjectError = "invalid";
            $subjectvalid = false;
        }

        if (strlen($_POST["message"]) > 0 && preg_match('/^[a-z0-9 .\-]+$/i', $_POST["message"])) {
            $messageError = "";
            $messagevalid = true;
            $message = $_POST["message"];
        } else {
            $messageError = "invalid-textarea";
            $messagevalid = false;
        }

        if (isset($_POST['submit']) && isset($_POST['terms_conditions'])) {

            if ($namevalid && $emailvalid && $phonevalid && $subjectvalid && $messagevalid) {

                $namevalue = htmlspecialchars($name);
                $emailvalue = htmlspecialchars($email);
                $phonevalue = htmlspecialchars($phone);
                $subjectvalue = htmlspecialchars($subject);
                $messagevalue = htmlspecialchars($message);
                $sql = "INSERT into contact_enquiry (name, email, telephone, subject, message) VALUES ('$namevalue', '$emailvalue', '$phonevalue', '$subjectvalue', '$messagevalue');";

                $pop_up = 'show_pop_up';
                $_SESSION['contact_session'] = $pop_up;

                mysqli_query($conn, $sql);
            } 
        }

    }
?>