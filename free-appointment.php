<?php date_default_timezone_set('America/Los_Angeles'); ?>	
<?php include ("html-head.php"); ?>
<?php include ("header.php"); ?>

<header class="bg-primary text-white">
  <div class="container text-center">
    <div class="lead_header">
        <h1>Free Estimate Appointment</h1>
        <form action="free-appointment-thanks.php" method="post">
            <input type="hidden" name="zipCode" value="<?php echo htmlspecialchars($_POST['zipCode']); ?>">
            <div class="row mb-5">
                <div class="col-2"></div>
                <div class="col-md-8 col-sm-12">
                    <div class="form-fields-wrapper">
                        <div class="col-sm-12 col-md-12">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group required-fields">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Mike" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group required-fields">
                                        <label for="email">Email</label>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="mike@americanjunkhaul.com" required>
                                    </div>
                                </div>
                            </div> <!-- row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group required-fields">
                                        <label for="date">Service date</label>
                                        <input
                                                class="form-control"
                                                type="date"
                                                name="date"
                                                id="date"
                                                min="<?php echo date('Y-m-d'); ?>"
                                                value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group required-fields">
                                        <label for="time">Time</label>
                                        <select id="time" class="form-control custom-select-width" name="time" required>
                                            <option value="8:00am - 10:00pm">8:00 am - 10:00 am</option>
                                            <option value="10:00am - 12:00pm">10:00 am - 12:00 pm</option>
                                            <option value="12:pm - 2:00pm">12:00 pm - 2:00 pm</option>
                                            <option value="2:00pm - 4:00pm">2:00 pm - 4:00 pm</option>
                                            <option value="4:00pm - 6:00pm">4:00 pm - 6:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group required-fields">
                                        <label for="phone">Phone</label>
                                        <input type="tel"
                                               id="phone"
                                               name="phone"
                                               class="form-control"
                                               placeholder="123-456-7890">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group required-fields">
                                        <label for="service-type">Service Type</label>
                                        <select id="service-type" class="form-control custom-select-width" name="serviceType">
                                            <option value="commercial">Commercial</option>
                                            <option value="residential">Residential</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="serviceNotes">Service Notes</label>
                                        <textarea name="notes" class="form-control textarea-width" id="service-notes" rows="3" placeholder="Please add additional notes"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn-lg lg-2 lead_header_button">Submit</button>
                                </div>
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
