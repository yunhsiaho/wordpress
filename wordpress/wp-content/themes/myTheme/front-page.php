<?php 
    $text = get_field('title_text'); 
    $text2 = get_field('title_text_2'); 

    $image = get_field('background-image');
    $background = $image['sizes']['2048x2048'];

    $decoPicImage = get_field('deco_picture');
    $backgroundDeco = $decoPicImage['sizes']['2048x2048'];

    $menuLink = get_field('check_our_menu');
    $checkMenuText = get_field('check_menu_text');
    
    $burger = get_field('burger_background');
    $burgerBackground = $burger['sizes']['2048x2048'];
    

?>
<div class="container-fluid banner"> 
        <img src=<?php echo $background ?> class="background-image img-fluid"/>
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
    <img src=<?php echo $backgroundDeco ?> class="background-deco img-fluid "/>
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
                                    $imgCardSize = $img_card['sizes']['custom_thumbnail'];
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
    <div class="row chef m-auto">
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
                        <div class="chef-img col-6">
                            <img src=<?php echo $imgChefSize; ?> class='img img-fluid'>
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
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section>
    
    <div class="container-fluid resto-posts-con p-auto text-center" 
    style="background-image: url(<?php echo $burgerBackground ?>);">
    <img src=<?php echo $backgroundDeco ?> class="background-deco img-fluid" style="transform: rotate(180deg);"/>
    <!-- <img src=<?php echo $burgerBackground ?> class="background-image img-fluid"/>                     -->
        <h1>Discover our franchise</h1>
        <h1><b>OUR RESTAURANTS</b></h1>
        <div class="row resto-posts">
            <?php 
            $imgPost = get_field('first_photo_post');
            $imgPostSize = $imgPost['sizes']['custom_small'];
            $bigTitle = get_field('big_title_title');
            $titlePost = get_field('title_post');
            $textPost = get_field('text_post');
            $linkPost = get_field('link_post');
            $linkUrl = $linkPost['url'];
            $linkTarget = $linkPost['target'] ? $linkPost['target']:'_self';
            ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-12 ">
                <div class="card card-left">
                    <div class="card-body">
                        <h2><?php echo $bigTitle; ?></h2>
                        <h1><b><?php echo $titlePost; ?></b></h1>
                        <p><?php echo $textPost; ?></p>
                        <?php if($linkPost): ?>
                        <a href="<?php echo esc_url($linkUrl) ?>" target='<?php echo esc_attr($linkTarget); ?>'>More Info</a>
                    <?php endif; ?>
                    </div>
                </div>
                <img src="<?php echo $imgPostSize; ?>" class='img-fluid'>
            </div>
            <?php endwhile;endif; ?>

            <?php 
            $imgPost2 = get_field('second_photo_post');
            $imgPostSize2 = $imgPost2['sizes']['custom_small'];
            $bigTitle2 = get_field('second_big_title');
            $titlePost2 = get_field('second_title_post');
            $textPost2 = get_field('second_text_post');
            $linkPost2 = get_field('second_link_post');
            $linkUrl2 = $linkPost2['url'];
            $linkTarget2 = $linkPost2['target'] ? $linkPost2['target']:'_self';
            ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-12">
                    <img src="<?php echo $imgPostSize2; ?>" class='img-fluid'>
                <div class="card card-right">
                    <div class="card-body">
                        <h2><?php echo $bigTitle2; ?></h2>
                        <h1><b><?php echo $titlePost2; ?></b></h1>
                        <p><?php echo $textPost2; ?></p>
                        <?php if($linkPost2): ?>
                        <a href="<?php echo esc_url($linkUrl2) ?>" target='<?php echo esc_attr($linkTarget2); ?>'>More Info</a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile;endif; ?>

            <?php 
            $imgPost3 = get_field('third_photo_post');
            $imgPostSize3 = $imgPost3['sizes']['custom_small'];
            $bigTitle3 = get_field('third_big_title');
            $titlePost3 = get_field('third_title_post');
            $textPost3 = get_field('third_text_post');
            $linkPost3 = get_field('third_link_post');
            $linkUrl3 = $linkPost3['url'];
            $linkTarget3 = $linkPost3['target'] ? $linkPost3['target']:'_self';
            ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-12">
                <div class="card card-left">
                    <div class="card-body">
                        <h2><?php echo $bigTitle3; ?></h2>
                        <h1><b><?php echo $titlePost3; ?></b></h1>
                        <p><?php echo $textPost3; ?></p>
                        <?php if($linkPost3): ?>
                        <a href="<?php echo esc_url($linkUrl3) ?>" target='<?php echo esc_attr($linkTarget3); ?>'>More Info</a>
                    <?php endif; ?>
                    </div>
                </div>
            
                <img src="<?php echo $imgPostSize3; ?>" class='img-fluid'>
            </div>
            <?php endwhile;endif; ?>  
        </div>
        <img src=<?php echo $backgroundDeco ?> class="background-deco img-fluid " />
    </div>
</section>

<section>
<?php 
    $photoGallery = get_field('photo_gallery') ;
    
    $gallery1 = get_field('gallery_title1') ;
    $gallery2 = get_field('gallery_title2') ;
    $galleryText = get_field('gallery_text') ;
    $galleryButton = get_field('gallery_button') ;

?>

    <div class="container-fluid">
        <div class="row m-auto  gallery">
            <div class=" col-6">
                    <img src=<?php echo $photoGallery[0]['sizes']['thumbnail']?> class='img-fluid m-2 col-5'>
                    <img src=<?php echo $photoGallery[1]['sizes']['thumbnail']?> class='img-fluid m-2 col-5'>
                    <img src=<?php echo $photoGallery[2]['sizes']['thumbnail']?> class='img-fluid m-2 col-5'>
                    <img src=<?php echo $photoGallery[3]['sizes']['thumbnail']?> class='img-fluid m-2 col-5'>
            </div>
            <div class="col-6  ">
            <h1><?php echo $gallery1 ?></h1>
            <h1><b><?php echo $gallery2 ?></b></h1>
            <p><?php echo $galleryText ?></p>
            <a href=<?php echo $galleryButton ?>>VIEW THE FULL MENU</a>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>