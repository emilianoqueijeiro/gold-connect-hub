<?php
/**
 * ServiceConnect functions and definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function serviceconnect_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('custom-background');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'serviceconnect'),
        'footer'  => esc_html__('Footer Menu', 'serviceconnect'),
    ));
}
add_action('after_setup_theme', 'serviceconnect_setup');

// Enqueue styles and scripts
function serviceconnect_scripts() {
    wp_enqueue_style('serviceconnect-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_script('serviceconnect-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'serviceconnect_scripts');

// Register widget areas
function serviceconnect_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'serviceconnect'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'serviceconnect'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'serviceconnect_widgets_init');

// Customizer options
function serviceconnect_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'serviceconnect'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Find trusted service professionals in your area',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'serviceconnect'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Connect with vetted professionals for all your home and business needs',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'serviceconnect'),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));

    // Contact Information
    $wp_customize->add_section('contact_info', array(
        'title'    => __('Contact Information', 'serviceconnect'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('phone_number', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label'   => __('Phone Number', 'serviceconnect'),
        'section' => 'contact_info',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'serviceconnect_customize_register');

// Custom post types
function serviceconnect_register_post_types() {
    // Services post type
    register_post_type('services', array(
        'labels' => array(
            'name'          => __('Services', 'serviceconnect'),
            'singular_name' => __('Service', 'serviceconnect'),
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'   => 'dashicons-hammer',
    ));
    
    // Professionals post type
    register_post_type('professionals', array(
        'labels' => array(
            'name'          => __('Professionals', 'serviceconnect'),
            'singular_name' => __('Professional', 'serviceconnect'),
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'   => 'dashicons-groups',
    ));
    
    // Testimonials post type
    register_post_type('testimonials', array(
        'labels' => array(
            'name'          => __('Testimonials', 'serviceconnect'),
            'singular_name' => __('Testimonial', 'serviceconnect'),
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array('title', 'editor', 'thumbnail'),
        'menu_icon'   => 'dashicons-format-quote',
    ));
}
add_action('init', 'serviceconnect_register_post_types');

// Custom taxonomies
function serviceconnect_register_taxonomies() {
    // Service categories
    register_taxonomy('service_category', 'services', array(
        'labels' => array(
            'name'          => __('Service Categories', 'serviceconnect'),
            'singular_name' => __('Service Category', 'serviceconnect'),
        ),
        'hierarchical' => true,
        'public'       => true,
    ));
}
add_action('init', 'serviceconnect_register_taxonomies');

// Add custom fields support
function serviceconnect_add_meta_boxes() {
    add_meta_box(
        'professional_details',
        __('Professional Details', 'serviceconnect'),
        'serviceconnect_professional_meta_box_callback',
        'professionals'
    );
    
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'serviceconnect'),
        'serviceconnect_testimonial_meta_box_callback',
        'testimonials'
    );
}
add_action('add_meta_boxes', 'serviceconnect_add_meta_boxes');

function serviceconnect_professional_meta_box_callback($post) {
    wp_nonce_field('serviceconnect_professional_meta_box', 'serviceconnect_professional_meta_box_nonce');
    $rating = get_post_meta($post->ID, '_professional_rating', true);
    $jobs_completed = get_post_meta($post->ID, '_jobs_completed', true);
    $specialties = get_post_meta($post->ID, '_specialties', true);
    
    echo '<p>';
    echo '<label for="professional_rating">' . __('Rating (1-5):', 'serviceconnect') . '</label><br>';
    echo '<input type="number" id="professional_rating" name="professional_rating" value="' . esc_attr($rating) . '" min="1" max="5" step="0.1" />';
    echo '</p>';
    
    echo '<p>';
    echo '<label for="jobs_completed">' . __('Jobs Completed:', 'serviceconnect') . '</label><br>';
    echo '<input type="number" id="jobs_completed" name="jobs_completed" value="' . esc_attr($jobs_completed) . '" />';
    echo '</p>';
    
    echo '<p>';
    echo '<label for="specialties">' . __('Specialties:', 'serviceconnect') . '</label><br>';
    echo '<textarea id="specialties" name="specialties" rows="3" cols="50">' . esc_textarea($specialties) . '</textarea>';
    echo '</p>';
}

function serviceconnect_testimonial_meta_box_callback($post) {
    wp_nonce_field('serviceconnect_testimonial_meta_box', 'serviceconnect_testimonial_meta_box_nonce');
    $client_name = get_post_meta($post->ID, '_client_name', true);
    $client_location = get_post_meta($post->ID, '_client_location', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    
    echo '<p>';
    echo '<label for="client_name">' . __('Client Name:', 'serviceconnect') . '</label><br>';
    echo '<input type="text" id="client_name" name="client_name" value="' . esc_attr($client_name) . '" />';
    echo '</p>';
    
    echo '<p>';
    echo '<label for="client_location">' . __('Client Location:', 'serviceconnect') . '</label><br>';
    echo '<input type="text" id="client_location" name="client_location" value="' . esc_attr($client_location) . '" />';
    echo '</p>';
    
    echo '<p>';
    echo '<label for="testimonial_rating">' . __('Rating (1-5):', 'serviceconnect') . '</label><br>';
    echo '<input type="number" id="testimonial_rating" name="testimonial_rating" value="' . esc_attr($rating) . '" min="1" max="5" step="0.1" />';
    echo '</p>';
}

// Save custom fields
function serviceconnect_save_meta_box_data($post_id) {
    if (!isset($_POST['serviceconnect_professional_meta_box_nonce']) && !isset($_POST['serviceconnect_testimonial_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['serviceconnect_professional_meta_box_nonce'], 'serviceconnect_professional_meta_box') && 
        !wp_verify_nonce($_POST['serviceconnect_testimonial_meta_box_nonce'], 'serviceconnect_testimonial_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['post_type']) && 'professionals' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
        
        if (isset($_POST['professional_rating'])) {
            update_post_meta($post_id, '_professional_rating', sanitize_text_field($_POST['professional_rating']));
        }
        if (isset($_POST['jobs_completed'])) {
            update_post_meta($post_id, '_jobs_completed', sanitize_text_field($_POST['jobs_completed']));
        }
        if (isset($_POST['specialties'])) {
            update_post_meta($post_id, '_specialties', sanitize_textarea_field($_POST['specialties']));
        }
    }
    
    if (isset($_POST['post_type']) && 'testimonials' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
        
        if (isset($_POST['client_name'])) {
            update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));
        }
        if (isset($_POST['client_location'])) {
            update_post_meta($post_id, '_client_location', sanitize_text_field($_POST['client_location']));
        }
        if (isset($_POST['testimonial_rating'])) {
            update_post_meta($post_id, '_testimonial_rating', sanitize_text_field($_POST['testimonial_rating']));
        }
    }
}
add_action('save_post', 'serviceconnect_save_meta_box_data');