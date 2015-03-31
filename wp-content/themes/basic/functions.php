<?php

function is_active($page){
	if(is_page($page)){
		echo 'active';
	}
}


function custom_login_redirect( $redirect_to, $request, $user ) {
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		// chek for admins
		if ( in_array ( 'administrator', $user->roles ) ) {
		// redirect them to default
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		//redirect them to default
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'custom_login_redirect', 10, 3);