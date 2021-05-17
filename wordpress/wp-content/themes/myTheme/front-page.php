<?php get_header(); ?>
<div class="container">
    <h1><?php //the_title(); ?></h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div><?php //the_content(); ?></div>
    <div><?php //the_filed('page_title'); ?></div>
    <div>
        <div class="for-happy-day">For happy day</div>
        <div class="enjoy-happy-meal">ENJOY </br>HAPPY MEAL</div>
        <div class="check-our-menu"><a href="page-menu.php">--check our menu</a></div>
    </div>
</div>
    <section>
        <div class="container">
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
        </div>
    </section>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

<?php get_footer(); ?>