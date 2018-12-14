<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>American Junk Haul</title>
	<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	  <link href="css/ajh.css" rel="stylesheet">

  </head>

<?php include ("header.php"); ?>

    <header class="bg-primary text-white header_short">
      <div class="container text-center">
		<div class="lead_header">
			<h1>Referral Program</h1>
<p class="lead">We love to share with people that help us grow</p>
		</div>
      </div>
    </header>
	
	<section class="headbar">
      <div class="container">
        <div class="row">
			<div class="col-lg-3"><img src="images/icon_same_day_service.png"> Same Day Service</div>
			<div class="col-lg-3"><img src="images/icon_guarantee.png"> Price Guarantee</div>
			<div class="col-lg-3"><img src="images/icon_rated.png"> Highly Rated</div>
			<div class="col-lg-3"><img src="images/icon_insured.png"> Licensed & Insured</div>
        </div>
      </div>
    </section>  
	  
	  
    <section id="about">
      <div class="container">
		  <div class="row">
			  <div class="col-12"><h2 class="text-center">Spread the word. Earn Ca$h.</h2></div>
		  </div>
		  
        <div class="row">
			<div class="col-lg-1 mx-auto"></div>
			<div class="col-lg-3 mx-auto">
		  	<img src="images/image_recycle.png" class="img-fluid">
		  </div>
		  <div class="col-lg-7 mx-auto">
            <p class="lead">Everyone can have a junk free home or office and with American Junk Haul Referral Program you will earn 10%* from every new client you refer us to.</p>

			<p class="lead"><strong>Here is How it Works:</strong><br>
			<ol>
				<li>Signup for referral program on this page.</li>
				<li>We email you your personal referral code that you can distribute to your friends and family.</li>
				<li>Every time new customer mentions your referral code, we will send you a 10% of every service we perform for them.</li>
			</ol>
			  </p>
			<p class="lead disclaimer"><em>* Up to $100.00. New customers only, 1 referral payout per customer. Cannot refer yourself. Must be existing customer to take advantage of referral program. Restrictions apply. Call for more details.</em></p>
		    </div>
        </div>
		<div class="row mt-5">
			  <div class="col-12"><h2 class="text-center">Signup for Referral Program.</h2></div>
		  </div>
		<form>
			<div class="row mt-4">
				<div class="col-lg-2 mx-auto"></div>
				<div class="col-lg-4 mx-auto">
					<input type="text" class="form-control" id="usr" placeholder="First Name">
				</div>
				<div class="col-lg-4 mx-auto">
					<input type="text" class="form-control" id="usr" placeholder="Last Name">
				</div>
				<div class="col-lg-2 mx-auto"></div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-2 mx-auto"></div>
				<div class="col-lg-4 mx-auto">
					<input type="text" class="form-control" id="usr" placeholder="Email Address">
				</div>
				<div class="col-lg-4 mx-auto">
					<input type="text" class="form-control" id="usr" placeholder="Mobile Phone Number">
					<span class="disclaimer">We will text you with important info.</span>
				</div>
				<div class="col-lg-2 mx-auto"></div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-12 mx-auto text-center">
					<button type="submit" class="btn-lg lg-2 lead_header_button">Next</button>
				</div>
			</div>
		</form>
		
        </div>
    </section>  
	// put yelp here
	<section class="headbar">
      <div class="container">
        <div class="row">
			<div class="col-lg-6 mt-2"><span class="cta_title">Book Your <strong>Free Appointment</strong> Today!</span></div>
			<div class="col-lg-6">
				<form method="post" action="free-appointment">
					<input id="txtNumber" class="form-control form-control-lg d-inline-block width200" type="text" placeholder="Your Zip Code" onkeypress="return isNumberKey(event)">
					<button type="submit" class="btn-lg lg-2 lead_header_button">Check Availability</button>
				</form>
			</div>
        </div>
      </div>
    </section>    
	  
	  
<?php include ("footer.php"); ?>
