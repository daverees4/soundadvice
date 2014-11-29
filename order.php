<?
	print_r($_POST);
	
	ini_set('display_errors', 'On');
	require_once('./lib/Stripe.php');
	require_once('./lib/Secrets.php');
	Stripe::setApiKey($secretkey);

// Get the credit card details submitted by the form
$token = $_POST['reservation']['stripe_token'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = Stripe_Charge::create(array(
  "amount" => 1000, // amount in cents, again
  "currency" => "usd",
  "card" => $token,
  "description" => "payinguser@example.com")
);
echo "card charged successfully!";
} catch(Stripe_CardError $e) {
echo "Error";
}

?>