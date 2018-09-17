<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package 5pageph
 */

get_header();
?>

  <section id="primary" class="content-area">
    <main id="main" class="site-main myCategoryLayout mySearchLayout">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="cat-name-holder <?php _e($catColor); ?>">
              <h3>
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'page5ph' ), '<span>' . get_search_query() . '</span>' );
                ?>
              </h3>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-8">
            <div class="row">
              <?php if ( have_posts() ) : ?>

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                  the_post();

                  /**
                   * Run the loop for the search to output the results.
                   * If you want to overload this in a child theme then include a file
                   * called content-search.php and that will be used instead.
                   */
                  get_template_part( 'template-parts/content', 'search' );

                endwhile;

                the_posts_navigation();

              else :

                get_template_part( 'template-parts/content', 'none' );

              endif;
              ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <?php include_once('template-parts/custom-sidebar.php'); ?>
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </section><!-- #primary -->

<?php
get_footer();
