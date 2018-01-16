<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/materialize.min.css"  media="screen,projection"/>

<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"  media="screen,projection"/>

<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" media="screen,projection">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css"/>

</head>

<body class="grey lighten-4" >


<?php function for_whatever_reason_I_need_a_function_for_this( $length ) {
    return 43;
}
add_filter( 'excerpt_length', 'for_whatever_reason_I_need_a_function_for_this'); ?>

<!--NAVBAR-->
<nav id="nav" class="light-blue darken-4 z-depth-3">
    <div class="containernav">
        <div class="nav-wrapper">
            <a href="<?php echo home_url(); ?>" class="brand-logo white-text">
                <img class="responsive-img" src="<?php bloginfo( 'template_url')?>/assets/images/Logo-Klein.png" style="padding-left: 40px; padding-right: 40px;">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down"> 
                <!-- To exclude pages, add their ID to the 'exclude'-Comma separated list -->
                <?php 
                $args = array('title_li' => 0, 'exclude' => '18' ); 
                wp_list_pages( $args ); ?>
            </ul>
            <ul id="slide-out" class="side-nav hide-on-large-only">
                <?php $args = array('title_li' => 0, 'exclude' => '18' ); wp_list_pages( $args ); ?>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
        </div>
    </div>
</nav>    
<!--END NAVBAR-->
