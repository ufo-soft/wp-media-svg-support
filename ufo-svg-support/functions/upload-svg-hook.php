<?php
  defined( 'ABSPATH' ) || exit;

  function ufo_upload_svg_hook($data, $filename, $mimes): array
  {
    global $wp_version;

    if ( $wp_version !== '4.7.1' ) {
      return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
      'ext' => $filetype['ext'],
      'type' => $filetype['type'],
      'proper_filename' => $data['proper_filename']
    ];
  }
