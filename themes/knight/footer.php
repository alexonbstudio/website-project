
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['big']; ?>" alt="<?php echo $sites['name']; ?>"></a>
            <h3>Knight</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="<?php echo $social['twitter']['url']; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="<?php echo $social['facebook']['url']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?php echo $social['instagram']['url']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="<?php echo $social['linkedin']['url']; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <?php echo $law['full']['content']['developper'].': <href="'.$protocols.'://'.$credits['developper']['alexonbstudio']['url'].'" rel="dofollow">'.$credits['developper']['alexonbstudio']['name'].'</a>'.' | '.$law['full']['content']['designer'].': <href="'.$protocols.'://'.$credits['webdesigner']['bootstrapmade']['url'].'" rel="dofollow">'.$credits['webdesigner']['bootstrapmade']['name'].'</a>'; ?><br />
		<a href="<?php echo $protocols.'://'.$domainTLD.'/'.__WP_FR_URL__; ?>"><i class="langs langs-fr"></i></a> 
		<a href="<?php echo $protocols.'://'.$domainTLD.'/'.__WP_EN_URL__; ?>"><i class="langs langs-us"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"><?php echo $sites['copyright']['frontend'].' <a href="'.$protocols.'://'.$domainTLD.'">'.$sites['name'].'</a> .'.$law['full']['content']['footer']; ?>
	  </p>
    </div>
    <!-- /.container -->
  </footer>

<!--SEO-->



<!--Template-->

  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
  <script src="<?php echo $version['external']['jquery.easing']['js']; ?>"></script>
  <script src="<?php echo $protocols.'://'.$domainTLD.'/'.$version['internal']['php-email-form']['js']; ?>"></script>
  <script src="<?php echo $version['external']['jquery-sticky']['js']; ?>"></script>
  <script src="<?php echo $version['external']['venobox']['js']; ?>"></script>
  <script src="<?php echo $version['external']['isotope-layout']['js']; ?>"></script>
  <script src="<?php echo $version['external']['owl.carousel']['js']; ?>"></script>
  <script src="<?php echo $version['external']['aos']['js']; ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $protocols.'://'.$domainTLD.'/'.$version['internal']['production']['js']['knight']; ?>"></script>
  <script src="<?php echo $version['external']['intl-tel-input']['js']; ?>"></script>
  
	<script>

		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
			initialCountry: "auto",
			geoIpLookup: function(success, failure) {
				$.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					var countryCode = (resp && resp.country) ? resp.country : "";
					success(countryCode);
				});
			}
		});

		var iti = window.intlTelInputGlobals.getInstance(input);
		iti.isValidNumber(); 

  </script>
  
</body>
</html>
<?php ob_end_flush(); ?>