<?php
$zipCode = $_POST['zipCode'];
?>
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
			<form action="free-appointment-address.php" method="post">
				<div class="row mb-5">
					<div class="col-2"></div>
					<div class="col-8">
							<div class="book_block rounded p-5 mt-3">
								<p>When would you like us to stop by?</p>
								<div class="row mt-5">
									<div class="col-2"></div>
									<div class="col-4">
										<select class="form-control btn-white dropdown-toggle d-inline-block header-drop" id="exampleSelect1" name="date" required>
										    <option value="">Saturday, Aug 25th</option>
											<option value="">Sunday, Aug 25th</option>
											<option value="">Monday, Aug 25th</option>
											<option value="">Tuesday, Aug 25th</option>
											<option value="">Wednsday, Aug 25th</option>
											<option value="">Thursday, Aug 25th</option>
											<option value="">Friday, Aug 25th</option>
										</select>
									</div>
									<div class="col-4">
										<select class="form-control btn-white dropdown-toggle d-inline-block header-drop" id="exampleSelect1" name="time" required>
										  <option value="">10:00am - 12:00pm</option>
										  <option value="">11:00am - 1:00pm</option>
										  <option value="">12:00pm - 2:00pm</option>
										  <option value="">1:00pm - 3:00pm</option>
										  <option value="">2:00pm - 4:00pm</option>
										</select>
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