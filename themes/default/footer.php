

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"><?php echo $sites['copyright']['frontend'].' <a href="'.$protocols.'://'.$domainTLD.'">'.$sites['name'].'</a> .'.$law['full']['content']['footer']; ?><br />
	  <?php echo $law['full']['content']['developper'].': <href="'.$protocols.'://'.$credits['developper']['alexonbstudio']['url'].'" rel="dofollow">'.$credits['developper']['alexonbstudio']['name'].'</a>'.' | '.$law['full']['content']['designer'].': <href="'.$protocols.'://'.$credits['webdesigner']['startbootstrap']['url'].'" rel="dofollow">'.$credits['webdesigner']['startbootstrap']['name'].'</a>'; ?><br />
		<a href="<?php echo $protocols.'://'.$domainTLD.'/'.__WP_FR_URL__; ?>"><i class="langs langs-fr"></i></a> 
		<a href="<?php echo $protocols.'://'.$domainTLD.'/'.__WP_EN_URL__; ?>"><i class="langs langs-us"></i></a>
	  </p>
    </div>
    <!-- /.container -->
  </footer>

<!--SEO-->



<!--Template-->

  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
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