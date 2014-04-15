<? get_header(); ?>
 <?php if ( 'work-sample' == get_post_type() ){ ?>
  <div class="portfolioContent">
    	<!-- Begin description -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="description">
            <h1><?php the_title(); ?></h1>
            <h2><?php $itemtype = get_post_meta($post->ID, 'Item Type', true); ?> <?php echo $itemtype; ?></h2>
            <?php the_content(); ?>
        </div>
<?php endwhile; ?>
<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>
<?php endif; ?>

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
  <? }else{ ?>
<!-- Begin about content -->
<div class="aboutContent"> 
  <!-- Begin content -->
  <div class="description">
    <? /*Begin Content area Query*/ ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      <h1><span class="highlight"><?php the_title(); ?></span></h1>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <div class="comments-section">
    <?php comments_template(); ?>
    </div>
   <?php endwhile; ?>
 <?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">Sorry, but you are looking for something that isn't here.</p>
 <?php get_search_form(); ?>
<?php endif; wp_reset_query(); ?>
<? /*End Content area Query*/ ?>
  </div>
  <!--/ End content --> 
  
  <!-- Begin image -->
  <div class="image"><?php the_post_thumbnail('inside'); ?></div>
  <!--/ End image --> 
  
  <!-- Clear -->
  <div class="clear"></div>
</div>
<!--/ End about content --> 
<? } ?>
<? get_footer(); ?>
