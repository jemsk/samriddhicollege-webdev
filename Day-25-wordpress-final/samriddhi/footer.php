
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3><?php echo bloginfo( 'title' ) ?></h3>
              <p>
                
                <?php echo get_theme_mod('address') ?>
                <br><br>
                <strong>Phone:</strong> <?php echo get_theme_mod('phone') ?><br>
                <strong>Email:</strong> <?php echo get_theme_mod('email') ?><br>
              </p>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'footer-1', 
                'container_class' => '' 
            ) ); 
            ?>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'footer-2', 
                'container_class' => '' 
            ) ); 
            ?>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'footer-3', 
                'container_class' => '' 
            ) ); 
            ?>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'footer-4', 
                'container_class' => '' 
            ) );
            ?>
          </div><!-- End footer links column-->

         <!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; <?php echo get_theme_mod( 'copyright_text' ) ?>
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>