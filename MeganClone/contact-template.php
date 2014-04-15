<?php
/*
Template Name: Contact Page
*/
?>
<? get_header(); ?>
<div class="contactContent">
<h1><span class="labelSmall">T</span><span class="labelLarge">/</span> <?php echo get_option('of_phone') ?></h1>
<h1><span class="labelSmall">E</span><span class="labelLarge">/</span> <a href="mailto:<?php echo get_option('of_email') ?>"><span class="highlight"><?php echo get_option('of_email') ?></span></a></h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <div style="clear:both"></div>
<?php endwhile; ?>
<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>
<?php endif; ?>

    </div>
<? get_footer(); ?>
