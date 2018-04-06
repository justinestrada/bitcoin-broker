<?php
/**
 * Send extra follow up email to new members who sign up for level ID #1, #2, or #3.
 *
 * @param RCP_Member $member
 *
 * @return void
 */
 
// function ag_rcp_after_registration( $member ) {
//
// 	// Array of level IDs we want to execute code for.
// 	$subscription_levels_to_check = array( 1, 2, 3 );  // Change these ID numbers.
//
// 	// Bail if they don't have one of these level IDs.
// 	if ( ! in_array( $member->get_subscription_id(), $subscription_levels_to_check ) ) {
// 		return;
// 	}
//
// 	// Send an extra follow up email.
// 	$subject = __( 'Requesting extra information', 'rcp' );
// 	$message = __( 'Include your email message here.', 'rcp' );
//
// 	$emails = new RCP_Emails;
// 	$emails->member_id = $member->ID;
// 	$emails->send( $member->user_email, $subject, $message );
//
// }
//
// add_action( 'rcp_successful_registration', 'ag_rcp_after_registration' );


function bitcoinbroker_rcp_show_subscription_level( $show, $level_id, $user_id ) {

    // Don't show level #3 || level #4 if the current user is on level #1 or level #2
    if ( rcp_get_subscription_id( $user_id ) == 1 || rcp_get_subscription_id( $user_id ) == 2 ) {
    	if ($level_id == 3 || $level_id == 4) {
        $show = false;
    	}
    } else if ( ! is_user_logged_in() ) {
    	if ($level_id == 1 || $level_id == 2) {
        $show = false;
    	}    	
    }

    return $show;
}

add_filter( 'rcp_show_subscription_level', 'bitcoinbroker_rcp_show_subscription_level', 10, 3 );











