<?php
if(!isset($_REQUEST['id'])){
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success</title>
	<link rel="stylesheet"  type="text/css" href="elements.css" />
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
	
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
	
    <p>Your order has submitted successfully</p>
</div>
<div class="container1">
 <!-- feedback form starts here -->
 <div id="feedback">
  <!-- heading of the form -->
	<div class="head">
		<h3>FeedBack Form</h3>
		<p>enter customer details</p>
    </div>
	
	<!-- feedback form form -->
		<form id="form" action="#" method="post">
		<input type = "text" name="vname" value="" placeholder="Your Name"/>
		<input type = "text" name="vemail" value="" placeholder="Your Email"/>
		<input type = "text" name="sub" value="" placeholder="Subject"/>
		<label>message</label>
		<textarea name="msg" placeholder="Type your text here..."></textarea>
		<input type="submit" name="submit" id="send" value="Send Feedback"/>
		</form>
		<h3><?php include "secure_email_code.php"?></h3> 
 </div> 
</body>
</html>