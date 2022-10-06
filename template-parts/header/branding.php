<?php
/**
 * Site branding & logo
 *
 * @package eom-aca
 */

namespace Eom_Aca;

$description = get_bloginfo( 'description', 'display' );
?>

<div class="site-branding">

  <p class="site-title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
      <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
	  <?php if ( !wp_is_mobile() ) : ?>
		<?php echo '<span class="academia">Academia</span>'; ?>
	  <?php endif ?>
    </a>
  </p>

  <?php if ( $description || is_customize_preview() ) : ?>
    <p class="site-description screen-reader-text">
      <?php echo esc_html( $description ); ?>
    </p>
  <?php endif; ?>

</div>
