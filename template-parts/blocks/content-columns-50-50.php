<?php
/**
 * Content columns 50%/50%
 *
 * A block that has content on the left and the right side, stacked on mobile.
 *
 */

namespace Eom_Aca;

// Fields
$title_left = get_field( 'title_left' );
$content_left = get_field( 'content_left' );
$title_right = get_field( 'title_right' );
$content_right = get_field( 'content_right' );

if ( empty( $content_left ) || empty( $content_right ) ) {
  maybe_show_error_block( 'Tekstisisällöt ovat pakollisia' );
  return;
}

?>

<section class="block block-content-columns-50-50">
  <div class="container">
    <div class="col">
      <?php if ( ! empty( $title_left ) ) : ?>
        <h2>
          <?php echo esc_html( $title_left ) ?>
        </h2>
      <?php endif; ?>
      <div class="content">
        <?php echo wp_kses_post( wpautop( $content_left ) ); ?>
      </div>
    </div>

    <div class="col">
      <?php if ( ! empty( $title_right ) ) : ?>
        <h2>
          <?php echo esc_html( $title_right ) ?>
        </h2>
      <?php endif; ?>
      <div class="content">
        <?php echo wp_kses_post( wpautop( $content_right ) ); ?>
      </div>
    </div>
  </div>
</section>