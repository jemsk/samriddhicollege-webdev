<?php get_header(); ?> 
<?php
  
// checks if there are any posts that match the query
if (have_posts()) :
 
?>
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

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <?php get_sidebar( ) ?>
                <?php 
                 
                // If there are posts matching the query then start the loop
                while ( have_posts() ) : the_post();
                ?>
                <div class="col-lg-8">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                    <?php the_post_thumbnail() ?>
                    <h3><?php the_title() ?></h3>
                    <?php the_content() ?>
                </div>

                <?php 

                                // Stop the loop when all posts are displayed
                endwhile; 
                ?>

            </div>

        </div>
    </section><!-- End Service Details Section -->
</main>
<?php
// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>

<!-- End #main -->
<?php get_footer(); ?> 
