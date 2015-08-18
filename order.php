<?
if(strip_tags($_POST['servicerequired'])=="1") {
	$charge="14.99";
}
	
	if(strip_tags($_POST['servicerequired'])=="2") {
	$charge="39.99";
}
if(strip_tags($_POST['servicerequired'])=="3") {
	$charge="99.99";
}
	
	
	if($_POST){
// EMAIL CONFIRMATION TO US AND THEM

$to      = 'd.w.rees.03+digitalfeedback@gmail.com';
$subject = 'Order! - Digital Feedback (check for corresponding payment)';

$headers = "From: mail@digitalfeedback.net\r\n";
$headers .= "Reply-To: mail@digitalfeedback.net\r\n";
$headers .= "BCC: mail@digitalfeedback.net\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<img src="" alt="Digital Feedback" />';
$message .='<p>Someone submitted the form on Digital Feedback - you will need to see if there is a corresponding paypal notification, otherwise chase for payment.</p>';



$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['customerfname']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Second Name:</strong> </td><td>" . strip_tags($_POST['customersname']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['customeremail']) . "</td></tr>";

$message .= "</table>";


$message .= "</body></html>";



$headers = 'From: mail@digitalfeedback.net' . "\r\n" .
    'Reply-To: mail@digitalfeedback.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
/*

$to = 'd.w.rees.03@gmail.com';
 $subject = 'Digital Feedback Order (does not mean user completed payment';

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

header( 'Location: https://www.paypal.com/cgi-bin/webscr?business=dave@daveconservatoire.org&cmd=_xclick-subscriptions&currency_code=USD&p3=1&t3=M&no_shipping=1&src=1&sra=1&a3="+$('#ex1').val()+"&item_name=Digital%20Feedback%20Payment&return_url=http://digitalfeedback.net/thanks.php&cancel_return=http://www.digitalfeedback.net' ) ;

*/

}

header('Location: https://www.paypal.com/cgi-bin/webscr?business=mail@digitalfeedback.net&cmd=_xclick-subscriptions&currency_code=USD&p3=1&t3=M&no_shipping=1&src=1&sra=1&a3='.$charge.'&item_name=Digital%20Feedback%20Payment&return_url=http://digitalfeedback.net/thanks.php&cancel_return=http://www.digitalfeedback.net&email='.strip_tags($_POST['customeremail']).'&first_name='.strip_tags($_POST['customerfname']).'last_name='.strip_tags($_POST['customersname'])) ;


?>

