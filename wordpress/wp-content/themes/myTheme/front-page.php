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
        <?php if(have_rows('content_first')):  ?>
                <?php while(have_rows('content_first')): the_row();?>
                    <?php if(get_row_layout() == 'content_section_first'):?>
                        <?php if(have_rows('columns')):?>
                            <?php while(have_rows('columns')): the_row();?>
                                <?php $img_card = get_sub_field('image');
                                    $title_card = get_sub_field('title');
                                    $content_card = get_sub_field('text');
                                    $imgCardSize = $img_card['sizes']['large'];
                                ?>
                                    <div class="col-3 three-column">
                                        <img src=<?php echo $imgCardSize; ?>>
                                        <h5><?php echo $title_card; ?></h5>
                                        <p><?php echo $content_card; ?></p>
                                    </div>                                   
                            <?php endwhile;?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <?php if(have_rows('picture_content')):  ?>
            <?php while(have_rows('picture_content')): the_row();?>
                <?php if(get_row_layout() == 'picture_content_column'):?>
                    <?php $img_chef = get_sub_field('chef_img');
                        $imgChefSize = $img_chef['sizes']['large'];
                        $title1_chef = get_sub_field('picture_content_column_title1');
                        $title2_chef = get_sub_field('picture_content_column_title2');
                        $title3_chef = get_sub_field('picture_content_column_title3');
                        $title_txt_chef = get_sub_field('picture_content_column_txt');
                        $title_txt_chef2 = get_sub_field('picture_content_column_txt2');
                        $title_title_chef = get_sub_field('picture_content_column_title_chef');
                        $title_chef = get_sub_field('picture_content_column_chef');
                    ?>
                    <div class="row chef">                                
                        <div class="chef-img col-6">
                            <img src=<?php echo $imgChefSize; ?>>
                        </div>    
                        <div class="chef-text col-5">
                            <p class='chef-1'><?php echo $title1_chef; ?></p>
                            <p class='chef-2'><?php echo $title2_chef; ?></p>
                            <p class='chef-3'><?php echo $title3_chef ; ?></p>
                            <p class='chef-txt'><?php echo $title_txt_chef; ?></p>
                            <p class='chef-txt'><?php echo $title_txt_chef2; ?></p>
                            <p class='chef-title'><?php echo $title_title_chef; ?></p>
                            <p class='chef-chef'><?php echo $title_chef; ?></p>
                        </div>   
                    </div>                                    
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
        <h1>Discover our franchise</h1>
        <h1><b>OUR RESTAURANTS</b></h1>

        </div>
    </div>
</section>







<?php get_footer(); ?>