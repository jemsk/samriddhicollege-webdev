
//TO BE placed In Style.css
<?php
/*
Theme Name: Twenty Twenty
Theme URI: https://wordpress.org/themes/twentytwenty/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Version: 1.3
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: twentytwenty
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

?>


//Displays Header.php file content
<?php get_header(); ?> 

//Will be placed inside Header.php inside head tag
<?php wp_head(); ?>

 
// Displays Footer.php file content
<?php get_footer(); ?>
 
// Displays Sidebar.php file content
<?php get_sidebar(); ?>

// Displays template part from template-parts folder

<?php get_template_part( 'featured-content' ); ?>
 
// Displays Comment.php file content
<?php comments_template(); ?> 



<?php get_template_directory()  ?>

// Title of the Blog, or Blog Name
<?php bloginfo('name'); ?> 
 
// Title of a Specific Page
<?php wp_title(); ?>
 
// Exact URL for the site
<?php bloginfo('url'); ?> 
 
// Site's Description
<?php bloginfo('description'); ?> 
 
// Location of Site’s Theme File
<?php bloginfo('template_url'); ?>
 
// Link to the Style.css location
<?php bloginfo('stylesheet_url'); ?>  
 
// RSS Feed URL for the site
<?php bloginfo('rss2_url'); ?> 
 
// Pingback URL for the site
<?php bloginfo('pingback_url'); ?>
 
// WordPress version number 
<?php bloginfo('version'); ?> 



<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>



/ Displays the date current post was written
<?php echo get_the_date(); ?> 
 
// Displays the last time a post was modified
<?php echo get_the_modified_time (); ?>
 
// Displays the last modified time for a post
<?php echo the_modified_time('F d, Y'); ?>
 
// Displays post thumbnail or featured image
<?php the_post_thumbnail( ); ?>
 
// Displays monthly archives
<?php wp_get_archives( ); ?>
 
// Displays the list of categories
<?php wp_list_categories(); ?>
 
// Displays the gravatar of a user from email address
// 32 pixels is the size, you can change that if you need
<?php echo get_avatar( 'email@example.com', 32 ); ?>
 
// Displays gravatar of the current post's author


<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/thumbnail-default.jpg" />';
}
?>

<?php

// Checks if a single post is being displayed
is_single() 
 
// Checks if a page is being displayed
is_page() 
 
// Checks if the main blog page is displayed
is_home() 
 
// Checks if a static front page is displayed
is_front_page() 
 
// Checks if current viewer is logged in
is_user_logged_in() 

?>


<?php
  
// checks if there are any posts that match the query
if (have_posts()) :
  
  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();
  
    // the code between the while loop will be repeated for each post
    ?>
  
    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
  
    <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
  
    <?php the_content(); ?>
  
    <p class="postmetadata">Filed in: <?php the_category(); ?> | Tagged: <?php the_tags(); ?> | <a href="<?php comments_link(); ?>" title="Leave a comment">Comments</a></p>
  
    <?php
  
    // Stop the loop when all posts are displayed
 endwhile;
  
// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>


<?php
/*
 Template Name: Contact Us
 Template Post Type: post, page
*/
?>