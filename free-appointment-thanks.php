<?php
	if (isset($_POST["email"])) {
		$email_to = "americanjunkhaul@gmail.com";
		$email_subject = "Quote request from ". $_POST["fname"];
		$from = "americanjunkhaul@gmail.com";
		
		$email_message  = "Form details below.\r\n";
		$email_message .= "First Name: " . $_POST["fname"] . "\r\n";
		$email_message .= "Last Name: " . $_POST["lname"] . "\r\n";
		$email_message .= "Email: " . $_POST["email"] . "\r\n";
		$email_message .= "Telephone: " . $_POST["phone"] . "\r\n";
		$email_message .= "Address: " . $_POST["street"] . " ";
		$email_message .= $_POST["apt"] . " " . $_POST["city"] . ", " . $_POST["zipCode"] . "\r\n";
		$email_message .= "Requested service date: " . $_POST["date"] . "\r\n";
		$email_message .= "between: " . $_POST["time"] . "\r\n";
        // create email headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: ". $from . "\r\n" .
        "Reply-To: " . $_POST["email"] . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
        mail($email_to, $email_subject, $email_message, $headers);
	}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thanks! You're All Set!</title>
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
            <div class="row mb-5">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="book_block rounded p-5 mt-3">
                        <p>Thank you for booking an appointment with us.</p>
                        <p>Our specialist will give you call shortly with pricing and confirm your appointment</p>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
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
