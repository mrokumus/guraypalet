<?php
function gp_setup() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 250, true );
}
add_action( 'after_setup_theme', 'gp_setup' );

/*ACF*/
add_filter( 'acf/settings/path', 'my_acf_settings_path' );
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/inc/acf/';

    return $path;
}
add_filter( 'acf/settings/dir', 'my_acf_settings_dir' );

function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';

    return $dir;

}

//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title' => 'Site Ayarları',
        'menu_title' => 'Site Ayarları',
        'menu_slug'  => 'general-settings',
        'capability' => 'manage_options',
        'redirect'   => false
    ) );

    acf_add_options_page( array(
        'page_title'  => 'Ana Sayfa Ayarları',
        'menu_title'  => 'Ana Sayfa Ayarları',
        'menu_slug'   => 'home-settings',
        'parent_slug' => 'general-settings',
        'capability'  => 'manage_options',
        'redirect'    => false
    ) );
    acf_add_options_page( array(
        'page_title'  => 'Hakkımızda Ayarları',
        'menu_title'  => 'Hakkımızda Ayarları',
        'menu_slug'   => 'about-settings',
        'parent_slug' => 'general-settings',
        'capability'  => 'manage_options',
        'redirect'    => false
    ) );
    acf_add_options_page( array(
        'page_title'  => 'Hizmetlerimiz Ayarları',
        'menu_title'  => 'Hizmerlerimiz Ayarları',
        'menu_slug'   => 'services-settings',
        'parent_slug' => 'general-settings',
        'capability'  => 'manage_options',
        'redirect'    => false
    ) );

    acf_add_options_page( array(
        'page_title'  => 'İletişim Ayarları',
        'menu_title'  => 'İletişim Ayarları',
        'menu_slug'   => 'contact-settings',
        'parent_slug' => 'general-settings',
        'capability'  => 'manage_options',
        'redirect'    => false
    ) );
}

/*LOGIN STYLE*/

function giris_duzenleme() {

    include( 'style-login.php' );

}

add_action( 'login_enqueue_scripts', 'giris_duzenleme' );


/*ADMIN STYLE*/
function admin_duzenleme() {

    include( 'style-admin.php' );

}

add_action( 'admin_head', 'admin_duzenleme' );

/*Giriş Logo Title*/
function giris_logo_title() {

    return get_bloginfo( 'name' ) . ' - Control Panel';
}

/*Giriş Logo Link*/
add_filter( 'login_headertitle', 'giris_logo_title' );

function giris_logo_link() {

    return home_url();


}

add_filter( 'login_headerurl', 'giris_logo_link' );

/*ADMIN PAGE REMOVE*/
function admin_sayfa_ozellestirme() {

//    remove_menu_page('tools.php');
//    remove_menu_page('options-general.php');
//    remove_menu_page('plugins.php');
//    remove_menu_page('themes.php');


}
add_action( 'admin_menu', 'admin_sayfa_ozellestirme', 999 );

/*DISABLE ADMIN BAR*/
function admin_bar_kaldirma() {

    show_admin_bar( false );


}
add_action( 'after_setup_theme', 'admin_bar_kaldirma' );

/*PAGINATION*/
function sayfalama( $pages = '', $range = 2 ) {
    $showitems = ( $range * 2 ) + 1;
    global $paged;
    if ( empty( $paged ) ) {
        $paged = 1;
    }
    if ( $pages == '' ) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if ( ! $pages ) {
            $pages = 1;
        }
    }
    if ( 1 != $pages ) {
        echo "<nav aria-label=\"Page navigation example\">";
        echo "<ul class=\"pagination justify-content-center\">";
        if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
            echo "<li class=\"page-item\"><a class=\"page-link\" href='" . get_pagenum_link( 1 ) . "'>First</a></li>";
        }
        if ( $paged > 1 && $showitems < $pages ) {
            echo " <li class=\"page-item\"><a class=\"page-link\" href='" . get_pagenum_link( $paged - 1 ) . "'>Previous</a></li>";
        }
        for ( $i = 1; $i <= $pages; $i ++ ) {
            if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
                echo ( $paged == $i ) ? "<li class=\"page-item\"><a class=\"page-link\" href=\"#\">" . $i . "</a></li>" : "<li class=\"page-item\"><a class=\"page-link\" href='" . get_pagenum_link( $i ) . "'>" . $i . "</a></li>";
            }
        }
        if ( $paged < $pages && $showitems < $pages ) {
            echo "<li class=\"page-item\"><a class=\"page-link\" href='" . get_pagenum_link( $paged + 1 ) . "'>Next</a></li>";
        }
        if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
            echo "<li class=\"page-item\"><a class=\"page-link\" href='" . get_pagenum_link( $pages ) . "'>Last</a></li>";
        }
        echo "</ul><div class='cleaner'></div></nav>";
    }
}

/*RANDOM IMAGE*/
function random_image() {

    $dir       = "/srv/htdocs/wp-content/themes/grc-legal/head-image";
    $img_dir   = get_template_directory_uri() . "/head-image/";
    $fileNames = array();
    if ( is_dir( $dir ) ) {
        $handle = opendir( $dir );
        while ( false !== ( $file = readdir( $handle ) ) ) {
            if ( is_file( $dir . '/' . $file ) && is_readable( $dir . '/' . $file ) ) {
                $fileNames[] = $file;
            }
        }
        closedir( $handle );
    }
    return $img_dir . $fileNames[ array_rand( $fileNames ) ];
}

/*AUTO BLANK*/
function autoblank($text) {
    $myurl = 'https://guraypalet.com/';
    $external = str_replace('href=', 'target="_blank" href=', $text);
    $external = str_replace('target="_blank" href="'.$myurl, 'href="'.$myurl, $external);
    $external = str_replace('target="_blank" href="#', 'href="#', $external);
    $external = str_replace(' target = "_blank">', '>', $external);
    return $external;
}
add_filter('the_content', 'autoblank');

