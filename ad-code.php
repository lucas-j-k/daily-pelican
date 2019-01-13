<?php

//Initialize ad code:
function adScripts()
{
    global $wp;
    wp_register_script('adscripts', get_template_directory_uri() . '/js/ad-code.js', array(), '1.0.0', true); // Ad scripts
    wp_enqueue_script('adscripts'); // Enqueue it!
    //Pass variables from the backend into the ad code script file.
    $dataToInject = array(
        'tags'            => get_the_tags(),
        'path'            => $wp->request,
        'post'            => is_single()
    );
    wp_localize_script( 'adscripts', 'injectedVars', $dataToInject );
}

adScripts();

?>
