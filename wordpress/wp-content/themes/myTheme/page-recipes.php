<?php get_header(); 

$text = get_field('title_text'); 
$text2 = get_field('title_text_2'); 

$image = get_field('lounge_restaurant');
$picture = $image['sizes']['2048x2048'];

$menuLink = get_field('check_our_menu');
$checkMenuText = get_field('check_menu_text');

?>

<!-- Recipes page -->
<div class="background-image">
    
</div>
<div class="container">

<h1><?php the_title(); ?></h1>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>



<?php endwhile; endif; ?>
<img src="<?php echo $picture;?>" class="img-fluid"></img>

</div>

<?php get_footer(); ?>
