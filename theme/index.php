<?php
/**
 * The main template file
 *
 * Main template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen_Plus
 * @since Twenty Fourteen Plus 1.0
 */

get_template_part('head', 'head');
?>

<body <?php body_class(); ?> data-config='<?php echo json_encode($config); ?>'>
  <div id="page" class="hfeed site">
    <?php get_header(); ?>

    <div id="main" class="site-main">
      <div id="main-content" class="main-content">
        <?php
        if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
          // Include the featured content template.
          get_template_part( 'featured-content' );
        }
        ?>

        <div id="primary" class="content-area">
          <?php get_template_part('./partials/' . get_current_theme_tpl()) ?>
        </div><!-- #primary -->

        <?php get_sidebar( 'content' ); ?>

      </div><!-- #main-content -->

      <div id="secondary"></div>

    </div><!-- #main -->

    <footer id="colophon" class="site-footer" role="contentinfo"></footer>
	  <?php wp_footer(); ?>
  </div><!-- #page -->
</body>
