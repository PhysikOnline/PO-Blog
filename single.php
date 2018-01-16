<?php get_header() ?>
<?php the_post(); ?>

<div >             
    <div class="extrapadding" >
        <div class="singlewrap">
            <div class="card z-depth-2">
                <div class="article">
                    <h3 class="thin"><?php the_title(); ?></h3>
                    <div id="meta">
                        <span id="subtitle" class="thin small"> Von <?php the_author(); ?>, &emsp;  <i class="material-icons tiny thin">access_time</i>  <?php the_date('d.m.Y'); ?> </span>
                    </div>  
                    <span class="light" style="line-height: 1.2;">
                        <?php the_content(); ?> 
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>

</body>


</html>