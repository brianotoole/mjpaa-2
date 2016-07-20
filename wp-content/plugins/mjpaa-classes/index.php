<?php
/*
Plugin Name: MJPAA Class List
Plugin URI: #
Description: Custom post type & taxonomies for MJPAA classes
Version: 1.0.0
Author: MJPAA
*/



// Register Custom Taxonomy: "Program: Dance & Classical Ballet Upper" - used within the "Class" custom post type
function program_dance_classical_ballet_upper() {

	$labels = array(
		'name'                       => _x( 'Program: Dance & Classical Ballet: Upper Division', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Program: Dance & Classical Ballet: Upper Division', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Program: Dance & Classical Ballet: Upper Division', 'mjpaa' ),
		'all_items'                  => __( 'All Dance & Classical Ballet Upper Div. Classes', 'mjpaa' ),
		'parent_item'                => __( 'Parent Program', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Program:', 'mjpaa' ),
		'new_item_name'              => __( 'New Dance & Classical Ballet Upper Div. Class Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Dance & Classical Ballet Upper Div. Class Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Program', 'mjpaa' ),
		'update_item'                => __( 'Update Program', 'mjpaa' ),
		'view_item'                  => __( 'View Program', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate programs with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove programs', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Programs', 'mjpaa' ),
		'search_items'               => __( 'Search Programs', 'mjpaa' ),
		'not_found'                  => __( 'Program Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'program-dance-upper', array( 'classes' ), $args );

}
add_action( 'init', 'program_dance_classical_ballet_upper', 0 );



// Register Custom Taxonomy: "Program: Dance & Classical Ballet Childrens" - used within the "Class" custom post type
function program_dance_classical_ballet_childrens() {

	$labels = array(
		'name'                       => _x( 'Program: Dance & Classical Ballet: Childrens Division', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Program: Dance & Classical Ballet: Childrens Division', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Program: Dance & Classical Ballet: Childrens Division', 'mjpaa' ),
		'all_items'                  => __( 'All Dance & Classical Ballet Childrens Div. Classes', 'mjpaa' ),
		'parent_item'                => __( 'Parent Program', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Program:', 'mjpaa' ),
		'new_item_name'              => __( 'New Dance & Classical Ballet Childrens Div. Class Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Dance & Classical Ballet Childrens Div. Class Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Program', 'mjpaa' ),
		'update_item'                => __( 'Update Program', 'mjpaa' ),
		'view_item'                  => __( 'View Program', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate programs with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove programs', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Programs', 'mjpaa' ),
		'search_items'               => __( 'Search Programs', 'mjpaa' ),
		'not_found'                  => __( 'Program Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'program-dance-childrens', array( 'classes' ), $args );

}
add_action( 'init', 'program_dance_classical_ballet_childrens', 0 );



// Register Custom Taxonomy: "Program: Acing & Theater" - used within the "Class" custom post type
function program_acting_theater() {

	$labels = array(
		'name'                       => _x( 'Program: Acting & Theater', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Program: Acting & Theater', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Program: Acting & Theater', 'mjpaa' ),
		'all_items'                  => __( 'All Acting & Theater Classes', 'mjpaa' ),
		'parent_item'                => __( 'Parent Program', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Program:', 'mjpaa' ),
		'new_item_name'              => __( 'New Acting & Theater Class Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Acting & Theater Class Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Program', 'mjpaa' ),
		'update_item'                => __( 'Update Program', 'mjpaa' ),
		'view_item'                  => __( 'View Program', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate programs with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove programs', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Programs', 'mjpaa' ),
		'search_items'               => __( 'Search Programs', 'mjpaa' ),
		'not_found'                  => __( 'Program Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'program-acting', array( 'classes' ), $args );

}
add_action( 'init', 'program_acting_theater', 0 );



// Register Custom Taxonomy: "Program: Music, Instruments & Voice" - used within the "Class" custom post type
function program_music_voice() {

	$labels = array(
		'name'                       => _x( 'Program: Music, Instruments & Voice', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Program: Music, Instruments & Voice', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Program: Music, Instruments & Voice', 'mjpaa' ),
		'all_items'                  => __( 'All Music, Instruments & Voice Classes', 'mjpaa' ),
		'parent_item'                => __( 'Parent Program', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Program:', 'mjpaa' ),
		'new_item_name'              => __( 'New Music, Instruments & Voice Class Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Music, Instruments & Voice Class Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Program', 'mjpaa' ),
		'update_item'                => __( 'Update Program', 'mjpaa' ),
		'view_item'                  => __( 'View Program', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate programs with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove programs', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Programs', 'mjpaa' ),
		'search_items'               => __( 'Search Programs', 'mjpaa' ),
		'not_found'                  => __( 'Program Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'program-music', array( 'classes' ), $args );

}
add_action( 'init', 'program_music_voice', 0 );



// Register Custom Taxonomy: "Program: Acrobatics" - used within the "Class" custom post type
function program_acrobatics() {

	$labels = array(
		'name'                       => _x( 'Program: Acrobatics', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Program: Acrobatics', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Program: Acrobatics', 'mjpaa' ),
		'all_items'                  => __( 'All Acrobatics Classes', 'mjpaa' ),
		'parent_item'                => __( 'Parent Program', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Program:', 'mjpaa' ),
		'new_item_name'              => __( 'New Music, Acrobatics Class Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Music, Acrobatics Class Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Program', 'mjpaa' ),
		'update_item'                => __( 'Update Program', 'mjpaa' ),
		'view_item'                  => __( 'View Program', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate programs with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove programs', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Programs', 'mjpaa' ),
		'search_items'               => __( 'Search Programs', 'mjpaa' ),
		'not_found'                  => __( 'Program Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'program-acrobatics', array( 'classes' ), $args );

}
add_action( 'init', 'program_acrobatics', 0 );



// Register Custom Taxonomy: "Session" - used within the "Class" custom post type
function class_session() {

	$labels = array(
		'name'                       => _x( 'Class Sessions', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Class Session', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Class Sessions', 'mjpaa' ),
		'all_items'                  => __( 'All Sessions', 'mjpaa' ),
		'parent_item'                => __( 'Parent Session', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Session:', 'mjpaa' ),
		'new_item_name'              => __( 'New Session Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Session Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Session', 'mjpaa' ),
		'update_item'                => __( 'Update Session', 'mjpaa' ),
		'view_item'                  => __( 'View Session', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate sessions with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove sessions', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Sessions', 'mjpaa' ),
		'search_items'               => __( 'Search Sessions', 'mjpaa' ),
		'not_found'                  => __( 'Session Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'session', array( 'classes' ), $args );

}
add_action( 'init', 'class_session', 0 );



// Register Custom Taxonomy: "Grade" - used within the "Class" custom post type
function class_grade_level() {

	$labels = array(
		'name'                       => _x( 'Class Grade Levels', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Class Grade Level', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Class Grade Levels', 'mjpaa' ),
		'all_items'                  => __( 'All Grade Levels', 'mjpaa' ),
		'parent_item'                => __( 'Grade Level Parent Item', 'mjpaa' ),
		'parent_item_colon'          => __( 'Grade Level Parent Item:', 'mjpaa' ),
		'new_item_name'              => __( 'New Grade Level Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add New Grade Level', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Grade Level', 'mjpaa' ),
		'update_item'                => __( 'Update Grade Level', 'mjpaa' ),
		'view_item'                  => __( 'View Grade Level', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Grade Levels', 'mjpaa' ),
		'search_items'               => __( 'Search Grade Levels', 'mjpaa' ),
		'not_found'                  => __( 'Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'grade', array( 'classes' ), $args );

}
add_action( 'init', 'class_grade_level', 0 );



// Register Custom Post Type: "Class"
function custom_post_type_classes() {

	$labels = array(
		'name'                => _x( 'Classes', 'Post Type General Name', 'mjpaa' ),
		'singular_name'       => _x( 'Class', 'Post Type Singular Name', 'mjpaa' ),
		'menu_name'           => __( 'Classes', 'mjpaa' ),
		'name_admin_bar'      => __( 'Classes', 'mjpaa' ),
		'parent_item_colon'   => __( 'Parent Item:', 'mjpaa' ),
		'all_items'           => __( 'All Classes', 'mjpaa' ),
		'add_new_item'        => __( 'Add New Class', 'mjpaa' ),
		'add_new'             => __( 'Add New', 'mjpaa' ),
		'new_item'            => __( 'New Class', 'mjpaa' ),
		'edit_item'           => __( 'Edit Class', 'mjpaa' ),
		'update_item'         => __( 'Update Class', 'mjpaa' ),
		'view_item'           => __( 'View Class', 'mjpaa' ),
		'search_items'        => __( 'Search Class', 'mjpaa' ),
		'not_found'           => __( 'Class not found', 'mjpaa' ),
		'not_found_in_trash'  => __( 'Class not found in Trash', 'mjpaa' ),
	);
	$args = array(
		'label'               => __( 'Class', 'mjpaa' ),
		'description'         => __( 'Class lists for MJPAA', 'mjpaa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail', 'post-formats', ),
		'taxonomies'          => array( 'program-dance-upper', 'program-dance-childrens', 'program-acting', 'program-music', 'program-voice', 'program-acrobatics', 'session', 'grade' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-playlist-audio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'class', $args );

}
add_action( 'init', 'custom_post_type_classes', 1 );



// Register Custom Post Type: "Faculty"
function custom_post_type_faculty() {

	$labels = array(
		'name'                => _x( 'Faculty', 'Post Type General Name', 'mjpaa' ),
		'singular_name'       => _x( 'Faculty Member', 'Post Type Singular Name', 'mjpaa' ),
		'menu_name'           => __( 'Faculty Members', 'mjpaa' ),
		'name_admin_bar'      => __( 'Faculty Members', 'mjpaa' ),
		'parent_item_colon'   => __( 'Parent Item:', 'mjpaa' ),
		'all_items'           => __( 'All Faculty Members', 'mjpaa' ),
		'add_new_item'        => __( 'Add New Faculty Member', 'mjpaa' ),
		'add_new'             => __( 'Add New', 'mjpaa' ),
		'new_item'            => __( 'New Faculty Member', 'mjpaa' ),
		'edit_item'           => __( 'Edit Faculty Member', 'mjpaa' ),
		'update_item'         => __( 'Update Faculty Member', 'mjpaa' ),
		'view_item'           => __( 'View Faculty Member', 'mjpaa' ),
		'search_items'        => __( 'Search Faculty Members', 'mjpaa' ),
		'not_found'           => __( 'Faculty Member not found', 'mjpaa' ),
		'not_found_in_trash'  => __( 'Faculty Member not found in Trash', 'mjpaa' ),
	);
	$args = array(
		'label'               => __( 'Faculty Member', 'mjpaa' ),
		'description'         => __( 'Faculty Member list for MJPAA', 'mjpaa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-businessman',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'faculty', $args );

}
add_action( 'init', 'custom_post_type_faculty', 2 );



// Register Custom Post Type: "Alumni"
function custom_post_type_alumni() {

	$labels = array(
		'name'                => _x( 'Alumni', 'Post Type General Name', 'mjpaa' ),
		'singular_name'       => _x( 'Alumni', 'Post Type Singular Name', 'mjpaa' ),
		'menu_name'           => __( 'Alumni Members', 'mjpaa' ),
		'name_admin_bar'      => __( 'Alumni Members', 'mjpaa' ),
		'parent_item_colon'   => __( 'Parent Item:', 'mjpaa' ),
		'all_items'           => __( 'All Alumni Members', 'mjpaa' ),
		'add_new_item'        => __( 'Add New Alumni Member', 'mjpaa' ),
		'add_new'             => __( 'Add New', 'mjpaa' ),
		'new_item'            => __( 'New Alumni Member', 'mjpaa' ),
		'edit_item'           => __( 'Edit Alumni Member', 'mjpaa' ),
		'update_item'         => __( 'Update Alumni Member', 'mjpaa' ),
		'view_item'           => __( 'View Alumni Member', 'mjpaa' ),
		'search_items'        => __( 'Search Alumni Members', 'mjpaa' ),
		'not_found'           => __( 'Alumni Member not found', 'mjpaa' ),
		'not_found_in_trash'  => __( 'Alumni Member not found in Trash', 'mjpaa' ),
	);
	$args = array(
		'label'               => __( 'Alumni Members', 'mjpaa' ),
		'description'         => __( 'Alumni list for MJPAA', 'mjpaa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'page-attributes', 'revisions' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'alumni', $args );

}
add_action( 'init', 'custom_post_type_alumni', 3 );





// Register Custom Post Type: "Testimonials"
function custom_post_type_testimonial() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'mjpaa' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'mjpaa' ),
		'menu_name'           => __( 'Testimonials', 'mjpaa' ),
		'name_admin_bar'      => __( 'Testimonials', 'mjpaa' ),
		'parent_item_colon'   => __( 'Parent Item:', 'mjpaa' ),
		'all_items'           => __( 'All Testimonials', 'mjpaa' ),
		'add_new_item'        => __( 'Add New Testimonial', 'mjpaa' ),
		'add_new'             => __( 'Add New', 'mjpaa' ),
		'new_item'            => __( 'New Testimonial', 'mjpaa' ),
		'edit_item'           => __( 'Edit Testimonials', 'mjpaa' ),
		'update_item'         => __( 'Update Testimonials', 'mjpaa' ),
		'view_item'           => __( 'View Testimonials', 'mjpaa' ),
		'search_items'        => __( 'Search Testimonialss', 'mjpaa' ),
		'not_found'           => __( 'Testimonial not found', 'mjpaa' ),
		'not_found_in_trash'  => __( 'Testimonial not found in Trash', 'mjpaa' ),
	);
	$args = array(
		'label'               => __( 'Testimonials', 'mjpaa' ),
		'description'         => __( 'Testimonials for MJPAA', 'mjpaa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-format-quote',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'custom_post_type_testimonial', 4 );











?>