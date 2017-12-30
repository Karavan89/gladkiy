<?php

function gladkiy_enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'libs_style', get_template_directory_uri() .'/css/libs.min.css');
    wp_enqueue_style( 'hamburger_style', get_template_directory_uri() .'/css/hamburgers-master/dist/hamburgers.css');
}
function gladkiy_enqueue_script() {
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), null, true);
    wp_enqueue_script( 'libs.js', get_template_directory_uri() . '/js/libs.min.js', array(), null, true );
    wp_enqueue_script( 'scrypt_cdn.js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
}
add_action( 'wp_enqueue_scripts', 'gladkiy_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'gladkiy_enqueue_script' );

add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'primary', 'TopMenu' );
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}


//Logo
function chobd_custom_logo_setup()
{
    $defaults = array(
        'height'      => 145,
        'width'       => 205,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults);
}
add_action( 'init', 'chobd_custom_logo_setup' );


// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4)

{

    $showitems = ($range * 2) + 1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')

    {

        global $wp_query;

        $pages = $wp_query->max_num_pages;

        if(!$pages)

        {

            $pages = 1;

        }
    }

    if(1 != $pages)

    {

        echo '<div class="text-center">';
        echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Страница '.$paged.' с '.$pages.'</span></span></li>';

        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> Начало</span></a></li>";

        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Предыдущая</span></a></li>";


        for ($i=1; $i <= $pages; $i++)

        {

            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

            {

                echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>
 
    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";

            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Следующая </span>&rsaquo;</a></li>";

        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Конец </span>&raquo;</a></li>";

        echo "</ul></nav>";
        echo "</div>";
    }
}

add_action('wp_head', 'mbe_wp_head');
function mbe_wp_head(){
    echo '<style>'
        .PHP_EOL
        .'body{ padding-top: 47px !important; }'
        .PHP_EOL
        .'body.body-logged-in .navbar-fixed-top{ top: 46px !important; }'
        .PHP_EOL
        .'body.logged-in .navbar-fixed-top{ top: 46px !important; }'
        .PHP_EOL
        .'@media only screen and (min-width: 783px) {'
        .PHP_EOL
        .'body{ padding-top: 47px !important; }'
        .PHP_EOL
        .'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'
        .PHP_EOL
        .'body.logged-in .navbar-fixed-top{ top: 28px !important; }'
        .PHP_EOL
        .'}</style>'
        .PHP_EOL;
}


// top post
function setPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count     = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    } else {
        $count ++;
        update_post_meta( $postID, $count_key, $count );
    }
}

function getPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count     = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );

        return "0";
    }

    return $count;
}

?>