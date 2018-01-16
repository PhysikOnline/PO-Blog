<?php /* Template Name: AboutUsPageTemplate */ ?>
<?php get_header() ?>
<?php include 'member_card.php' ?>

<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/Teamfoto2016.jpg" style="min-width: 100vw; max-width: 120vw; height: auto;">
    </div>
        <div class="caption center-align headline">
            <h2 class="white-text light">Über Uns</h2>
        </div>
</div>
<!--END TITELBILD-->
<div class="white">
<div class="container" style="padding-top: 5vh; padding-bottom: 5vh;">

<div>
    <span class="thin" style="font-size: 250%;"> Das PhysikOnline-Team </span>
</div>
<br>
<span class="light">
Alle Mitarbeiter bei PhysikOnline sind Studierende der Physik oder benachbarter Studiengänge. Sie sind als studentische Hilfskräfte angestellt oder arbeiten ehrenamtlich mit. Wir beziehen Gelder aus verschiedenen Töpfen, wobei die QSL-Mittel des Fachbereichs Physik den Grundstock an Mitarbeitern ermöglicht.
<br>
Als studentisches Projekt lebt PhysikOnline von einem ständigen Kommen und Gehen. Manche Mitglieder von PhysikOnline sind nur wenige Monate angestellt, anderere sind bereits seit ihrem ganzen Studium dabei. Auf dieser Seite sind alle ehemaligen und amtierenden Teammitglieder aufgelistet. Diese Seite soll dabei Teile unseres Impressums ersetzen. Zu jedem Mitglied zeigen wir ein Foto, stellen ihn oder sie in einem kurzen Text mit Fähigkeiten, Zeitraum der Mitarbeit, und den Projekten, in denen er/sie mitgewirkt hat, vor.
<br>
Einzig nicht studentisches Mitglied in folgender Liste ist Professor Lüdde, der das Projekt betreut. Ansonsten gibt es im PhysikOnline-Projekt keine hierarchische Struktur, alle Teammitglieder beteiligen sich an den Projekten, die sie interessieren. Nach diesen Kriterien werden auch neue Mitglieder ins Team aufgenommen.
</span>


</div>

<div class="container" style="padding-top: 5vh; padding-bottom: 5vh;">
<span class="thin" style="font-size: 250%;">
    Mitglieder
</span>
<!-- Member Cards Display -->
<div id="member_div" class="row">
    <?php member_card('Hendrik', 'Edelmann', 18, 
    'Absatz 1
    <br>
    Absatz 2'); ?>
</div>

</div>
</div>
<?php get_footer() ?>