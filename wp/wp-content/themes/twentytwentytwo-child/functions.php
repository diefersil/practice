
<?php

add_action( 'widgets_init', 'last_posts' );
function last_posts() {
  $args = array(
    'name'          => 'Last Posts sidebar',
    'id'            => 'last-posts-sidebar',
    'description'   => 'Sidebar de Últimos Posts',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );

  register_sidebar( $args );

}

add_filter('the_title', function($title) {

    return $title;
});