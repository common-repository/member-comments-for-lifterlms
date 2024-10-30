<?php
/*
Plugin Name: Member Comments for LifterLMS
Plugin URI: http://learning-templates.com/index.php/product/lifterlms-member-comments/
Description: Member Comments for LifterLMS filters comments by Membership Group. Activating this plugin will pick up the WordPress Discussion settings and the LifterLMS Membership restrictions and combine them to filter user comments by Membership group in LifterLMS Courses, Lessons and Quizzes. Check out my <a href="https://lifterlms.com/product/lifterlms-xapi/">LifterLMS xAPI</a> plugin at the LifterLMS website.
Version: 1.0.1
Author: Dennis Hall
Author URI: http://learning-templates.com
License: GPLv2 or later.
*/

if(!function_exists('lcr_init')):
function lcr_init() {
	// read filters
	
	add_filter( 'comments_array','lcr_comments_array' , 10, 2 );
}
endif;
add_action( 'init', 'lcr_init' );
if(!function_exists('lcr_comments_array')):
function lcr_comments_array( $comments, $post_id ) {
	
		 
	 $result = array();
	 foreach($comments as $comment){
		$commenter_id	=	$comment->user_id;
		if ( lcr_user_can_read_comments( get_current_user_id(), $post_id ,$commenter_id) ) {
			$result[] 	= 	$comment;
		}
	}
	return $result;
}
endif;
if(!function_exists('lcr_user_can_read_comments')):
function lcr_user_can_read_comments( $user_id = null, $post_id = null,$commenter_id = null ) {
		$result = true;

		if ( $user_id === null ) {
			$user_id = get_current_user_id();
		}
		if ( $commenter_id === null ) {
			$result = true;
		}
		$post_type = get_post_type( $post_id );
		//check post types for LifterLMS
		if($post_type == 'course' || 
		$post_type == 'lesson' || 
		$post_type == 'quiz'
		){
			//check for user groups 
			//  group logic: show comments to same membership group users
			if ( ! function_exists( 'wp_get_current_user' ) ) {
					include_once ABSPATH . 'wp-includes/pluggable.php';
			}
			
			$current_user = wp_get_current_user();
			$userid = $current_user->ID;
			if ( ! function_exists( 'get_user_memberships_data' ) ) {
				include_once (WP_PLUGIN_DIR . '/lifterlms/includes/class.llms.person.php');
			}
			$lms_person = new LLMS_Person();
			
			$my_groups = $lms_person->get_user_memberships_data($userid);
			$my_group = array_keys( $my_groups );
			$ass_users_groups = $lms_person->get_user_memberships_data($commenter_id);
			$ass_users_group = array_keys( $ass_users_groups );
			//skip if membership group is not the same group the user is in
			if(empty(array_diff($ass_users_group ,$my_group))) {
				$result = true;
			} else {
				$result = false;
			}
		}
		
		return $result;
	}
endif;