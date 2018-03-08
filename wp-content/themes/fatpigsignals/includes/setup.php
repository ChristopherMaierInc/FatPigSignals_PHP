<?php

function fps_setup_theme() {
  // add_theme_support( 'menus' ); ---Needed with older versions of Wordpress

  register_nav_menu(
    'primary',
    __( 'Primary Menu', 'fatpigsignals' )
  );
}

 ?>
