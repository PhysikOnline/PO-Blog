<?php
register_nav_menu( 'primary', 'Hauptmenü' );
add_theme_support ( 'post-thumbnails' );

function get_random_color() {
    $colors = ['red lighten-3', 'red lighten-4', 'pink lighten-3', 'pink lighten-4', 'purple lighten-3', 'purple lighten-4', 'deep-purple lighten-3', 'deep-purple lighten-4', 'indigo lighten-3', 'indigo lighten-4', 'blue lighten-3', 'blue lighten-4', 'light-blue lighten-3', 'light-blue lighten-4', 'cyan lighten-3', 'cyan lighten-4', 'teal lighten-3', 'teal lighten-4', 'green lighten-3', 'green lighten-4', 'light-green lighten-3', 'light-green lighten-4', 'lime lighten-3', 'lime lighten-4', 'yellow lighten-3', 'yellow lighten-4', 'amber lighten-3', 'amber lighten-4', 'orange lighten-3', 'orange lighten-4', 'deep-orange lighten-3', 'deep-orange lighten-4', 'brown lighten-3', 'brown lighten-4', 'grey lighten-3', 'grey lighten-4', 'blue-grey lighten-3', 'blue-grey lighten-4'];
    $random_keys = array_rand($colors,1);
    return $colors[$random_keys];
}
?>