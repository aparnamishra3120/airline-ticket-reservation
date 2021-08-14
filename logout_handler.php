<html>
	<head>
		<title>Logout Handler</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location: home_page.php");
		?>
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
