

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
	  <p>
		<?php if(!empty($social['facebook']['name'])){ ?><a href="<?php echo $social['facebook']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> FACEBOOK"><i class="fab fa-facebook-f fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['twitter']['name'])){ ?><a href="<?php echo $social['twitter']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITTER"><i class="fab fa-twitter fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['pinterest']['name'])){ ?><a href="<?php echo $social['pinterest']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> PINTEREST"><i class="fab fa-pinterest fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['youtube']['name'])){ ?><a href="<?php echo $social['youtube']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> YOUTUBE"><i class="fab fa-youtube fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['twitch']['name'])){ ?><a href="<?php echo $social['twitch']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITCH"><i class="fab fa-twitch fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['discord']['name'])){ ?><a href="<?php echo $social['discord']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DISCORD"><i class="fab fa-discord fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['dailymotion']['name'])){ ?><a href="<?php echo $social['dailymotion']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DAILYMOTION"><i class="fab fa-dailymotion fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['mixcloud']['name'])){ ?><a href="<?php echo $social['mixcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> MIXCLOUD"><i class="fab fa-mixcloud fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['instagram']['name'])){ ?><a href="<?php echo $social['instagram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> INSTAGRAM"><i class="fab fa-instagram fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['linkedin']['name'])){ ?><a href="<?php echo $social['linkedin']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> LINKEDIN"><i class="fab fa-linkedin fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['github']['name'])){ ?><a href="<?php echo $social['github']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> GITHUB"><i class="fab fa-github fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['viadeo']['name'])){ ?><a href="<?php echo $social['viadeo']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> VIADEO"><i class="fab fa-viadeo fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['slack']['name'])){ ?><a href="<?php echo $social['slack']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SLACK"><i class="fab fa-slack fa-3x"></i></a><?php } ?> 
		<?php if(!empty($social['telegram']['name'])){ ?><a href="<?php echo $social['telegram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TELEGRAM"><i class="fab fa-telegram fa-3x"></i></a><?php } ?> 
		<?php if(!empty($social['soundcloud']['name'])){ ?><a href="<?php echo $social['soundcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> soundcloud"><i class="fab fa-soundcloud fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['blogger']['name'])){ ?><a href="<?php echo $social['blogger']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> blogger"><i class="fab fa-blogger fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['spotify']['name'])){ ?><a href="<?php echo $social['spotify']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SPOTIFY"><i class="fab fa-spotify fa-3x"></i></a> <?php } ?>
		<?php if(!empty($social['tiktok']['name'])){ ?><a href="<?php echo $social['tiktok']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TIKTOK"><i class="fab fa-tiktok fa-3x"></i></a><?php } ?>			</p>
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