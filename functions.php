<?php

//Theme Support
add_theme_support('post-thumbnails');

//Image sizes
add_image_size( 'entrada_home', 300, 200, true );
add_image_size( 'slider', 1200, 497, true );


// --- POST TYPES --- //
function codex_custom_init() {

	//Slider
	$labels = array(
		'name' => 'Slider',
		'singular_name' => 'Slider',
		'add_new' => 'Add Slider',
		'add_new_item' => 'Add New Slider',
		'edit_item' => 'Edit Slider',
		'new_item' => 'New Slider',
		'all_items' => 'All Slider',
		'view_item' => 'View Slider',
		'search_items' => 'Search Slider',
		'not_found' =>  'No Slider found',
		'not_found_in_trash' => 'No Slider found in Trash', 
		'parent_item_colon' => '',
		'menu_name' => 'Slider'
	  );

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'slider' ),
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'slider', $args );

	//Vacantes
	$labels = array(
		'name' => 'Vacantes',
		'singular_name' => 'Vacantes',
		'add_new' => 'Add Vacantes',
		'add_new_item' => 'Add New Vacantes',
		'edit_item' => 'Edit Vacantes',
		'new_item' => 'New Vacantes',
		'all_items' => 'All Vacantes',
		'view_item' => 'View Vacantes',
		'search_items' => 'Search Vacantes',
		'not_found' =>  'No Vacantes found',
		'not_found_in_trash' => 'No Vacantes found in Trash', 
		'parent_item_colon' => '',
		'menu_name' => 'Vacantes'
	  );

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'vacantes' ),
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'vacantes', $args );
}
add_action( 'init', 'codex_custom_init' );

// --- METABOXES --- //
$prefix = 'dbt_';
$meta_box = array(
    'id' => 'meta_vacantes',
    'title' => 'Información',
    'page' => 'vacantes',
    'context' => 'side',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Ciudad',
            'desc' => '',
            'id' => $prefix . 'ciudad',
            'type' => 'text',
            'std' => 'Toluca'
        ),
         array(
            'name' => 'URL',
            'desc' => 'Link a la página de la empresa',
            'id' => $prefix . 'url',
            'type' => 'text',
            'std' => ''
        )
    )
);

add_action('admin_menu', 'mytheme_add_box');
// Add meta box
function mytheme_add_box() {
    global $meta_box;
    add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function mytheme_show_box() {
    global $meta_box, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
                '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
                break;
        }
        echo     '</td><td>',
            '</td></tr>';
    }
    echo '</table>';
}

add_action('save_post', 'mytheme_save_data');
// Save data from meta box
function mytheme_save_data($post_id) {
    global $meta_box;
    // verify nonce
    if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    foreach ($meta_box['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }
}
