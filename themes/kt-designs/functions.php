<?php 
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


   function wpmu_register_widgets() {
    register_sidebar( array(
        'name' => __( 'Sidebar Text', 'sidebar-text-widget' ),
        'id' => 'sidebar-text-widget',
        'before_widget' => '<div id="%1$s" class="sidebar-text-widget-item %2$s">',
        'after_widget' => '</div>',

    ));
    register_sidebar( array(
        'name' => __( 'Sidebar Images', 'sidebar-image-widget' ),
        'id' => 'sidebar-image-widget',
        'before_widget' => '<div id="%1$s" class="sidebar-image-widget-item %2$s">',
        'after_widget' => '</div>',

    ));
    }
    add_action( 'widgets_init', 'wpmu_register_widgets' );
?>