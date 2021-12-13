<!-- <?php 
    if(isset($POST['submit'])){
        header('Location: http://127.0.0.1:5500/generic.html');
        exit;
        $to = "tanishkashah24@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        }
?> -->

<?php
$myemail = 'tanishkashah24@gmail.com';
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: https://www.google.com/');

?>