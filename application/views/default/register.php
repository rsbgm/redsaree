<?php
	$name = $_POST['name'];
	
	$msg2 = "Your order has been submitted:\n\n";
	$msg2 .= "The following are the details:\n";
	
	$msg2 .= "----------------------------------------------------------------------\n\n";
	$msg2 .= "Name: ".$_POST['name']."\n\n";
	$msg2 .= "Email Address: ".$_POST['email']."\n\n";
	$msg2 .= "Shipping Address:\n";
	$msg2 .= $_POST['shippingAddress']."\n";
	$msg2 .= $_POST['shippingAddress2']."\n\n";
	$msg2 .= "Mobile Phone: ".$_POST['mobileNumber']."\n";
	$msg2 .= "Landline Phone: ".$_POST['landlineNumber']."\n\n";
	$msg2 .= "Your ORDER DETAILS:\n\n";
	$msg2 .= "\tShoe Type: ".ucfirst($_POST['category'])."\n";
	$msg2 .= "\tDesign: ".ucfirst($_POST['design'])."\n";
	$msg2 .= "\tSize: ".$_POST['size']."\n";
	$msg2 .= "\tQty: ".$_POST['qty']."\n\n";
	$msg2 .= "----------------------------------------------------------------------\n";

	$msg2 .= "Red Saree will get in touch with you to re-confirm your order\n";
	$msg2 .= "and to discuss the payment and delivery terms.\n\n\n\n";
	$msg2 .= "Red Saree\n";

	$mailheaders = 'From: Red Saree <inquire@redsaree.com.ph>'."\r\n";
	$mailheaders .= 'Cc: Red Saree <inquire@redsaree.com.ph>'."\r\n";
	$mailheaders .= 'Bcc: webguy@bewebbled.com'."\r\n";
	$subject = "ORDER CONFIRMATION";
	$recipient = $_POST['email'];
	
	mail($recipient,$subject,$msg2,$mailheaders);
?>
	<!--// ##### Just to show that email is being sent ##### //-->
	<html>
	<head>
	<title>Red Saree | Registering...</title>
	</head>
	<body style="background-color:red;">
		<div>
			<center>
				<h2 class="clr1" style="color:white;">Processing request... <span style="text-decoration:blink">Please wait...</span></h2>
			</center>
		</div>
	<script type="text/javascript">
		window.location.assign("./?page=thankyou&name=<?php echo $_POST['name']; ?>");
	</script>
	</body>
	</html>

