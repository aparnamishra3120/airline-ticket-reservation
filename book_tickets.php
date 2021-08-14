<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
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
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/>
		<h1 id="title">
			INDIAN AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="view_flights_form_handler.php" method="post">
			<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Origin</td>
					<td class="fix_table">Enter the Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="bangalore">
											<option value="mumbai">
													<option value="delhi">
														</datalist>
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="mumbai">
  						  	<option value="mysore">
  						  	<option value="mangalore">
  						  	<option value="chennai">
  						  	<option value="hyderabad">
										                                <option value="Mumbai">Mumbai</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="JharKhand">JharKhand</option>
                                                    <option value="Udisa">Udisa</option>
                                                     <option value="Uttarakhand">Uttarakhand</option>
                                                     <option value="Chhatisgarh">Chhatisgarh</option>
                                                     <option value="Gujrat">Gujrat</option>
                                                     <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                     <option value="Punjab">Punjab</option>
                                                     <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                     <option value="West Bengal">West Bengal</option>
                                                     <option value="Goa">Goa</option>
                                                     <option value="Hariyana">Hariyana</option>
                                                     <option value="Nagaland">Nagaland</option>
                                                     <option value="Telangana">Telangana</option>
                                                    <option value="Chennai">Chennai</option>
                                                    <option value="Kerla">Kerla</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Asam">Asam</option>
                                                    <option value="Aandhra pradesh">Aandhra Pradesh</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Cherapunji">Cherapunji</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Arunanchal Pradesh ">Arunanchal Pradesh</option>
                                                    <option value="sikkim">sikkim</option>
                                                    <option value="Australia">Australia</option>
                                                   <option value="Amarica">Amarica</option>
                                                   <option value="Africa">Africa</option>
                                                  <option value="Singapore">Singapore</option>
                                                  <option value="Dubai">Dubai</option>
                                                  <option value="Poland">Poland</option>
                                                 <option value="Shrilanka">Shrilanka</option>
                                                 <option value="Europe">Europe</option>
                                                 <option value="Russia">Russia</option>
                                                 <option value="China">China</option>
                                                 <option value="Nepal">Nepal</option>
                                                 <option value="Rome">Rome</option>
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Departure Date</td>
					<td class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php
							$todays_date=date('Y-m-d');
							echo $todays_date;
						?>
						max=
						<?php
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days"));
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
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
