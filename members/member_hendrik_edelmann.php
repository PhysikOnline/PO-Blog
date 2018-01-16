<?php /* Template Name: HendrikEdelmannTemplate */ ?>

<?php get_header() ?>

<!-- <div class="parallax-container">
    <div class="parallax grey lighten-4" >
        <img src="<?php bloginfo('template_url')?>/assets/images/Teamfoto2016.jpg" style="min-width: 100vw; max-width: 120vw; height: auto;" >
    </div>
</div> -->

<div style="padding: 10vh;">
    <div class="card z-depth-3" style="width: 100%;">
        <div style="padding: 10vh;">
            <div class="row">
                <div class="col s12 m6 offset-m3 l3" style="padding: 2vh;">
                    <img src="<?php bloginfo('template_url')?>/assets/images/HendrikEdelmann.jpg" class="responsive-img">
                </div>
                <div class="col s12 m12 l6">
                    <h2 class="thin">Hendrik Edelmann</h2>
                    <span class="single_project_excerpt">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </span>
                </div>
                <div class="col s12 m12 l3">
                    <div class="card darken-1">
                        <div class="card-content">
                            <span class="card-title">Das sagen andere über ihn:</span>
                            <div style="margin: 2vw; margin-top: 0px; margin-bottom: 3vw;">
                                <div class="comments">
                                    <?php while ( have_posts() ) : the_post(); ?>
                                    <?php the_content(); ?>
                                    <?php endwhile ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>