<?php
  defined( 'ABSPATH' ) || exit;

  function ufo_add_fix_svg_thumbnail_field(): void {
    register_setting(
      'media',
      'ufo_fix_svg_thumbnail_field',
      [
        'type' => 'boolean',
        'default' => 1,
      ]
    );

    add_settings_field(
      'ufo_fix_svg_thumbnail_field',
      'Contain SVG Thumbnails',
      'ufo_fix_svg_thumbnail_callback',
      'media'
    );
  }

  function ufo_fix_svg_thumbnail_callback(): bool
  {
    $fieldName = 'ufo_fix_svg_thumbnail_field';
    $isChecked = get_option($fieldName);
    $checkedAttribute = checked(1, $isChecked, false);

    include __DIR__ . '/../views/fix-svg-thumbnail-field.php';

    return $isChecked;
  }
