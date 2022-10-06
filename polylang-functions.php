<?php

function pll_current_lang_safe() {

    $return = null;

    if (function_exists('pll_current_language')) {
        $return =  pll_current_language();
    }

    return $return;
}

/*--------------------------------------------------------------
## Polylang remove Page Title and Permalink from synchronisation
--------------------------------------------------------------*/

add_filter( 'pll_sync_post_fields', 'unset_permalink' );

function unset_permalink( $datas ) {
    unset( $datas['post_title'] );
    unset( $datas['post_name'] );
    return $datas;
}