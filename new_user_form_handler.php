<html>
	<head>
		<title>Add New User</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['username']))
				{
					$data_missing[]='User Name';
				}
				else
				{
					$user_name=trim($_POST['username']);
				}
				if(empty($_POST['password']))
				{
					$data_missing[]='Password';
				}
				else
				{
					$password=$_POST['password'];
				}
				if(empty($_POST['email']))
				{
					$data_missing[]='Email ID';
				}
				else
				{
					$email_id=trim($_POST['email']);
				}

				if(empty($_POST['name']))
				{
					$data_missing[]='Name';
				}
				else
				{
					$name=$_POST['name'];
				}
				if(empty($_POST['phone_no']))
				{
					$data_missing[]='Phone No.';
				}
				else
				{
					$phone_no=trim($_POST['phone_no']);
				}
				if(empty($_POST['address']))
				{
					$data_missing[]='Address';
				}
				else
				{
					$address=$_POST['address'];
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="INSERT INTO Customer (customer_id,pwd,name,email,phone_no,address) VALUES (?,?,?,?,?,?)";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ssssss",$user_name,$password,$name,$email_id,$phone_no,$address);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					//echo $affected_rows."<br>";
					// mysqli_stmt_bind_result($stmt,$cnt);
					// mysqli_stmt_fetch($stmt);
					// echo $cnt;
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						header('location:user_reg_success.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
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
