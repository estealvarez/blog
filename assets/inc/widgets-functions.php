<?php
function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );


/*widget assets*/
function zona_widget () {

//widget 1
register_sidebar(array(
    'name'=> 'Menu 1',
    'id'=> 'menu_de_navegacion', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 1

//widget 2
register_sidebar(array(
    'name'=> 'Nav 2',
    'id'=> 'nav_dos', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 2

//widget 3
register_sidebar(array(
    'name'=> 'Nav 3',
    'id'=> 'nav_tres', //ID y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //clase y contenedor
    'after_widget'=> '</div>', //cerrar contenedor
    'before_title'=> '<h5 class="titulo-menu-footer">', //contenedor para titulo
    'after_title'=> '</h5>'
));
//widget 3
}
add_action('widgets_init', 'zona_widget');