
<?
	print_r($_POST);
	
	ini_set('display_errors', 'On');
	require_once('./lib/Stripe.php');
	require_once('./lib/Secrets.php');
	if($_POST){
	Stripe::setApiKey($secretkey);

// Get the credit card details submitted by the form
$token = $_POST['reservation']['stripe_token'];


// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = Stripe_Charge::create(array(
  "amount" => 1499, // amount in cents, again
  "currency" => "usd",
  "card" => $token,
  "description" => "payinguser@example.com")
);



// EMAIL CONFIRMATION TO US AND THEM

$to      = 'mail@digitalfeedback.net';
$subject = 'Order! - Digital Feedback';
$message = $message;
$headers = 'From: mail@digitalfeedback.net' . "\r\n" .
    'Reply-To: mail@digitalfeedback.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


$to = strip_tags($_POST['req-email']);

$subject = 'Thanks for your order with Digital Feedback!';

$headers = "From: mail@digitalfeedback.net\r\n";
$headers .= "Reply-To: mail@digitalfeedback.net\r\n";
$headers .= "BCC: mail@digitalfeedback.net\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<img src="" alt="Digital Feedback" />';
$message .='<p>Thanks for your order with Digital Feedback.  Here is your order information.  If you notice any mistakes please contact us immediately at <a href="mailto:mail@digitalfeedback.net">mail@digitalfeedback.net</a>.</p>';

$message .='<p>Your card has been charged '.$charge.".";

$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['customername']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['customeremail']) . "</td></tr>";
$message .= "<tr><td><strong>Service Required:</strong> </td><td>" . strip_tags($_POST['servicerequired']) . "</td></tr>"; 
$message .= "<tr><td><strong>Youtube/Soundcloud Link 1:</strong> </td><td>" . strip_tags($_POST['link1']) . "</td></tr>"; 
$message .= "<tr><td><strong>Youtube/Soundcloud Link 2:</strong> </td><td>" . strip_tags($_POST['link2']) . "</td></tr>"; 
$message .= "<tr><td><strong>Youtube/Soundcloud Link 3:</strong> </td><td>" . strip_tags($_POST['link3']) . "</td></tr>"; 
$message .= "<tr><td><strong>Timezone:</strong> </td><td>" . strip_tags($_POST['timezone']) . "</td></tr>"; 
$message .= "<tr><td><strong>Skype:</strong> </td><td>" . strip_tags($_POST['skype']) . "</td></tr>"; 
$message .= "<tr><td><strong>When would be best to contact you?:</strong> </td><td>" . strip_tags($_POST['clientinfo']) . "</td></tr>"; 
$message .= "</table>";


$message .= "</body></html>";

mail($to, $subject, $message, $headers);


} catch(Stripe_CardError $e) {
	$message = '<html><body>';
$message='There has been a problem with your order, please try again.';
$message .= "</body></html>";

}
?>


  
  <? echo $message; 
	  
	  }
  ?>

