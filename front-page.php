<?php get_header(); ?>
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__content--title"><?php the_field('hero_title'); ?></h1>
            <p class="hero__content--paragraph">
            <b>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</b>
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
            <a class="btn btn-hero" href="/">Learn more</a>
        </div>
        <div class="hero__img">
            <?php
                $image = get_field('hero_img');
                $bg = $image['url'];
            ?>

            <img src="<?php echo $image['url'];?>" alt="">
        </div>
    </section>
    <section>
        <div class="case-study">
            <h2 class="case-study__title">How it works?</h2>
            <div class="case-study__boxes">
                <div class="case-study__boxes ">
                    <div class="case-study__boxes--first">
                        <h3>Block the cheaters</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <img class="" src="<?php echo get_theme_file_uri() . '/img/symbols-assets-ico-block.png' ;?>">
                    </div>
                <div class="case-study__boxes ">
                    <div class="case-study__boxes--second">
                        <h3>Find good rivals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <img class="" src="<?php echo get_theme_file_uri() . '/img/symbols-assets-ico-find.png' ;?>">
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>