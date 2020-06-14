

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"><?php echo $sites['copyright']['frontend'].' <a href="'.$protocols.'://'.$sites['domain'].'">'.$sites['name'].'</a> .'.$law['full']['content']['footer']; ?><br />
	  <?php echo $law['full']['content']['developper'].': <href="'.$protocols.'://'.$credits['developper']['alexonbstudio']['url'].'" rel="dofollow">'.$credits['developper']['alexonbstudio']['name'].'</a>'.' | '.$law['full']['content']['designer'].': <href="'.$protocols.'://'.$credits['webdesigner']['bootstrapmade']['url'].'" rel="dofollow">'.$credits['webdesigner']['bootstrapmade']['name'].'</a>'; ?><br />
		<a href="<?php echo $protocols.'://'.$sites['domain'].'/'.__WP_FR_URL__; ?>"><i class="langs langs-fr"></i></a> 
		<a href="<?php echo $protocols.'://'.$sites['domain'].'/'.__WP_EN_URL__; ?>"><i class="langs langs-us"></i></a>
	  </p>
    </div>
    <!-- /.container -->
  </footer>

<!--SEO-->



<!--Template-->

  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
  
  
  
</body>
</html>
<?php ob_end_flush(); ?>