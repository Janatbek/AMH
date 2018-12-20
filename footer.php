    <!-- Footer -->
    <footer class="py-5">
      <div class="container text-center">
				<img src="images/logo_top.png">
				<ul class="list-inline footer_social mt-5">
					<li class="list-inline-item"><a href="#"><img src="images/social_facebook.png"></a></li>
					<li class="list-inline-item"><a href="#"><img src="images/social_twitter.png"></a></li>
					<li class="list-inline-item"><a href="#"><img src="images/social_youtube.png"></a></li>
					<li class="list-inline-item"><a href="#"><img src="images/social_linkedin.png"></a></li>
				</ul>		  
				<ul class="list-inline mt-5">
					<li class="list-inline-item"><a href="about-us">About Us</a></li>
					<li class="list-inline-item"><a href="frequently-asked-questions">FAQ’s</a></li>
					<!-- <li class="list-inline-item"><a href="referral-program">Referral Program</a></li> -->
					<li class="list-inline-item"><a href="blog">Blog</a></li>
					<li class="list-inline-item"><a href="locations">Locations</a></li>
					<li class="list-inline-item"><a href="terms-of-use">Terms of Use</a></li>
					<li class="list-inline-item"><a href="privacy-policy">Privacy Policy</a></li>
				</ul>
				<p class="mt-5 text-center">Copyright &copy; American Junk Haul 2018 - <?php echo date("Y") ?></p>
				<p>Built by <a href="https://github.com/Janatbek">Janatbek Sharsheyev</a></p>
      </div>
      <!-- /.container -->
    </footer>
	  
	<script>
	console.log(window.location.href)
		function isNumberKey(evt) {
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)){
				return false;
			} else {
				return true;
			}
		} 
		if (window.location.href === 'https://americanjunkhaul.com/free-appointment-thanks.php') {
			setTimeout(function () {
				window.location.href= 'https://americanjunkhaul.com';
			}, 15000);
		}  
	</script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>