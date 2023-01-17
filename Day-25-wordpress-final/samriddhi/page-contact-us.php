<?php get_header(); ?> 

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2><?php the_title( ) ?></h2>
            <ol>
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><?php the_title( ) ?></li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p><?php echo get_theme_mod( 'address') ?></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p><?php echo get_theme_mod( 'email') ?></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p><?php echo get_theme_mod( 'phone') ?></p>
                    </div>
                </div><!-- End Info Item -->

            </div>
            <div class="row gy-4 mt-1">

                <div class="col-lg-6 ">
                    <iframe src="<?php echo get_theme_mod('contact_iframe') ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        
                    </form> -->

                    <?php //echo do_shortcode( '[contact-form-7 id="11" title="Contact form 1"]' ) ?>

                    <?php the_content(  ) ?>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?> 
