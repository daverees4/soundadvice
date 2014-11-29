<html lang="en">
<head>
  <meta charset="utf-8">

 

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <script src="js/scripts.js"></script>
</body>
</html>

<?
	print_r($_POST);
/*	
	ini_set('display_errors', 'On');
	require_once('./lib/Stripe.php');
	require_once('./lib/Secrets.php');
	Stripe::setApiKey($secretkey);

// Get the credit card details submitted by the form
$token = $_POST['stripe_token'];

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
*/
?>