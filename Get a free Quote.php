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
			<div class="name">Simplesite</div>
				<div class="nav">
						<label for="toggle" class="toggle-class" style="margin-top: 19px;">&#9776;</label>
						<input type="checkbox" id="toggle" />
						<div class="menu">
							<ul>
								<li><a href="homepage.php" style="text-decoration: none";>Home</a></li>
								<li><a href="about.php" style="text-decoration: none";>About Us</a></li>
								<!--<li><a href="" style="text-decoration: none";>Image</a></li>-->
								<li><a href="feature.php" style="text-decoration: none";>Staffing Solution</a></li>
								<li><a href="service.php" style="text-decoration: none";>Service</a></li>
								<li><a href="contact.php" style="text-decoration: none";>Cotact Us</a></li>
								<button name="Get a free Quote" ></a>Get a free Quote</button>
							</ul>
						</div>
				</div>
		</div>
	</div>
	<div class="heading-of-quote">Free Web/Mobile Project Esstimate	</div>
	<div class="abot-esstimate">
		<div class="image-of-esstimate">
			<img class="esstimate-image" src="freelance.png">
		</div>
		<div class="content-of-esstimate">
			<p>Get a free quote for web design and development, mobile app creation, software testing or another type of IT project. Fill out the form below with as much detail as possible and we will get back to you within 24 hours.</p>

			<p>Our qualified business analyst will prepare a free report that covers your goals and has a recommended set of project releases. A free call with the business analyst will follow - you will be able to ask any questions about the best way to bring your business idea to life.</p>
		</div>
	</div>
	<div class="you-will-get"><h2>You will get</h2>
		<div class="esstimate">
			<div class="project-requirement">
				<i class="glyphicon glyphicon-check"></i>
				<p>Sanity-check of the project requirements</p>
			</div>
			<div class="project-cost">
				<i class="glyphicon glyphicon-record"></i>
				<p>Ballpark cost and duration of the project</p>
			</div>
			<div class="releases">
				<i class="glyphicon glyphicon-th"></i>
				<p>Breakdown in releases (in the "agile" style)</p>
			</div>
			<div class="development-plan">
				<i class="glyphicon glyphicon-screenshot"></i>
				<p>Development plan for the first release</p>
			</div>
		</div>
		<div class="esstimate">
			<div class="esstimate-week">
				<i class="glyphicon glyphicon-move"></i>
				<p>Estimates in weeks</p>
			</div>
			<div class="stack">
				<i class="glyphicon glyphicon-cog"></i>
				<p>Tech stack recommendations</p>
			</div>
			<div class="report">
				<i class="glyphicon glyphicon-file"></i>
				<p>Custom report</p>
			</div>
			<div class="goals">
				<i class="glyphicon glyphicon-modal-window"></i>
				<p>Your goals addressed</p>
			</div>
		</div>
	</div>
	<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s" style="margin-left: 16%;margin-bottom: 4%;font-family: Calibri;">
                         <h2>Request for Esstimate</h2>
                    </div>
               </div>

               <div class="col-md-7 col-sm-10">
                    <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <form id="contact-form" action="#" method="post" class="form-of-class">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="name" placeholder="Name" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" name="email" placeholder="Email" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required="" minlength="10" maxlength="10">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                              </div>
                               <div class="col-md-12 col-sm-12">
                              		<div class="checkbox-group-title">What service are you intrested in??</div>
                              		<div><input type="checkbox" name="valcheck" value="Web app" id="valcheckwebapp"><label for="valcheckwebapp">Web app</label>
                              			 <input type="checkbox" name="valcheck" value="Android app" id="valcheckandroidapp"><label for="valcheckandroidapp">Android app</label>
                              		</div>
                              		<div><input type="checkbox" name="valcheck" value="ios app" id="valcheckiosapp"><label for="valcheckiosapp">ios app</label>
                              			<input type="checkbox" name="valcheck" value="Server side development" id="valcheckserver"><label for="valcheckserver">Server side development</label>
                              		</div>
                              		<div>
                              			<input type="checkbox" name="valcheck" id="valcheckQA" value="QA"><label for="valcheckQA">QA</label>
                              			 <input type="checkbox" name="valcheck" id="valcheckother" value="Other"><label for="valcheckother">Other</label>
                              		</div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                              		<input type="radio" name="newapp" value="New app-to be built from scratch" id="builtscratch"><label for="builtscratch">New app-to be built from scratch</label><br>
                              		<input type="radio" name="newapp" value="Existing app-continue developmnet" id="continuedevelopment"><label for="continuedevelopment">Existing app-continue development</label>
                              </div>
                               <div class="col-md-12 col-sm-6 formbudget">Expected Budget<br>
                                    <select class="form-control">
                                    	<option></option>
                               			<option value="i'm not sure">I am not sure</option>
                               			<option value="under doller">Under $10,000</option>
                               			<option value="doller">$10,000-$30,000</option>
                               			<option value="hige budget">30,000 & above</option>
                               		</select>
                               </div> 
                                <div class="col-md-12 col-sm-6 formbudget">Time Frame<br>
                                    <select class="form-control">
                                    	<option></option>
                               			<option value="i'm not sure">Less than 1 month</option>
                               			<option value="under doller">1 to 3 month</option>
                               			<option value="doller">3 to 6 month</option>
                               			<option value="hige budget">over 6 month</option>
                               		</select>
                               </div>  
                               <div class="col-md-12 col-sm-6 formbudget">Start<br>
                                    <select class="form-control">
                                    	<option></option>
                               			<option value="i'm not sure">In a few week</option>
                               			<option value="under doller">In a few month</option>
                               			<option value="doller">I am not sure</option>
                               		</select>
                               </div>                         
                              <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6 submitbtn">
                                   <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
                              </div>
                             
                        </form>
                    </div>
               </div>              
          </div>
     </div>
     <?php include('footer.php');?>
</section>
