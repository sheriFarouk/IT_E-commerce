<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="login.css" rel="stylesheet">
	<!-- -->
</head>
	<body>
<?php
		if(session_id() == '' || !isset($_SESSION)) {
			// session isn't started
			session_start();						
		}
		
		if( isset($_POST['sub'])  )
		{		
			
		}
	
 ?>

    <!--Wrap start -->
    <div class="wrap">
    	<!--header start -->
	    <div class="header">
	    	<ul class="wrap-top" id="nav">
	     		<li id="home"><a href="index.php" >Home</a></li>
	     		<li id="login"><a href="loginAdmin.php">Login As Admin</a></li>
	  		</ul>
	  	</div>

	  	<div class="signupform">
		    <form class="sign-up" action = "loginAdmin.php" name = "logInForm" method = "POST">
			    <h1 class="sign-up-title">Login</h1>
				<input type="text" class="sign-up-input" placeholder="User name" autofocus name = "userName" required>
			    <input type="password" class="sign-up-input" placeholder="Your password" name="pass" required>
			   
			    <br>
			    <input type="submit" value="login" class="sign-up-button" name = "sub" >	
				
			</form>
    	</div>
    </div>
    <!-- end of Wrap-->
  	</body>
</html>