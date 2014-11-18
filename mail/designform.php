<?php
// Check for empty fields
if(empty($_POST['business'])  		||
   empty($_POST['business-desp']) 		||
   empty($_POST['email'])	||
]

   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$business = $_POST['business'];
$business_descp = $_POST['business_descp'];
$emil = $_POST['email'];
$phone = $_POST['phone'];
$domain = $_POST['domain'];
$no_domain = $_POST['no_domain'];
$site_type = $_POST['site_type'];
$business_size = $_POST['business_size'];
$city = $_POST['city'];
$state = $_POST['state'];
$budget = $_POST['budget'];

	
// Create the email and send the message
$to = 'info@wavesurge.net'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nBusiness Name: $name\n\nDescription: $business_descp\n\nEmail: $email \Phone: $phone\n\nDomain: $domain\n\nNo domain: $no_domain\n\nSite type: $site_type\n\nBusiness Size: $business_size\n\nCity: $city\n\nState: $state\n\nBudget: $budget";
$headers = "From: noreply@wavesurge.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>