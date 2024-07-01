<?php
  defined( 'ABSPATH' ) || exit;

  function ufo_fix_svg_thumbnail(): void {
    if (!get_option('ufo_fix_svg_thumbnail_field')) {
      return;
    }

    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
  }
