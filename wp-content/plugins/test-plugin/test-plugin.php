<?php
/**
 * Plugin Name: Test Plugin
 */

function getPosts($post_type = 'service') {
    $services = new WP_Query(array(
        'post_type'         => $post_type,
        'posts_per_page'    => esc_attr(get_option('number')),
    ));

    $posts = [];

    if ($services->have_posts()) {
        while ($services->have_posts()) {
            $services->the_post();
            $posts[] = array(
                'id'        => get_the_ID(),
                'title'     => get_the_title(),
                'excerpt'   => get_the_excerpt(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail_url()
            );
        }
    };
    wp_reset_postdata();

    return $posts;
}

function test_plugin_template_tag() {
    $posts = getPosts(); ?>
        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="wp-block-uagb-advanced-heading">
                        <h2 class="uagb-heading-text">Nos services</h2>
                        <div class="uagb-separator-wrap">
                            <div class="uagb-separator"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($posts as $post) { ?>
                    <div class="col-sm-4">
                        <div class="card" id="card-<?php echo $post['id']; ?>" style="">
                            <a href=""> 
                                <img src="<?php echo $post['thumbnail']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>" />    
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                <p class="card-text"><?php echo $post['excerpt']; ?></p>
                                <a href="<?php echo $post['permalink']; ?>" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php
}

add_shortcode('testplugin', 'funcion_test_plugin');

function funcion_test_plugin($atts) {
    $posts = getPosts($atts["post-type"]);
    
    $html = '';
    $html .= '<div class="row">';
    foreach ($posts as $post) {
        $html .= '<div class="col-sm-4">';
        $html .= '<div class="card" id="card-'. $post['id'] .'" style="">';
        $html .= '<a href=""><img src="'.$post['thumbnail'].'" class="card-img-top" alt="'.$post['title'].'" /></a>';
        $html .= '<div class="card-body">';
        $html .= '<h5 class="card-title">'.$post['title'].'</h5>';
        $html .= '<p class="card-text">'.$post['excerpt'].'</p>';
        $html .= '<a href="'.$post['permalink'].'" class="btn btn-primary">En savoir plus</a>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
    }
    $html .= '</div>';
    return $html;
}

/*function test_plugin() {
    echo "Test plugin chargé !";
}
add_action( 'wp_loaded', 'test_plugin' );*/

require_once('test-plugin-admin.php');