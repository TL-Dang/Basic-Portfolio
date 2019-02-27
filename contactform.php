<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "ledangt310@live.com";
    $headers = "From: ".$emailFrom;
    $subject = "Subject: ".$subject;
    $txt = "You have received an message from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>