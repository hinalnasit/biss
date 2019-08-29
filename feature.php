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
	<div class="staff maindiv">
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
						<li><a href="contact.php" style="text-decoration: none";>Contact Us</a></li>
						<a href="Get a free Quote.php"><button name="Get a free Quote" class="btnquote">Get a free Quote</button></a>
					</ul>
				</div>
		</div>
	</div>
		<div class="staffheading">Staffing Solution</div>
	</div>
	<div class="staff-text">	
			<p>The candidates we hire for you will possess the right amount of knowledge and skills to work on your project, and we will also provide the infrastructural support for your projects.The only constant in the endlessly evolving world of software development is changing. Newer developments in the IT sector create a need for radically new skill sets, and it is not easy, nor advisable, for midsize or small organizations to hire more and more employees, upgrade their existing workforce, or make huge investments in IT infrastructure.</p>

			<p>Our Staff Augmentation program will let you access a vast pool of talented employees, and we can take care of your short-term (minimum for a month) as well as long-term (1-5 years) project requirements.</p>

			<p>Staffing comprises of choosing the appropriate person for the appropriate job, training, and on-boarding while offering appropriate remuneration, performance appraisals, promotions, and transfer to employees.</p>

			<p>We understands your concerns and requirements, and we offer you to hire talented IT professionals who will work exclusively on your projects.The programmers you hire will send your daily, weekly or monthly reports, and you can communicate with them anytime using the phone, chat, or email.</p>

			<div class="how-to-hire" id="points-how-to-hire">
				<ul>
					<li>Once you let us know of your requirements, our recruitment team prepares an objective evaluation criterion for the candidates.</li>	
					<li>Every candidate passes through a number of tests, and is then interviewed by our recruiters.</li>
					<li>The candidate you select will be ready to start working on your project right away.</li>
					<li>We send you the resumes of the three candidates who best fulfill your requirement.</li>	
					<li>You can conduct a telephonic interview, and test the technical expertise of the candidates using the internet.</li>
				</ul>
			</div>
			<div class="image-staff">
					<img src="staff.jpg" class="image-of-staff">
			</div>	
			<div class="hire-developer" id="hire-developer"><h3>We hire</h3>
				<ul>
					<li>Hire .Net Developer</li>
					<li>Hire Android App Developer</li>
					<li>Hire IOS App Developer</li>
					<li>Hire PHP Developer</li>
					<li>Hire Wordpress Developer</li>
					<li>Hire Magento Developer</li>
				</ul>
			
			</div>

			<div class="staff-benifits-heading" style="font-family: Calibri;"><h1>Benefits of Staff Augmentation Services</h1>
					<div id="points-staff-benifits-heading">
						<ul>	
							<li>Flexibility and availability of individuals with different skill-sets in case of changing requirements</li>
							<li>Complete technical assistance and infrastructure support</li>
							<li>Based on the contract, you can stop using the services once your project is complete</li>
							<li>Experienced professionals with skill-sets that perfectly match your requirements</li>
							<li>Talented professionals working on your project for low prices</li>
						</ul>
					</div>
					
			</div>
			
	</div>

		<?php include('footer.php');?>
</body>
</html>