<?php get_header(); ?>
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Blog Details</h2>
    <ol>
      <li><a href="./index.php">Home</a></li>
      <li>Blog Details</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">

      <div class="col-lg-8">

        <article class="blog-details">

          <div class="post-img">
             <?php the_post_thumbnail( 'full', ['class'=> 'img-fluid'] ) ?>
          </div>

          <h2 class="title"><?php the_title( ) ?></h2>

          <div class="meta-top">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php the_author( ) ?></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?php the_date( ) ?></time></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
            </ul>
          </div><!-- End meta top -->

          <div class="content">
            <?php the_content( ) ?>
          </div><!-- End post content -->

          <div class="meta-bottom">
            <i class="bi bi-folder"></i>
            <ul class="cats">
              <li><a href="#">Business</a></li>
            </ul>

            <i class="bi bi-tags"></i>
            <ul class="tags">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div><!-- End meta bottom -->

        </article><!-- End blog post -->

        <div class="post-author d-flex align-items-center">
          <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
          <div>
            <h4><?php  the_author( )?></h4>
            <div class="social-links">
              <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
              <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
            </div>
            <p>
              Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
            </p>
          </div>
        </div><!-- End post author -->
      </div>

      <?php get_sidebar( ) ?>

      </div>
    </div>

  </div>
</section><!-- End Blog Details Section -->
</main><!-- End #main -->
<?php get_footer(); ?>