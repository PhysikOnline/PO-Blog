<?php

function member_card( $member_first_name, $member_last_name, $page_id, $member_descr ) {
    
    echo '
    <div class="member_card_hover_effect card col s12 m4 l4">
    <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="'; 
    
    $link = bloginfo('template_url');
    
    echo '/assets/images/' . $member_first_name . $member_last_name . '.jpg" >
    </div>
    <div class="card-content">
    <span class="card-title activator grey-text text-darken-4">' . $member_first_name . ' ' . $member_last_name  . '<i class="material-icons right">more_vert</i></span>
    <p><a href="';

    echo get_page_link( $page_id );

    echo '">Mehr</a></p>
    </div>
    <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">' . $member_first_name . ' ' . $member_last_name  . '<i class="material-icons right">close</i></span>
    <p>' . $member_descr . '</p>
    </div>
    </div>';
};

?>
