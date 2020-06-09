
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="assets/img/hero-logo.png" alt=""></a>
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
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <?php echo $sites['copyright']['frontend'].'<a href="'.$protocols.'://'.$sites['domain'].'">'.$sites['name'].'</a>'; ?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"><?php echo $sites['copyright']['frontend'].' <a href="'.$protocols.'://'.$sites['domain'].'">'.$sites['name'].'</a> .'.$law['full']['content']['footer']; ?></p>
    </div>
    <!-- /.container -->
  </footer>

<!--SEO-->



<!--Template-->

  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
  <script src="<?php echo $version['external']['jquery.easing']['js']; ?>"></script>
  <script src="<?php echo $version['internal']['php-email-form']['js']; ?>"></script>
  <script src="<?php echo $version['external']['jquery-sticky']['js']; ?>"></script>
  <script src="<?php echo $version['external']['venobox']['js']; ?>"></script>
  <script src="<?php echo $version['external']['isotope-layout']['js']; ?>"></script>
  <script src="<?php echo $version['external']['owl.carousel']['js']; ?>"></script>
  <script src="<?php echo $version['external']['aos']['js']; ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $version['internal']['production']['js']['knight']; ?>"></script>
  
  
</body>
</html>
<?php ob_end_flush(); ?>