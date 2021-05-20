<?php 
    $text = get_field('title_text'); 
    $text2 = get_field('title_text_2'); 
    $image = get_field('background-image');
    $background = $image['sizes']['2048x2048'];
    $decoPicImage = get_field('deco_picture');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];
    $menuLink = get_field('check_our_menu');
    $checkMenuText = get_field('check_menu_text');
    $pic1 = get_field('quality-food');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];
    $pic2 = get_field('fastest-delivery');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];
    $pic3 = get_field('original-recipes');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];

?>
<div class="container-fluid banner"> 
        <img src=<?php echo $background ?> class="backgound-image img-fluid"/>
    <div class="row banner-row">
    <?php get_header(); ?>       
    <div class="banner-text">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        
        <p class="for-happy-day"><?php echo $text ?></p>
        <p class="enjoy-happy-meal"><?php echo $text2 ?></p>
        <div class="check-our-menu">
            ―― <a href="<?php echo $menuLink ?>"><?php echo $checkMenuText ?></a>
        </div>
        <?php endwhile; endif; ?>
    </div>
    </div>
    <img src=<?php echo $backgroundDeco ?> class="backgound-deco img-fluid "/>
</div>

<section>
    <div class="container-fluid">
        <?php if(have_rows('content')): ?>
                <?php while(have_rows('content')):the_row(); ?>
                <?php if(get_row_layout() == 'column_section'):
                    $columns = get_sub_field('columns');
                    ?>
                    <div class="row three-column-row">
                    <?php foreach($columns as $column): ?>
                        <div class="col-3 three-column">
                        <h3><?php echo $column['title'] ?></h3>
                        <h3><?php echo $column['title'] ?></h3>
                        <p><?php echo $column['content'] ?></p>
                        </div> 
                    <?php endforeach;?>   
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>



<?php get_footer(); ?>