<?php
/**
 * Image and content
 *
 * A block for image and content side by side.
 *
 */

// Files (required):
// ├── sass/gutenberg/blocks/_image-content.scss
// └── svg/block-icons/image-content.svg

namespace Eom_Aca;

// Fields
$title = get_field( 'title' );
$image_side = get_field( 'media_side' );
$content = get_field( 'content' );
$image = get_field( 'image' );
$link = get_field( 'link' );

if ( empty( $image ) || empty( $content ) ) {
  maybe_show_error_block( 'El contenido imagen y texto es obligatorio' );
  return;
}
?>

<section class="block block-image-content image-<?php echo esc_html( $image_side ) ?>">
  <div class="container">

    <div class="col col-content">

      <div class="wrapper">
        <?php if ( ! empty( $title ) ) : ?>
          <h2>
            <?php echo wp_kses_post( $title ); ?>
          </h2>
        <?php endif; ?>

          <?php echo wp_kses_post( wpautop( $content ) ); ?>

        <?php if ( ! empty( $link['url'] ) ) : ?>
          <p class="button-wrapper">
            <a href="<?php echo esc_url( $link['url'] ); ?>" class="button">
              <?php echo wp_kses_post( $link['title'] ); ?>
            </a>
          </p>
        <?php endif; ?>

      </div>

    </div>

    <div class="col col-image">
      <div class="image image-background">
          <img loading="lazy" src="<?php echo esc_url($image); ?>" />
      </div>
    </div>

  </div>
</section>