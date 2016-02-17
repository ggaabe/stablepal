<html>
<head>
<title>StablePal</title>
</head>

<body>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />

<a href="index.html">
<header>
.</header>
</a>

<?php
$itemname = $_POST['itemname'];
$itemurl = $_POST['itemurl'];
$name = $_POST['name'];
$email = $_POST['email'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];
$country = $_POST['country'];
$shippingspeed = $_POST['shippingspeed'];
$promocode = $_POST['promocode'];
$message = $_POST['message'];
$formcontent=" Item Name: $itemname \n Item URL: $itemurl \n Name: $name \n Email: $email \n Street Address 1: $street1 \n Street Address 2: $street2 \n City: $city \n Zip/Postal: $zip \n State: $state \n Country: $country \n Shipping Speed: $shippingspeed \n Promo Code: $promocode \n Message: $message";
$recipient = "StablePal@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Your order has been received by StablePal" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>

<div class="topthank">
.
</div>
<div class="topthankwhite">
.
</div>

<div class="ordercomplete">
ORDER COMPLETE!
</div>

<div class="topthankwhite">
.
</div>

<div class="bottomorange">
We will process your order and send you an email with payment info.
<p>Once your payment is complete, a receipt will be emailed to you within 24 hours.</p>
<p>You will also receive an email with shipping information when it becomes available</p>
<h1>Thanks again! <img width="78px" height="130px" src="images/happyman.png"/>
</h1>
<div class="happyman">
</div>
</div>
</body>
</html>
