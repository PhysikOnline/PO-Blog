<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/materialize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">

    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>PhysikOnline Blog</title>

</head>

<?php the_post(); ?>

<body>
   <div class="parallax-container" style="height: 300px;">
      <div class="parallax">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
      </div>
   </div>
    <div class="white" style="margin-left: 300px; margin-right: 300px;">
        <div style="margin-top: 100px;">
            <h3 class="thin"><?php the_title() ?></h3>
            <span class="thin"><?php the_content() ?></span>
        </div>        
    </div>
    
    <?php get_footer()?>
</body>