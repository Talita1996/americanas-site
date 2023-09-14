<?php

class Faq
{
    public $labels;
    public $args;
    public $custom_post_type;
    public $custom_post_type_rewrite;

    public function __construct($custom_post_type)
    {
        $this->custom_post_type         = $custom_post_type;
        $this->custom_post_type_rewrite = $custom_post_type;

        $this->set_labels();
        $this->set_args();
        $this->register();
    }

    public function set_labels()
    {
        $this->labels = array(
            'name'               => 'Faq',
            'singular_name'      => 'Faq',
            'menu_name'          => 'Faq',
            'parent_item_colon'  => '',
            'all_items'          => 'Todas as perguntas',
            'view_item'          => 'Ver pergunta',
            'add_new_item'       => 'Novo pergunta',
            'add_new'            => 'Novo',
            'edit_item'          => 'Editar',
            'update_item'        => 'Atualizar',
            'search_items'       => 'Buscar pergunta',
            'not_found'          => 'Não encontrado',
            'not_found_in_trash' => 'Nada encontrado na lixeira',
        );
    }

    public function set_args()
    {
        $this->args = array(
            'label'               => 'Faq',
            'description'         => 'Faq',
            'labels'              => $this->labels,
            'supports'            => array('title', 'editor'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => false,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'taxonomies'          => array('category'),
            'capability_type'     => 'post',
            'rewrite'             => array('with_front' => false, 'slug' => $this->custom_post_type_rewrite),
            'menu_icon'           => 'dashicons-book-alt',
        );
    }

    public function register()
    {
        register_post_type($this->custom_post_type, $this->args);
    }
}

class Video_Meta_Box
{

    public $custom_post_type;

    public function __construct($custom_post_type)
    {
        $this->custom_post_type = $custom_post_type;
        if (is_admin()) {
            add_action('load-post.php', array($this, 'init_metabox'));
            add_action('load-post-new.php', array($this, 'init_metabox'));
        }
    }

    public function init_metabox()
    {
        add_action('add_meta_boxes', array($this, 'add_metabox'));
        add_action('save_post', array($this, 'save_metabox'), 10, 2);
        add_action('add_meta_boxes', array($this, 'remove_yoast'), 100);
    }

    public function remove_yoast()
    {
        remove_meta_box('wpseo_meta', 'video', 'normal');
    }

    public function add_metabox()
    {
        add_meta_box(
            'rock-video-meta',
            __("Settings", "rockcontent"),
            array($this, 'render_metabox'),
            $this->custom_post_type,
            'normal',
            'high'
        );
    }

    public function render_metabox($post)
    {
        // Add an nonce field so we can check for it later.
        //wp_nonce_field('rock_inner_custom_box', 'rock_inner_custom_box_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $link = get_post_meta($post->ID, '_rock_video_link', true);
        ?>
        <p>
            <label for="rock_video_link">
                <strong><?php echo __('Video link', "rockcontent"); ?></strong>
            </label>
            <input type="text" id="rock_video_link" name="rock_video_link"
                   value="<?php echo esc_attr($link); ?>" size="55" style="width: 100%"/>
            <em>Ex: https://<?php echo __('my-blog.com/free-ebook',"rockcontent"); ?></em>
        </p>

        <?php
    }

    public function save_metabox($post_id, $post)
    {
        // Check if user has permissions to save data.
        if ( ! current_user_can('edit_post', $post_id)) {
            return;
        }

        // Check if not an autosave.
        if (wp_is_post_autosave($post_id)) {
            return;
        }

        // Check if not a revision.
        if (wp_is_post_revision($post_id)) {
            return;
        }

        // Sanitize the user input.
        $link = sanitize_text_field($_POST['rock_video_link']);

        // Update the meta field.
        update_post_meta($post_id, '_rock_video_link', $link);
    }
}


function rock_videos_query($limit = 12)
{
    $custom_post_type_name = "faq";
    $paged                 = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args                  = array(
        'post_type'      => $custom_post_type_name,
        'posts_per_page' => $limit,
        'order'          => 'DESC',
        'orderby'        => 'date',
        'post_status'    => 'publish',
        'paged'          => $paged
    );

    $query = new WP_Query($args);

    return $query;
}
/*
function rock_videos_link($url, $post, $leavename = false)
{
    if ($post->post_type == 'video') {

        $rock_video_link = esc_url(get_post_meta($post->ID, '_rock_video_link', true));

        if($rock_video_link) {
            $url = $rock_video_link;
        }
    }

    return $url;
}
add_filter('post_type_link', 'rock_videos_link', 10, 3);*/

$custom_post_type_name = "faq";

new Faq($custom_post_type_name);
//new Video_Meta_Box($custom_post_type_name);
