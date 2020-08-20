

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
				<div class="grade grade-<?php echo strtolower(substr($JE_DSslLabsOut->endpoints['0']->grade,0,1)); ?>">
					<a target="_blank" href="https://www.ssllabs.com/ssltest/analyze.html?d=<?php echo $JE_DSslLabsOut->host; ?>&s=<?php echo $JE_DSslLabsOut->endpoints['0']->ipAddress; ?>">
						<b><?php echo $JE_DSslLabsOut->endpoints['0']->grade; ?></b>
					</a>
				</div>
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
  <!--<script src="<?php echo $version['external']['intl-tel-input']['js']; ?>"></script>
  
  
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

  </script>-->
    
  <? if(!empty($seo['addthis']['key'])){ ?>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $seo['addthis']['key']; ?>"></script>
  <?php } ?>
  <?php if(!empty($seo['google']['tag-manager'])){ ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $seo['google']['tag-manager']; ?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php } ?>
  <?php 
  if(!empty($seo['crisp']['key'])){ 
	echo '<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="'.$seo['crisp']['key'].'";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>';
  }
  ?>
  <script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
    <?php  if(!empty($seo['tidio']['key'])){  ?>
  <script src="//code.tidio.co/<?php echo $seo['tidio']['key']; ?>.js" async></script>
	<?php } ?>
</body>
</html>
<?php ob_end_flush(); ?>