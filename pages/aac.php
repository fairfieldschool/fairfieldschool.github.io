<?php 

    # Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;

if(isset($_POST['submit'])){
    /*$to = "arnoldceaser180@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);*/

# Instantiate the client.
//$mgClient = new Mailgun('key-3b6eafc4b7223614a96c78e79f4ff0b5');
$first_name = $_POST['first_name'];
$from = $_POST['email'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
$domain = "sandboxce24333e6d724055af54f1818337a427.mailgun.org";

$client = new \Http\Adapter\Guzzle6\Client(); 
$mailgun = new \Mailgun\Mailgun('key-3b6eafc4b7223614a96c78e79f4ff0b5', $client);
# Make the call to the client.
$result = $mailgun->sendMessage("$domain",
                  array('from'    => $from,
                        'to'      => 'arnoldceaser <arnoldceaser180@gmail.com>',
                        'subject' => "Form submission",
                        'text'    => $message2));
    
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>