<?php 
    $text = get_field('title_text'); 
    $text2 = get_field('title_text_2'); 
    $image = get_field('background-image');
    $background = $image['sizes']['2048x2048'];
    // $decoPic = 
    $menuLink = get_field('check_our_menu');
    $checkMenuText = get_field('check_menu_text');
?>
<div class="container-fluid banner"> 
    <img src=<?php echo $background ?> class="backgound-image img-fluid "/>
    <div class="row banner-row">
    <?php get_header(); ?>       
    <div class="banner-text">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        
        <p class="for-happy-day"><?php echo $text ?></p>
        <p class="enjoy-happy-meal"><?php echo $text2 ?></p>
        <div class="check-our-menu">
            ―― <a href="<?php echo $menuLink ?>"><?php echo $checkMenuText ?></a>
        </div>
    </div>
    </div>
</div>
    <section>
        <div class="container-fluid">
            <div class="row block-1">
                <div class="col-3">
                    <?php $food='https://localhost/themes/myTheme/assets/svg/quality-food.svg' ?>
                    <img src=<?php echo $food;?>/>
                    <p>QUALITY FOOD</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, ratione!</p>
                </div>
                <div class="col-3">
                <img src="/assets/svg/quality-food.svg"/>
                    <p>QUALITY FOOD</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, ratione!</p>
                </div>
                <div class="col-3">
                <img src="assets/svg/quality-food.svg"/>
                    <p>QUALITY FOOD</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, ratione!</p>
                </div>
            </div>
            <?php var_dump($background); ?>
        </div>
    </section>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

<?php get_footer(); ?>