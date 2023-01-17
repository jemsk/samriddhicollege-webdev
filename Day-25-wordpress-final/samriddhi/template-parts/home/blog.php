<?php		
    global $post;

    $query = new WP_Query( [
        'posts_per_page' => 3,
        'post_type' => 'post',
        // 'order' => 'DESC',
        // 'orderby' => 'date'
    ] );
    if ($query->have_posts()):
?>
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class=" section-header">
                <h2>Recent Blog Posts</h2>
                <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
            </div>

            <div class="row gy-5">

                <?php while ( $query->have_posts() ): 
                    $query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                ?>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <?php
                            the_post_thumbnail();
                            ?>
                            <span class="post-date"><?php the_date( ) ?></span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title"><?php the_title(); ?></h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2"><?php the_author() ?></span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2"><?php the_category( ', ' ) ?></span>
                                </div>
                            </div>

                            <hr>

                            <a href="<?php echo get_the_permalink( ) ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <?php endwhile; ?>        

            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->

    <?php 
    wp_reset_postdata(); // Reset $post
    endif;
?>
