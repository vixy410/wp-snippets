<? get_header(); ?>
<!-- Begin intro -->
<? $greetings = get_option('of_greetings') ?>
  <?php query_posts('category_name='.$greetings.'&posts_per_page=1'); ?>
  <?php while (have_posts()) : the_post(); ?>
<!-- Add your content here -->
<div class="intro">
  <h1><span class="highlight"><?php the_title(); ?></span></h1>
   <?php the_excerpt(); ?> my <a href="#">résumé.</a>
</div>
<?php endwhile;?> 
<!--/ End intro --> 

<!-- Begin grey separator thick -->
<div class="greySeparatorThick"></div>
<!--/ End grey separator thick --> 

<!-- Begin featured work -->
<div class="featuredWork">
<h1>Featured work</h1>
 <? $featuredwork = get_option('of_featuredwork') ?>
  <?php query_posts('category_name='.$featuredwork.'&posts_per_page=3'); ?>
  <?php while (have_posts()) : the_post(); ?>
<div class="featuedblocks">
 <div id="homefeat"><?php the_post_thumbnail(); ?></div>
 <div id="feattitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
 <div id="featcat">Branding + Design</div>
 </div>
<?php endwhile;?> 
 <div style="clear:both"></div>
</div>
<!--/ End featured work --> 

<? get_footer(); ?>
