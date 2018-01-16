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

<!-- ILIAS -->
<div class="card horizontal" style="margin-bottom: 6vh;">
<div class="card-stacked" >
    <div class="card-content">
        <div class="row">
            <div class="col s12 m12 l5">
                <div style="text-align: center">
                    <div style="margin-bottom: 3vh;">
                    <h3 class="thin">Ilias</h3>
                    </div>
                    <div class="divider" style="margin: 3vh;"> </div>
                    <div style="padding: 5vh;">
                    <span class="light">
                    Ilias ist der Name der Software, die die Basis unseres Elearning Portals darstellt. 
                    Mit einer Reihe von Funktionen bietet das Ilias den Studierenden die Möglichkeit schnell und einfach auf Lernmaterialien zuzugreifen und mit Lehrpersonen und Kommilitonen direkt in Kontakt zu treten.
                    </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l7">
                <div class="carousel blue darken-2 carousel-slider" data-indicators="true">
                    <div class="hide-on-small-only carousel-fixed-item right row">
                        <div class="col m1 offset-m10" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#ilias-carousel').carousel('prev');">chevron_left</i>
                        </div>
                        <div class="col m1" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#ilias-carousel').carousel('next');">chevron_right</i>
                        </div>
                    </div>
                    <?php echo do_shortcode("[ic_add_posts tag='ilias' template='single_project_template.php' showposts='3']"); ?>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<!-- POAPP -->
<div class="card horizontal" style="margin-bottom: 6vh;">
<div class="card-stacked" >
    <div class="card-content">
        <div class="row">
            <div class="col s12 m12 l5">
                <div style="text-align: center">
                    <div style="margin-bottom: 4vh;">
                    <h3 class="thin">PO App</h3>
                    </div>
                    <div class="divider" style="margin: 3vh;"></div>
                    <div style="padding: 5vh;">
                    <span class="light">
                        Irgendwas über die PO App
                    </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l7">
                <div id="poapp-carousel" class="carousel indigo carousel-slider" data-indicators="true">
                <div class="hide-on-small-only carousel-fixed-item right row">
                        <div class="col m1 offset-m10" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#poapp-carousel').carousel('prev');">chevron_left</i>
                        </div>
                        <div class="col m1" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#poapp-carousel').carousel('next');">chevron_right</i>
                        </div>
                    </div>
                    <?php echo do_shortcode("[ic_add_posts tag='poapp' template='single_project_template.php' showposts='3']"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- TINYGU -->
<div class="card horizontal" style="margin-bottom: 6vh;">
<div class="card-stacked" >
    <div class="card-content">
        <div class="row">
            <div class="col s12 m12 l5">
                <div style="text-align: center">
                    <div style="margin-bottom: 4vh;">
                    <h3 class="thin">TinyGU.de</h3>
                    </div>
                    <div class="divider" style="margin: 3vh;"></div>
                    <div style="padding: 5vh;">
                    <span class="light">
                        Etwas über TinyGU.de
                    </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l7">
                <div id="tinygu-carousel" class="carousel teal carousel-slider" data-indicators="true">
                <div class="hide-on-small-only carousel-fixed-item right row">
                        <div class="col m1 offset-m10" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#tinygu-carousel').carousel('prev');">chevron_left</i>
                        </div>
                        <div class="col m1" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#tinygu-carousel').carousel('next');">chevron_right</i>
                        </div>
                    </div>
                    <?php echo do_shortcode("[ic_add_posts tag='tinygu' template='single_project_template.php' showposts='3']"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- EDX -->
<div class="card horizontal" style="margin-bottom: 6vh;">
<div class="card-stacked" >
    <div class="card-content">
        <div class="row">
            <div class="col s12 m12 l5">
                <div style="text-align: center">
                    <div style="margin-bottom: 4vh;">
                    <h3 class="thin">edX</h3>
                    </div>
                    <div class="divider" style="margin: 3vh;"></div>
                    <div style="padding: 5vh;">
                    <span class="light">
                        Etwas über edX
                    </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l7">
                <div id="edx-carousel" class="carousel orange lighten-2 carousel-slider" data-indicators="true">
                <div class="hide-on-small-only carousel-fixed-item right row">
                        <div class="col m1 offset-m10" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#edx-carousel').carousel('prev');">chevron_left</i>
                        </div>
                        <div class="col m1" style="background-color: rgba(255,255,255,0.7);">
                            <i class="center material-icons waves-effect waves-light" onclick="$('#edx-carousel').carousel('next');">chevron_right</i>
                        </div>
                    </div>
                    <?php echo do_shortcode("[ic_add_posts tag='edx' template='single_project_template.php' showposts='3']"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<div style="height: 10vh;"> </div>

</div>

<?php get_footer() ?>