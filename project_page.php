<?php /* Template Name: ProjectPageTemplate */ ?>
<?php get_header() ?>
<?php get_the_tags(); ?>


<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/projects.jpg" style="width: 100vw; height: auto;">
    </div>
        <div class="caption center-align headline">
            <h2 class="white-text light">Projekte</h2>
        </div>
</div>
<!--END TITELBILD-->

<div style="margin: 5vw;" >

<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile ?>


<div style="height: 10vh;"> </div>

</div>

<?php get_footer() ?>