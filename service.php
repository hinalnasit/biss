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
	<div class="service maindiv">
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
						<li><a href="contact.php" style="text-decoration: none";>Contact</a></li>
						<a href="Get a free Quote.php"><button name="Get a free Quote" class="btnquote">Get a free Quote</button></a>
						<!--<a href="Get a free Quote.php"><button name="Get a free Quote" class="btnquote">Get a free Quote</button></a>-->
					</ul>
					</div>
			</div>
		</div>
	</div>
	<div class="softweredevlopment">Software Development
	</div>
	<div class="ProjectbasedSoftware"><strong>Project-based Software Development</strong></div>
	<div class="softwareline"></div>
	<div class="projectdescription">
		<div class="project-content" id="nav-1">
			We develop innovative and user-centric applications that offer usability, scalability, and portability. 
			We have client and server side development expertise in XML, Java, iOS, Android, PHP and JavaScript based custom, enterprise web or mobile application development. For project and code collaboration we use JIRA, Git, Mercurial, LibreSource, Tortoise SVN, and QcT.	<br><br>		
			<ul class="project-items">
			<li>Web Aplications</li>
			<li>Mobile Applications</li>
			<li>Product Management</li>
			<li>User Experience & Design</li>
			<li>Product engineering and Prototype Development</li>
			<li>Agile Development</li>
			</ul>
		</div>
		<div class="project-image">
			<img src="project.jpg" style="width: 200%">
		</div>
	</div>
	<div class="offsitesoftware">
		<div class="Softwareteam"><strong>Offsite Software Development Team</strong></div>
		<div class="softwareline"></div>
		<div class="software-content">Availability of ASP .NET, Java, mobile developers, analysts and Architects from our Lansdale, PA office location for project-based consulting to work on your projects. The main area of the team’s expertise is in ASP.NET, Java and Mobile technologies for projects of various types and scope: from web and mobile applications to SaaS and enterprise or in-house integration projects. Tri-Force is capable to provide the full team on demand, on highly competitive price terms compare to other software outsourcing vendors. The team can be enhanced by Tri-Force analysts and QA specialists.
		</div>
		<div class="logocontent">
			<div class="logo">
				<img src="design.jpg" style="width: 90%;padding-top: 5%;">
			</div>
			<div class="contentoflogo" id="softwarebenifits">
				<h2><b>Benefits</b></h2>
				<ul>
				<li>Getting a high-quality results within the guaranteed time limits.</li>
				<li>Minimizing costs on communication inside the team and considerably Cutting the final cost on projects.</li>
				<li>Reduced HR management costs for your company.</li>
				<li>Cuts cost up to 30%</li>
				<li>No capital expenditures</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="dedicateddevloper">
		<div class="heading-dedicated-developer"><strong>Offshore Dedicated Developer</strong></div>
		<div class="softwareline"></div>
		<div class="dedicated-developer-content">Most of the time we worried about the High cost of hiring developers. Here’s the solution that will definitely help you. Yes, the solution is a Dedicated team approach. When you hire Dedicated developers from Crest Infotech you could end up saving Hundreds of Thousands of Dollars in web development and app development costs.From Crest Infotech.
		</div>
		<div class="Offshore-development">
			<div class="offshore-developer-image">
				<img src="developer.jpg" style="width:100%; ">
			</div>
			<div class="Offshore-developer-content">
			<p class="heading-specilize"><h3><b>We specializes in</b></h3></p>
				    Java, ASP.Net, PHP technologies
					Mobile Apps, Website Design PSDs to HTML to CMS, PHP & MySQL Development WordPress, Joomla, Ecommerce B2B & B2C Website and Portal Development Magneto, Shopify, Drupal, E-Commerce / Online Store Solutions				Database administration, Systems Administration, infrastructure support, business intelligence and Big data.
			</div>
		</div>
	</div>	
		<?php include('footer.php')?>	
</body>
</html>