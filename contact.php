<?php
	mysqli_connect('localhost','root','','');
?>
<!DOCTYPE html>
<html>
<head>
	
		<link rel="stylesheet" type="text/css" href="homepage.css" />
		
		<link rel="stylesheet" type="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	    
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title></title>
</head>
<body>
	<div class="contact maindiv">
		<!--<?php include 'header.php'; ?>-->
		<div class="header">
			<div class="name">BISS</div>
				<div class="nav">
						<label for="toggle" class="toggle-class" style="margin-top: 19px;">&#9776;</label>
						<input type="checkbox" id="toggle" />
						<div class="menu">
							<ul>
								<li><a href="homepage.php" style="text-decoration: none";>Home</a></li>
								<li><a href="about.php" style="text-decoration: none";>About Us</a></li>
								<li><a href="feature.php" style="text-decoration: none";>Staffing Solution</a></li>
								<li><a href="service.php" style="text-decoration: none";>Service</a></li>
								<li><a href="contact.php" style="text-decoration: none";>Cotact Us</a></li>
								<a href="Get a free Quote.php"><button name="Get a free Quote" class="btnquote">Get a free Quote</button></a>
								<!--<a href="Get a free Quote.php"><button name="Get a free Quote" class="btnquote">Get a free Quote</button></a>-->
							</ul>
						</div>
				</div>
			</div>
		</div>
	<div class="contact-div">
		<div class="contact-heading">Contact Us</div>
	</div>
	<div class="contact-form">
		<div class="container">
		<div class="row">
			<form method="POST">
				<div class="col-lg-6">
					<div class="form-group">
        				<label for="InputName" style="padding-top: 5%;">Your Name</label>
        				<div class="input-group">
          					<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
          						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
          				</div>
          				<label for="Inputemail" style="padding-top: 2%;">Email Address</label>
        				<div class="input-group">
          					<input type="email" class="form-control" name="email" id="Inputemail" placeholder="Enter Email Address" required>
          						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
          				</div>
          				<label for="Inputcontact" style="padding-top: 2%;">Contact No.</label>
        				<div class="input-group">
          					<input type="Number" class="form-control" name="contact" id="Inputcontact" placeholder="Enter Contact Number" required>
          						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
          				</div>
        				<label for="InputMessage" style="padding-top: 2%;">Address</label>
        				<div class="input-group">
         					 <textarea name="Inputaddress" id="Inputaddress" class="form-control" rows="5" required></textarea>
         						 <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
         				</div>
        				<label for="InputMessage" style="padding-top: 2%;">Inquiry</label>
        				<div class="input-group">
         					 <textarea name="Inputinquiry" id="Inputinquiry" class="form-control" rows="5" required></textarea>
         						 <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
         				</div>
     					 </div>
     					 <div class="form-group">
     					 	<div class="button">
     					 		<input type="submit" name="submit" value="Submit">
     					 	</div>
     					 </div>
      				</div>
      			</div>
			</form>
		</div>
	</div>
</div>

	<div class="contact-detail">
		<div class="address-first">
			<h2>Address</h2>
			<p>73,Sarita Socaity,<br>
			Near Kargil Chawk,<br>
			Punagam,<br>
			Surat.<br>

			+91 
			</p>
		</div>
		<div class="address-second">
			<p class="address-second-peragraph">73,Sarita Socaity,<br>
			Near Kargil Chawk,<br>
			Punagam,<br>
			Surat.<br>

			+91 
			</p>
		</div>
		<div class="contact-info">
			<h1>Email</h1>
			<p class="contact-email">name@gmail.com<br>
			<br>
			+91				<br>
			+91				<br></p>
		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>