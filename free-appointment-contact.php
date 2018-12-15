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

    <header class="bg-primary text-white">
      <div class="container text-center">
		<div class="lead_header">
			<h1>Free Estimate Appointment</h1>
			<form method="post" action="free-appointment-thanks.php">
				<div class="row mb-5">
					<div class="col-2"></div>
					<div class="col-8">
							<div class="book_block rounded p-5 mt-3">
								<p>Perfect! What is your Name?</p>
								<div class="row mt-5">
									<div class="col-2"></div>
									<div class="col-4">
										<input id="txtNumber" class="form-control form-control-lg d-inline-block" type="text" placeholder="First Name">
									</div>
									<div class="col-4">
										<input id="txtNumber" class="form-control form-control-lg d-inline-block" type="text" placeholder="Last Name">
									</div>
									<div class="col-2"></div>
								</div>
								
								<div class="row mt-5">
									<div class="col-2"></div>
									<div class="col-4">
										<input id="txtNumber" class="form-control form-control-lg d-inline-block" type="text" placeholder="Email Address">
									</div>
									<div class="col-4">
										<input id="txtNumber" class="form-control form-control-lg d-inline-block" type="text" placeholder="Mobile Phone Number">
										<span class="disclaimer">We will text you when we’re on our way</span>
									</div>
									<div class="col-2"></div>
								</div>

								<div class="row mt-5">
									<div class="col-12 text-center">
										<button type="submit" class="btn-lg lg-2 lead_header_button">Next</button>
									</div>
								</div>
							</div>
					</div>
					<div class="col-2"></div>
				</div>
			</form>
		</div>
      </div>
    </header>
	
	<section class="headbar">
      <div class="container">
        <div class="row">
			<div class="col-lg-3 mt-2"><img src="images/icon_same_day_service.png"> Same Day Service</div>
			<div class="col-lg-3 mt-2"><img src="images/icon_guarantee.png"> Price Guarantee</div>
			<div class="col-lg-3 mt-2"><img src="images/icon_rated.png"> Highly Rated</div>
			<div class="col-lg-3 mt-2"><img src="images/icon_insured.png"> Licensed & Insured</div>
        </div>
      </div>
    </section>  

	
	<?php include ("footer.php"); ?>
