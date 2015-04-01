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

function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->subfood.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}