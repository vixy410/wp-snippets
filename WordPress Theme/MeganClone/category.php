<? get_header(); ?>
<div class="portfolioContent"> 
  <!-- Begin description -->
  <?php $port = new WP_Query( array( 'post_type' => 'work-sample', 'posts_per_page' => 1 ) );
while ( $port->have_posts() ) : $port->the_post(); ?>
  <div class="description">
    <h1>
      <?php the_title(); ?>
    </h1>
    <h2>
      <?php $itemtype = get_post_meta($post->ID, 'Item Type', true); ?>
      <?php echo $itemtype; ?></h2>
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
  
  <!--/ End description --> 
  <!-- Begin image -->
  <div class="image">
    <ul id="jcarouselMetro" class="jcarousel-skin-portfolio">
      <?php 
 $port = get_post_meta($post->ID, 'Portfolio Images', false);
 foreach($port as $list_item){ 
?>
      <li><img src="<? echo $list_item; ?>" /></li>
      <?php } ?>
    </ul>
  </div>
  <!--/ End image --> 
  <!-- Clear -->
  <div class="clear"></div>
</div>
<? get_footer(); ?>
