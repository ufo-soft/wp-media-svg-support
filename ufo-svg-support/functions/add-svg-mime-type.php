<?php
  defined( 'ABSPATH' ) || exit;

  function ufo_add_svg_mime_type($mimes): array {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
