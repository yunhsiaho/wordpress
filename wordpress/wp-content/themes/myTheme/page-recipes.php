<?php get_header(); 

$text = get_field('title_text'); 
$text2 = get_field('title_text_2'); 

$image = get_field('lounge_restaurant');
$picture = $image['sizes']['2048x2048'];

$menuLink = get_field('check_our_menu');
$checkMenuText = get_field('check_menu_text');

?>

<!-- Recipes page -->
<div class="background-image"></div>
<div class="container">

<h1><?php the_title(); ?></h1>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<img src="<?php echo $picture;?>" class="img-fluid"></img>

<!-- CREATING THE RECIPES SECTIONS -->
<section class="rows">

    <div class="recipes-row">
        <?php if(have_rows('content_')):?>

        <?php while(have_rows('content_')): the_row();?>

        <?php if (get_row_layout()=='section_'):?>

            Yes it works!
        <?php endif;?>


        <?php endwhile;?>

    <?php endif;?>
    </div>
</section>


<?php get_footer(); ?>
