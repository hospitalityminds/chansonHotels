<?php
$to = '-chansonhotelsmeera@gmail.com';
$subject = 'chanson msg';
$message = 'Welcome to chansonhotel?'; 
$from = '';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>