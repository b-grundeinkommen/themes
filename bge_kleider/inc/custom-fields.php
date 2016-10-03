<?php

/*
 * Metaboxes and adjustments for generell custom fields 
 */


add_action( 'load-post.php', 'BGE_kleider_metabox_cf_setup' );
add_action( 'load-post-new.php', 'BGE_kleider_metabox_cf_setup' );



/* Meta box setup function. */
function BGE_kleider_metabox_cf_setup() {

	add_action( 'add_meta_boxes', 'BGE_kleider_add_metabox_posts' );	
        add_action( 'add_meta_boxes', 'BGE_kleider_add_metabox_pages' );
        
	/* Save post display option. */
	add_action( 'save_post', 'BGE_kleider_save_metabox_displayoption', 10, 2 );
	/* Save sidecontent */
	add_action( 'save_post', 'BGE_kleider_save_metabox_pagesidecontent', 10, 2 );        
        /* Save subtitle */
	add_action( 'save_post', 'BGE_kleider_save_metabox_untertitel', 10, 2 );

}


/* Create one or more meta boxes to be displayed on the post editor screen. */

function BGE_kleider_add_metabox_posts() {
    /* Displayoptionen */
    add_meta_box(
		'BGE_kleider_metabox_displayoption',		
		esc_html__( 'Display Option', 'BGE_kleider' ),
		'BGE_kleider_do_metabox_displayoption',	
		 'post','advanced','high'
    );
    
    /* Subtitle */
    add_meta_box(
		'BGE_kleider_metabox_untertitel',		
		esc_html__( 'Subtitle', 'BGE_kleider' ),
		'BGE_kleider_do_metabox_untertitel',	
		 'post','normal','high'
    );


}
function BGE_kleider_add_metabox_pages() {
    	add_meta_box(
		'BGE_kleider_metabox_pagesidecontent',			
		esc_html__( 'Sidebar Text', 'BGE_kleider' ),		
		'BGE_kleider_do_metabox_pagesidecontent',		
		 'page','advanced','default'
	);
}



/* Subtitle*/
function BGE_kleider_do_metabox_untertitel( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'BGE_kleider_metabox_untertitel_nonce' ); 
	$post_type = get_post_type( $object->ID); 
	

		if ( !current_user_can( 'edit_post', $object->ID) )
		return;

	$subtitle = get_post_meta( $object->ID, 'BGE_kleider_subtitle', true );
	wphelper_form_text('BGE_kleider_subtitle',$subtitle,
                __('Subtitle','BGE_kleider'), 
                __('Optional subtitle for entry, which is displayed below of the main title.','BGE_kleider'), 
                '');
 }

/* Save subtitles. */
function BGE_kleider_save_metabox_untertitel( $post_id, $post ) {
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['BGE_kleider_metabox_untertitel_nonce'] ) || !wp_verify_nonce( $_POST['BGE_kleider_metabox_untertitel_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( 'edit_post', $post_id ) )
            return;
        
        wphelper_save_standard('BGE_kleider_subtitle', $_POST['BGE_kleider_subtitle'], $post_id, 'text');

}



/* Display Options for posts and pages */
function BGE_kleider_do_metabox_displayoption( $object, $box ) { 
    global $options;
	wp_nonce_field( basename( __FILE__ ), 'BGE_kleider_metabox_displayoption_nonce' ); 

	if ( !current_user_can( 'edit_post',$object->ID ) )
            return;

	$sliderimage =  get_post_meta( $object->ID, 'BGE_kleider_slider_image', true );
	wphelper_form_image('BGE_kleider_slider_image', $sliderimage, 
                __('Slider Image','BGE_kleider'),
                __('If you dont want to use the thumbnail (which uses normal formats) '
                        . 'you can add here a special slider image, with proper sizes (1024 x 348 pixel). '
                        . 'If this sizes dont fit, image will be cropped (mostyl from the edges up and down).','BGE_kleider'),1024,348);

                    
        $show_disclaimer = 0;	

	    /* also handle field 'BGE_kleider-show-post-disclaimer' for
	        posts */
	    $show_disclaimer = get_post_meta( $object->ID, 'BGE_kleider-show-post-disclaimer', true );
            
            if ((isset($options['post_disclaimer'])) && (strlen($options['post_disclaimer'])>0)) {        
                wphelper_form_select('BGE_kleider-show-post-disclaimer', 
                         array( 0 => __( "Do not show any disclaimer", 'BGE_kleider' ), 
                                1 => __( "Display disclaimer before article", 'BGE_kleider' ),
                                2 => __( "Display disclaimer after article.", 'BGE_kleider' ),
                                3 => __( "Display disclaimer before and after article.", 'BGE_kleider' ),                          
                             ), 
                         $show_disclaimer, 
                         __( "Show disclaimer", 'BGE_kleider' ), '', 1,'' );
                
                 echo "<p>";
                 _e( "Disclaimer Text", 'BGE_kleider' );
                 echo ":<br>";
                 echo "<em>".$options['post_disclaimer']."</em></p>\n";

            } else {
                echo "<p>";
                _e( "Notice: No disclaimer text defined. Please define a disclaimer text at first in theme options to use disclaimers.", 'BGE_kleider' );
                echo "</p>";
            }
       
}



/* Save the meta box's post/page metadata. */
function BGE_kleider_save_metabox_displayoption( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['BGE_kleider_metabox_displayoption_nonce'] ) || !wp_verify_nonce( $_POST['BGE_kleider_metabox_displayoption_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	
	
	if ($_POST['post_type'] == 'post') {
	   wphelper_save_standard('BGE_kleider-show-post-disclaimer', $_POST['BGE_kleider-show-post-disclaimer'], $post_id, 'int');
	   wphelper_save_standard('BGE_kleider_slider_image', $_POST['BGE_kleider_slider_image'], $post_id, 'int');

        }	
}


/* Display Options for posts and pages */
function BGE_kleider_do_metabox_pagesidecontent( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'BGE_kleider_metabox_pagesidecontent_nonce' ); 
	$post_type = get_post_type( $object->ID); 
	
	if ( 'page' == $post_type ) {
		if ( !current_user_can( 'edit_page', $object->ID) )
		return;
	} else {
	    return;
	}
	
	$text = get_post_meta( $object->ID, 'BGE_kleider_sidebar-content', true );
	if ((!isset($text)) || (strlen($text) <2)) {
	    $custom_fields = get_post_custom();
	    if (isset($custom_fields['right_column'])) {
		$text = $custom_fields['right_column'][0];
	    }
	}
	 wphelper_form_textarea('BGE_kleider_sidebar-content', $text, __( "Optional text for sidebar", 'BGE_kleider' ), 60, 5, '');

 }

/* Save the meta box's post/page metadata. */
function BGE_kleider_save_metabox_pagesidecontent( $post_id, $post ) {
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['BGE_kleider_metabox_pagesidecontent_nonce'] ) || !wp_verify_nonce( $_POST['BGE_kleider_metabox_pagesidecontent_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	}

        wphelper_save_standard('BGE_kleider_sidebar-content', $_POST['BGE_kleider_sidebar-content'], $post_id, 'textarea');
  	
	// Remove old values from version 2
	 $oldval = get_post_meta( $post_id, 'right_column', true );
	 if (isset($oldval)) {
	   delete_post_meta( $post_id, 'right_column', $oldval );	
	}
	
}

