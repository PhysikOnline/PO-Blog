<?php get_header(); ?>


<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/UD4-1.jpg">
    </div>
        <div class="caption center-align headline">
            <h2 class="white-text light">PhysikOnline Blog</h2>
            <h5 class="light grey-text text-lighten-3">Alles rund um unsere Projekte, wer wir sind und was wir vorhaben.</h5>
        </div>
</div>
<!--END TITELBILD-->


 <!--MAIN-->       
<div class="section grey lighten-3">

<div class="row wrap">   
<div class="section-headline" > 
<h3 class="thin">
Neueste Beiträge
</h3>
</div> 

<div class="hide-on-large-only"> 
<?php get_sidebar() ?>
</div>

<div id="Main" class="col s12 m12 l9">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
<!-- CARD -->
    <div class="card-background card black-text <?php if(!has_post_thumbnail()) {echo get_random_color();}?>" href="<?php the_permalink();?>" style="<?php if (has_post_thumbnail()) {echo 'background-image: url('; echo the_post_thumbnail_url(); echo ');';} ?>">
        <div class="row">
            <div class="col s12 m7 offset-m5 l6 offset-l6" style="background-color: rgba(255,255,255,0.85); padding: 4vh;">
                <a class="black-text" href="<?php the_permalink()?>"><span class="card-title"><?php the_title();?></span></a>
                <span class="light single_project_excerpt"><?php the_excerpt(); ?></span>
                <br>
                <a href="<?php the_permalink()?>"> mehr.. </a>
                <br><br>
                <div class="divider grey lighten-2" style="margin-bottom: 3vh;"></div>
                <div style="padding: 1vh;">
                    <?php $post_tags = get_the_tags(); if ( $post_tags ) {
                        foreach( $post_tags as $tag ) {
                        echo '<div class="chip grey lighten-3" style="border-style: solid; border-width: 0.3px; border-color: #bdbdbd;"><a href="' . get_tag_link( $tag ) . '">' . $tag->name . '</a></div> '; 
                            }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END CARD -->
     <?php endwhile; endif; ?>  
</div> 
<!-- END MAIN -->

<!--SIDEBAR-->
<?php get_the_tags(); ?>  
<div class="hide-on-med-and-down"> 
<div class="col s12 m6 l3">
    <div class="card">
        <div class="card-content">
            <p>
            <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
               <input class="waves-effect waves-teal btn-flat center" type="submit" id="search_submit" value="Suchen" style="margin: auto; width: 100%;" />
            </form>
            </p>
        </div>
    </div>
</div>
<div class="col s12 m6 l3">
    <div class="card">
        <div class="card-content">
            <span class="card-title">Tags</span>
            <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
                <div class="chip"><?php wp_tag_cloud( 'smallest=10&largest=10&separator=</div> <div class="chip">' ); ?>
                </div>
            <?php endif; ?>
            <br><br>
        </div>
    </div>
</div>
</div>
</div>        
</div>     

<?php get_footer(); ?>
