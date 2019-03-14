<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>
  <?php
  if(has_nav_menu('primary')){
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'main_menu',
      'fallback_cb' => false
    ]);
  }

  ?>

  <?php wp_footer(); ?>
</body>
</html>