<?php
register_nav_menu( 'primary', 'Hauptmenü' );
add_theme_support ( 'post-thumbnails' );

function get_random_color() {
    $colors = ['red lighten-3', 'red lighten-4', 'pink lighten-3', 'pink lighten-4', 'purple lighten-3', 'purple lighten-4', 'deep-purple lighten-3', 'deep-purple lighten-4', 'indigo lighten-3', 'indigo lighten-4', 'blue lighten-3', 'blue lighten-4', 'light-blue lighten-3', 'light-blue lighten-4', 'cyan lighten-3', 'cyan lighten-4', 'teal lighten-3', 'teal lighten-4', 'green lighten-3', 'green lighten-4', 'light-green lighten-3', 'light-green lighten-4', 'lime lighten-3', 'lime lighten-4', 'yellow lighten-3', 'yellow lighten-4', 'amber lighten-3', 'amber lighten-4', 'orange lighten-3', 'orange lighten-4', 'deep-orange lighten-3', 'deep-orange lighten-4', 'brown lighten-3', 'brown lighten-4', 'grey lighten-3', 'grey lighten-4', 'blue-grey lighten-3', 'blue-grey lighten-4'];
    $random_keys = array_rand($colors,1);
    return $colors[$random_keys];
}


add_shortcode( 'newproject', 'new_project' );
// [newproject project_name="#" tag_name="#" color="#" project_descr="#"]

function new_project( $atts ){

$a = shortcode_atts( array(
    'project_name' => 'Projekt Name',
    'tag_name' => 'Tag Name',
    'color' => 'grey',
    'project_descr' => 'Beschreibung'
), $atts );

$project_name = $a['project_name'];
$tag_name = $a['tag_name'];
$color = $a['color'];
$project_descr = $a['project_descr'];

echo '<div class="card horizontal" style="margin-bottom: 6vh;">
<div class="card-stacked" >
    <div class="card-content">
        <div class="row">
            <div class="col s12 m12 l5">
                <div style="text-align: center">
                    <div style="margin-bottom: 3vh;">
                    <h3 class="thin">' . $project_name . '</h3>
                    </div>
                    <div class="divider" style="margin: 3vh;"> </div>
                    <div style="padding: 5vh;">
                    <span class="light">' . 
                    $project_descr . 
                    '</span>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l7">
                <div id="' . $tag_name . '-carousel" class="' . $color . ' carousel carousel-slider" data-indicators="true">
                    <div class="hide-on-small-only carousel-fixed-item right row">
                        <div class="col m1 offset-m10" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$(\'#' . $tag_name . '-carousel\').carousel(\'prev\');">chevron_left</i>
                        </div>
                        <div class="col m1" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$(\'#' . $tag_name . '-carousel\').carousel(\'next\');">chevron_right</i>
                        </div>
                    </div>';

echo do_shortcode("[ic_add_posts tag='$tag_name' template='single_project_template.php' showposts='3']");

echo            '</div>
            </div>
        </div>
    </div>
</div>
</div>';
} 
?>