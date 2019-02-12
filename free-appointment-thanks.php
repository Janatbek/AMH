<?php
if (isset($_POST["email"])) {
    $email_to = "americanjunkhaul@gmail.com";
    $email_subject = "Quote request from ". $_POST["fname"];
    $from = "americanjunkhaul@gmail.com";


    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666; margin: auto" cellpadding="10" border="1">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

    $message .= "<tr><td><strong>Zip Code:</strong> </td><td>" . strip_tags($_POST['zipCode']) . "</td></tr>";
    $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

    $message .= "<tr><td><strong>Type of Service:</strong> </td><td>" . strip_tags($_POST['serviceType']) . "</td></tr>";
    $message .= "<tr><td><strong>Date of Service:</strong> </td><td>" . strip_tags($_POST['date']) . "</td></tr>";
    $message .= "<tr><td><strong>Time Between:</strong> </td><td>" . strip_tags($_POST['time']) . "</td></tr>";

    $message .= "<tr><td><strong>Notes:</strong> </td><td>" . $_POST['notes'] . "</td></tr>";
    
    $message .= "</table>";
    $message .= "</body></html>";
    // create email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: ". $from . "\r\n" .
        "Reply-To: " . $_POST["email"] . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($email_to, $email_subject, $message, $headers);
}
?>

<?php include("html-head.php"); ?>
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
