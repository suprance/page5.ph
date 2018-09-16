<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package 5pageph
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="container">
        <div class="row">
          <br>
          <div class="col-sm-12 col-md-8">
            <section class="error-404 not-found" style="margin-top: 35px;">
              <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'page5ph' ); ?></h1>
              </header><!-- .page-header -->

              <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of other link?', 'page5ph' ); ?></p>

              </div><!-- .page-content -->
            </section><!-- .error-404 -->
            </div>
            <div class="col-sm-12 col-md-4" style="margin-top: 35px;">
              <?php include_once('template-parts/custom-sidebar.php'); ?>
            </div>
          </div>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
