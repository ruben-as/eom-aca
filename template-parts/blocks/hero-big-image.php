<?php
/**
 * Hero with big image.
 *
*/

// Files (required):
// ├── sass/gutenberg/blocks/_hero-big-image.scss
// ├── sass/components/_content-box.scss
// └── svg/block-icons/hero-big-image.svg

namespace Eom_Aca;

// Fields
$title = get_field( 'title' );
$content = get_field( 'content' );
$link = get_field( 'link' );
$bg_image = get_field( 'bg_image' );

if ( empty( $bg_image ) ) {
  $bg_image = get_post_thumbnail_id( get_the_ID() );
}

if ( empty( $title ) ) {
  maybe_show_error_block( 'Introduce un título' );
  return;
}
?>

<section class="block block-hero-big-image">
  <div class="image image-background" aria-hidden="true">
	<img src="<?php echo esc_url($bg_image); ?>" />

      <div class="container">
        <div class="content">
          <div class="content-wrapper">

            <h1 id="content">
              <?php echo esc_html( $title ); ?>
            </h1>

            <?php if ( ! empty( $content ) ) :
              echo wp_kses_post( wpautop( $content ) );
            endif;

            if ( ! empty( $link ) ) : ?>
              <p class="button-wrapper">
                <a class="button button-large<?php if ( str_contains( $link['url'], '#' ) ) echo ' js-trigger'; ?>" href="<?php echo esc_url( $link['url'] ); ?>">
                  <?php echo esc_html( $link['title'] ); ?>
                </a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
</section>