<?php 
    $text = get_field('title_text'); 
    $text2 = get_field('title_text_2'); 

    $image = get_field('background-image');
    $background = $image['sizes']['2048x2048'];

    $decoPicImage = get_field('deco_picture');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];

    $menuLink = get_field('check_our_menu');
    $checkMenuText = get_field('check_menu_text');

    

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
                <?php if(get_row_layout() == 'column_section'):?>
                
                    <div class="row three-column-row">
                    <?php if(have_rows('content')): ?>
                    <?php while(have_rows('content')):the_row(); 
                        $forImg = get_sub_fields('img');
                        $imgSize = $forImg['sizes']['medium'];
                        ?>
                        <div class="col-3 three-column">
                        in column
                        <img src=<?php echo $imgSize ?>/>
                        <!-- <img src='http://localhost/wp-content/uploads/2021/05/quality-food.svg'> -->
                        <h5><?php echo $column['title'] ?></h5>
                        <p><?php echo $column['content'] ?></p>
                        </div> 
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>



<?php get_footer(); ?>