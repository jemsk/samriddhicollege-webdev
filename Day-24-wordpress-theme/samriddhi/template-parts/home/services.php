 
<?php		
    global $post;

    $query = new WP_Query( [
        'posts_per_page' => 5,
        'post_type' => 'service',
        // 'order' => 'DESC',
        // 'orderby' => 'date'
    ] );
    if ($query->have_posts()):
?>

 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Services</h2>
                <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
            </div>

            <div class="row gy-4">

              <?php while ( $query->have_posts() ): 
                    $query->the_post();
                    // $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="<?php the_field('icon'); ?>"></i>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo get_permalink(); ?>" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
                <?php endwhile; ?>        

            </div>

        </div>
    </section><!-- End Services Section -->
<?php 
    wp_reset_postdata(); // Reset $post
    endif;
?>
