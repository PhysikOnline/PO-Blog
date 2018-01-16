<!-- Sidebar -->

<div class="col s12 m7 l3">
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

<div class="col s12 m5 l3">
    <div class="card">
        <div class="card-content">
            <p>
            <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <input placeholder="Suchbegriff..." type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
               <input class="waves-effect waves-teal btn-flat center" type="submit" id="search_submit" value="Suchen" style="margin: auto; width: 100%;" />
            </form>
            </p>
        </div>
    </div>
</div>

<!-- Sidebar End -->