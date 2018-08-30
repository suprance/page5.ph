<?php
/*
Template Name: Landing Page - Plain V2
*/

get_header('unified-navbar'); ?>
    <section class="section-no-border padding-top-bottom-lg padding-bottom-none template-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="h2-page-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
    <?php
    /* Include before footer */
    // get_template_part( 'template-parts/footer', 'before');
    ?>
    <footer>
        <div class="container">
            <div class="row footer-container xs-center">
                <div class="col-xs-12">
                    <span class="border-top padding-none"></span>
                    <div class="breadcrumbs-container padding-top-bottom-sm">
                        <?php
                        // Embed breadcrumbs managed by Yoast
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<p id="breadcrumbs" class="negative">','</p>');
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 main-column">
                    <img class="logo" width="114" height="42" src="/wp-content/themes/gengo/images/common/gengo-logo@2x.png">
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-12 col-sm-10">
                    <?php if ( is_active_sidebar( 'footer_lp' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_lp' ); ?>
                    <?php endif; ?>
                </div>                <div class="col-sm-2 col-sm-offset-10 copy">
                    <p class="negative"><?php _e( '&copy; Gengo, Inc.', 'gengo');?></p>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<?php include locate_template('template-parts/cookie-policy.php'); ?>
</body>
</html>
