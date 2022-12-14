<?php
/**
 * @Author: Timi Wahalahti
 * @Date:   2019-12-03 11:03:31
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-06-09 12:04:05
 *
 * @package eom-aca
 */

namespace Eom_Aca;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    // 'Key: String' => 'String',
  ];

  /**
   * Uncomment if you need to have default eom-aca accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings() as $key => $value ) {
  // $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return $strings;
} );

function get_default_localization_strings( $language = 'en' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'eom-aca' ),
      'Open main menu'                               => __( 'Open main menu', 'eom-aca' ),
      'Close main menu'                              => __( 'Close main menu', 'eom-aca' ),
      'Main navigation'                              => __( 'Main navigation', 'eom-aca' ),
      'Back to top'                                  => __( 'Back to top', 'eom-aca' ),
      'Open child menu'                              => __( 'Open child menu', 'eom-aca' ),
      'Open child menu for'                          => __( 'Open child menu for', 'eom-aca' ),
      'Close child menu'                             => __( 'Close child menu', 'eom-aca' ),
      'Close child menu for'                         => __( 'Close child menu for', 'eom-aca' ),
      'Skip to content'                              => __( 'Skip to content', 'eom-aca' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'eom-aca' ),
      'External site'                                => __( 'External site', 'eom-aca' ),
      'opens in a new window'                        => __( 'opens in a new window', 'eom-aca' ),
      'Page not found.'                              => __( 'Page not found.', 'eom-aca' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'eom-aca' ),
      'Search'                                       => __( 'Search', 'eom-aca' ),
      'Block missing required data'                  => __( 'Block missing required data', 'eom-aca' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'eom-aca' ),
      'No results found for your search'             => __( 'No results found for your search', 'eom-aca' ),
      'Edit'                                         => __( 'Edit', 'eom-aca' ),
      'Previous slide'                               => __( 'Previous slide', 'eom-aca' ),
      'Next slide'                                   => __( 'Next slide', 'eom-aca' ),
      'Last slide'                                   => __( 'Last slide', 'eom-aca' ),
    ],
    'fi'  => [
      'Add a menu'                                   => 'Luo uusi valikko',
      'Open main menu'                               => 'Avaa p????valikko',
      'Close main menu'                              => 'Sulje p????valikko',
      'Main navigation'                              => 'P????valikko',
      'Back to top'                                  => 'Takaisin yl??s',
      'Open child menu'                              => 'Avaa alavalikko',
      'Open child menu for'                          => 'Avaa alavalikko kohteelle',
      'Close child menu'                             => 'Sulje alavalikko',
      'Close child menu for'                         => 'Sulje alavalikko kohteelle',
      'Skip to content'                              => 'Siirry suoraan sis??lt????n',
      'Skip over the carousel element'               => 'Hypp???? karusellisis??ll??n yli seuraavaan sis??lt????n',
      'External site'                                => 'Ulkoinen sivusto',
      'opens in a new window'                        => 'avautuu uuteen ikkunaan',
      'Page not found.'                              => 'Hups. N??ytt????, ettei sivua l??ydy.',
      'The reason might be mistyped or expired URL.' => 'Syyn?? voi olla virheellisesti kirjoitettu tai vanhentunut linkki.',
      'Search'                                       => 'Haku',
      'Block missing required data'                  => 'Lohkon pakollisia tietoja puuttuu',
      'This error is shown only for logged in users' => 'T??m?? virhe n??ytet????n vain kirjautuneille k??ytt??jille',
      'No results for your search'                   => 'Haullasi ei l??ytynyt tuloksia',
      'Edit'                                         => 'Muokkaa',
      'Previous slide'                               => 'Edellinen dia',
      'Next slide'                                   => 'Seuraava dia',
      'Last slide'                                   => 'Viimeinen dia',
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['en'];
} // end get_default_localization_strings

function get_default_localization( $string ) {
  if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
    return ask__( "Accessibility: {$string}" );
  }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) {
  $language = get_bloginfo( 'language' );
  if ( function_exists( 'pll_the_languages' ) ) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation
