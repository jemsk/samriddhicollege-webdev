
<?php		
    global $post;

    $query = new WP_Query( [
        'posts_per_page' => 5,
        'post_type' => 'slider',
        // 'order' => 'DESC',
        // 'orderby' => 'date'
    ] );
    if ($query->have_posts()):
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

	    <?php while ( $query->have_posts() ): 
            $query->the_post();
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
        ?>
        
        <div class="carousel-item active" style="background-image: url(<?php echo $featured_img_url; ?>)"></div>

        <?php endwhile; ?>        
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>

</section>
<!-- ======= End Hero Section ======= -->
<?php 
    wp_reset_postdata(); // Reset $post
    endif;
?>
