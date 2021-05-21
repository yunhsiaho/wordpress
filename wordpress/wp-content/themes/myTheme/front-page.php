<?php 
    $text = get_field('title_text'); 
    $text2 = get_field('title_text_2'); 

    $image = get_field('background-image');
    $background = $image['sizes']['2048x2048'];

    $decoPicImage = get_field('deco_picture');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];

    $menuLink = get_field('check_our_menu');
    $checkMenuText = get_field('check_menu_text');

    // $img = get_sub_field('img');
    // $imgSvg = $img['sizes']['medium'];

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
        <div class="row three-column-row">
        <?php if(have_rows('content_one')):  ?>
                <?php while(have_rows('content_one')): the_row();?>
                    <?php if(get_row_layout() == 'column_section_one'):?>
                        <?php if(have_rows('column_sub')):?>
                            <?php while(have_rows('column_sub')): the_row();?>
                                <?php $img_card = get_sub_field('img');
                                    $title_card = get_sub_field('title');
                                    $content_card = get_sub_field('content_card');
                                    $imgCardSize = $img_card['sizes']['medium'];
                                ?>
                                    <!-- <div class="col-3 three-column">
                                        <img src=<?php echo $imgCardSize; ?>/>
                                        <h5><?php echo $title_card; ?></h5>
                                        <p><?php echo $content_card; ?></p>
                                    </div> -->
                                    anything
                            <?php endwhile;?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>