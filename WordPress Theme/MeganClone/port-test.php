<? get_header(); ?>
<div class="portfolioContent">
<? /*Begin Content area Query*/ ?>
<?php $port = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 1 ) );
while ( $port->have_posts() ) : $port->the_post(); ?>

  <h2><?php the_title(); ?></h2>

  <?php the_content(); ?>

<?php endwhile; ?>
<? /*End Content area Query*/ ?>
</div>
<? get_footer(); ?>
