<html>
	<head>
		<title>
			Create New User Account
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
    			margin: 0px 135px
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
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
			<br>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td>Enter a valid username  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your desired password  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your email ID</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
				<tr>
					<td>Enter your name  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your phone no.</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your address</td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br>
		</form>
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
