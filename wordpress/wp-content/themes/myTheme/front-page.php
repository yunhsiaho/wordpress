<?php get_header(); ?>

<div class="container">
<h1><?php the_title(); ?></h1>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<div><?php the_content(); ?></div>
<!-- <div><?php the_filed('page_title'); ?></div> -->

<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
 
<?php get_footer(); ?>