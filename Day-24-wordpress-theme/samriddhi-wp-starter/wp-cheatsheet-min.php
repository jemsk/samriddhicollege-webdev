

//Displays Header.php file content
<?php get_header(); ?> 

//Will be placed inside Header.php inside head tag
<?php wp_head(); ?>

 
// Displays Footer.php file content
<?php get_footer(); ?>
 


<?php echo get_template_directory()  ?>


<?php site_url()  ?>
// Exact URL for the site
<?php bloginfo('url'); ?> 
 

// Link to the Style.css location
<?php bloginfo('stylesheet_url'); ?>  
 


<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>



/ Displays the date current post was written
<?php echo get_the_date(); ?> 
 

 
// Displays post thumbnail or featured image
<?php the_post_thumbnail( ); ?>
 

<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>


## POSTS 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <!-- Post output, loop functions: the_title(), etc. -->
<?php endwhile; else: ?>
	No posts.
<?php endif; ?>


<?php		
global $post;

$query = new WP_Query( [
	'posts_per_page' => 5,
    'post_type' => 'service',
    // 'order' => 'DESC',
    // 'orderby' => 'date'
] );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<!-- Post output, loop functions: the_title(), etc. -->
		<?php 
	}
} else {
	// No posts found
}

wp_reset_postdata(); // Reset $post
?>


<?php 

function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    $wp_customize->add_section( 'contact' , array(
        'title'      => __( 
            'Visible Section Name', 'mytheme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting('contact-map', array(
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control('contact-map', array(
        'label' => __('Contact Map Iframe', 'necc'),
        'type' => 'textarea',
        'section' => 'contact'
    ));

 }
 add_action( 'customize_register', 'mytheme_customize_register' );





 ?>