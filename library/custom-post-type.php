<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'carousel_slide', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Carousel Slides', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Slide', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Slides', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Slide', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Slides', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Slide', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Slide', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Slides', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example slide', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_template_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'carousel_slide', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'carousel_slide', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'carousel_slide' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'carousel_slide' );
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'custom_cat', 
    	array('carousel_slide'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Custom Categories', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Custom Category', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Custom Categories', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Custom Categories', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Category', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Category:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Custom Category', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Custom Category', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Custom Category', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Category Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'custom_tag', 
    	array('carousel_slide'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Custom Tags', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Custom Tag', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Custom Tags', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Custom Tags', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Tag', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Tag:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Custom Tag', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Custom Tag', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Custom Tag', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Tag Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    

    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */
	


	/**
	 * Generated by the WordPress Meta Box Generator at http://goo.gl/8nwllb
	 */
	class Rational_Meta_Box {
		private $screens = array(
			'carousel_slide',
		);
		private $fields = array(
			array(
				'id' => 'button-text',
				'label' => 'Button Text',
				'type' => 'text',
			),
			array(
				'id' => 'button-link',
				'label' => 'Button Link',
				'type' => 'text',
			),
		);

		/**
		 * Class construct method. Adds actions to their respective WordPress hooks.
		 */
		public function __construct() {
			add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
			add_action( 'save_post', array( $this, 'save_post' ) );
		}

		/**
		 * Hooks into WordPress' add_meta_boxes function.
		 * Goes through screens (post types) and adds the meta box.
		 */
		public function add_meta_boxes() {
			foreach ( $this->screens as $screen ) {
				add_meta_box(
					'read-more-button',
					__( 'Read More Button', 'rational-metabox' ),
					array( $this, 'add_meta_box_callback' ),
					$screen,
					'side',
					'default'
				);
			}
		}

		/**
		 * Generates the HTML for the meta box
		 * 
		 * @param object $post WordPress post object
		 */
		public function add_meta_box_callback( $post ) {
			wp_nonce_field( 'read_more_button_data', 'read_more_button_nonce' );
			echo 'The read more button text and link';
			$this->generate_fields( $post );
		}

		/**
		 * Generates the field's HTML for the meta box.
		 */
		public function generate_fields( $post ) {
			$output = '';
			foreach ( $this->fields as $field ) {
				$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
				$db_value = get_post_meta( $post->ID, 'read_more_button_' . $field['id'], true );
				switch ( $field['type'] ) {
					default:
						$input = sprintf(
							'<input id="%s" name="%s" type="%s" value="%s">',
							$field['id'],
							$field['id'],
							$field['type'],
							$db_value
						);
				}
				$output .= '<p>' . $label . '<br>' . $input . '</p>';
			}
			echo $output;
		}

		/**
		 * Hooks into WordPress' save_post function
		 */
		public function save_post( $post_id ) {
			if ( ! isset( $_POST['read_more_button_nonce'] ) )
				return $post_id;

			$nonce = $_POST['read_more_button_nonce'];
			if ( !wp_verify_nonce( $nonce, 'read_more_button_data' ) )
				return $post_id;

			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
				return $post_id;

			foreach ( $this->fields as $field ) {
				if ( isset( $_POST[ $field['id'] ] ) ) {
					switch ( $field['type'] ) {
						case 'email':
							$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
							break;
						case 'text':
							$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
							break;
					}
					update_post_meta( $post_id, 'read_more_button_' . $field['id'], $_POST[ $field['id'] ] );
				} else if ( $field['type'] === 'checkbox' ) {
					update_post_meta( $post_id, 'read_more_button_' . $field['id'], '0' );
				}
			}
		}
	}
	new Rational_Meta_Box;


?>
