<?php
include("loginserv.php");
?>

<html>
<html lang="en">
<head>
<title>Jolly Login Form a Flat Responsive Widget Template :: w3layouts </title>
	<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Jolly Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Meta tags -->


<!-- font-awesome icons -->
   <link rel="stylesheet" href="css/font-awesome.min.css" />

<!-- //font-awesome icons -->
<!--stylesheets-->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
<!--//style sheet end here-->

<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

</head>
<body>

<h1>MEDICARE</h1>

<div class="main-w3">
   <form action="" method="post">
        <h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2>
     <div class="login-w3ls">
         <div class="icons">
             
		     <input type="text" name="user" id="user" placeholder="user name" required="">
			 <span class="fa fa-user" aria-hidden="true"></span>
          <div class="clear"></div> 
		</div> 		   
		 <div class="icons">
				
				<input type="password" name="pass" id="pass" placeholder="Password" required="">
				<span class="fa fa-key" aria-hidden="true"></span>
		         <div class="clear"></div>
		</div>
	     <div class="btnn">
        
	          <button type="submit" name="submit">Login</button><br>
       	     
        </div>	
		<span><?php echo $error;?></span>
     </div>
   </form>

 </div> 

   
</div>
</body>
</html>