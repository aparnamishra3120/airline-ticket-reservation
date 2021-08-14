<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/>
		<h1 id="title">
				INDIAN AIRLINES RESERVATION SYSTEM!
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>

		<br>
		<br>

			<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
				<fieldset>
					<legend>Login Details:-</legend>
					<strong>Username:</strong><br>
					<input type="text" name="username" placeholder="Enter your username" required><br><br>
					<strong>Password:</strong><br>
					<input type="password" name="password" placeholder="Enter your password" required><br><br>
					<strong>User Type:</strong><br>
					Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/>
					<br>
					<?php
						if(isset($_GET['msg']) && $_GET['msg']=='failed')
						{
							echo "<br>
							<strong style='color:red'>Invalid Username/Password</strong>
							<br><br>";
						}
					?>
					<input type="submit" name="Login" value="Login">
				</fieldset>
				<br>
				<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
			</form>



		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<br>
		<br>
		<br>
		<br>
		<br>


		<br>
		<br>
		<br>
		<br>
		<br>	<br>
			<br>
			<br>
			<br>
			<br>	<br>
				<br>
				<br>
				<br>
				<br>	<br>

		<div class="col-md-12">
			<center>
										<ul class="social-icons">
												<li><a href="https://www.facebook.com/profile.php?id=100060109954183">Find us On FACEBOOK<i class="fa fa-facebook"></i></a></li>
												<li><a href="https://twitter.com/Aparna081431">Find us On TWITTER<i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.linkedin.com/in/aparna-mishra-454a37160/">Find us On LINKDIN<i class="fa fa-linkedin"></i></a></li>
												<li><a href="https://www.youtube.com/channel/UCNQlSBlk6gFGkhCxkptf1ZQ">Our YOUTUBE Channel<i class="fa fa-youtube"></i></a></li>
												<li><a href="https://www.instagram.com/sakshu_devde/">Find us on INSTAGRAM<i class="fa fa-instagram"></i></a></li>
												<li><a href="https://www.instagram.com/_a_p_x_31/">Find us on INSTAGRAM<i class="fa fa-instagram"></i></a></li>
										</ul>
									</center>
								</div>
								<div class="col-md-12">
									<center>
										<p>Copyright &copy; Aparna-Sakshi

								| Design: <a href="#" target="_parent"> Aparna-Sakshi </a></p>
							</center>
								</div>
	</body>
</html>
