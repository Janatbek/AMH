<?php date_default_timezone_set('America/Los_Angeles'); ?>	
<?php include ("html-head.php"); ?>
<?php include ("header.php"); ?>
<script>
    var
</script>

<header class="bg-primary text-white">
  <div class="container text-center">
    <div class="lead_header">
        <h1>Free Estimate Appointment</h1>
        <form action="free-appointment-address.php" method="post">
            <input type="hidden" name="zipCode" value="<?php echo htmlspecialchars($_POST['zipCode']); ?>">
            <div class="row mb-5">
                <div class="col-2"></div>
                <div class="col-md-8 col-sm-12">
                        <div class="book_block rounded p-5 mt-3">
                            <p>When would you like us to stop by?</p>
                            <div class="row mt-5">
                                <div class="col-md-6 col-sm-12">
                                    <input
                                        class="form-control btn-white dropdown-toggle d-inline-block header-drop"
                                        type="date"
                                        name="date"
                                        min="<?php echo date('Y-m-d'); ?>"
                                        value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <select class="form-control btn-white dropdown-toggle d-inline-block header-drop" name="time" required>
                                      <option value="8:00am - 10:00pm">8:00 am - 10:00 am</option>
                                        <option value="10:00am - 12:00pm">10:00 am - 12:00 pm</option>
                                      <option value="12:pm - 2:00pm">12:00 pm - 2:00 pm</option>
                                      <option value="2:00pm - 4:00pm">2:00 pm - 4:00 pm</option>
                                      <option value="4:00pm - 6:00pm">4:00 pm - 6:00 pm</option>
                                    </select>
                                </div>
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
