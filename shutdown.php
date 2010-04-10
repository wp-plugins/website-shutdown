<?php
/*
Plugin Name: Shutdown Website
Description: Allows you to shutdown a website
Version:     1.0
Author:      Craig Farnes
Plugin URI:  http://craigfarnes.co.uk
Author URI:  http://craigfarnes.co.uk
*/


function head_shutdown() {
get_currentuserinfo() ;
global $user_level;
if($user_level != 10){
	die("Website is down for maintenance, Please try again later");
}
}

add_action( 'wp_head', 'head_shutdown' );

?>