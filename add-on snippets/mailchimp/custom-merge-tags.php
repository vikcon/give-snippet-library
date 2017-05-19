<?php

/**
 *  Add custom MergeFields into your Give MailChimp Opt-In
 * 
 */
 
function my_give_mailchimp_merge_vars( $api_args ) {

    // Define custom merge tags.
    $custom_merge_vars = array(
        'MMERGE7' => '1',
    );

    // Add custom tags to default merge tags (FNAME, LNAME).
    $api_args['merge_vars'] = array_merge ( $custom_merge_vars, $api_args['merge_vars'] );

    return $api_args;

}

add_filter( 'give_mc_subscribe_vars', 'my_give_mailchimp_merge_vars' );