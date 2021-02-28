<?php
/**
 * @package VECRC
 */

get_header();
?>

<main class="home">
    <div class="cover-img">
    <section class="define">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 col-xg-4">
            <div class="card card-shadow">
            <div class="card-body">
                <img src="<?php echo get_theme_file_uri('img/logo-fullcolor.png'); ?>" alt="<?php bloginfo( 'name' ); ?> " class="home-logo">
                <?php
                if ( is_active_sidebar( 'home-top' ) ) : ?>
                    <div id="home-top" class="fw-widget" role="complementary">
                    <?php dynamic_sidebar( 'home-top' ); ?>
                    </div>

            <?php endif; ?>
            </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <section class="callouts">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
        <div class="card card-shadow bg-yellow age0-2">
            <div class="card-body">
            <?php
                if ( is_active_sidebar( 'callout-age0' ) ) : ?>
                    <div id="callout-age0" class="fw-widget" role="complementary">
                    <?php dynamic_sidebar( 'callout-age0' ); ?>
                    </div>

            <?php endif; ?>
            </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card card-shadow bg-purple age3-4">
            <div class="card-body">
            <?php
                if ( is_active_sidebar( 'callout-age3' ) ) : ?>
                    <div id="callout-age3" class="fw-widget" role="complementary">
                    <?php dynamic_sidebar( 'callout-age3' ); ?>
                    </div>

            <?php endif; ?>
            </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card card-shadow bg-green age5">
            <div class="card-body">
            <?php
                if ( is_active_sidebar( 'callout-age5' ) ) : ?>
                    <div id="callout-age5" class="fw-widget" role="complementary">
                    <?php dynamic_sidebar( 'callout-age5' ); ?>
                    </div>

            <?php endif; ?>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</div>
    <section class="mission">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 mission-view">
            
            <?php
                if ( is_active_sidebar( 'mission-hp' ) ) : ?>
                    <div id="mission-hp" class="fw-widget" role="complementary">
                    <?php dynamic_sidebar( 'mission-hp' ); ?>
                    </div>

            <?php endif; ?>
        </div>
        </div>
        </div>
    </section>
</main>

<?php
get_footer();