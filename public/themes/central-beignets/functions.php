<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// Register theme defaults.
add_action('after_setup_theme', function () {
  show_admin_bar(false);

  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  register_nav_menus([
    'main-menu' => 'Menu Principal',
    'quick-links-menu' => 'Liens utiles',
  ]);
});



// Register scripts and styles.
function sq_insert_css_in_head()
{

  wp_enqueue_style('bootstrap', get_theme_file_uri() . '/css/bootstrap.min.css', '', false, false);
  wp_enqueue_style('swiper', get_theme_file_uri() . '/css/swiper-bundle.min.css', '', false, false);
  wp_enqueue_style('fancybox', get_theme_file_uri() . '/css/fancybox.css', '', false, false);

  $manifestPath = get_theme_file_path('assets/.vite/manifest.json');


  if (
    wp_get_environment_type() === 'local' &&
    is_array(wp_remote_get('http://localhost:5174/')) // is Vite.js running
  ) {
    wp_enqueue_script('vite', 'http://localhost:5174/@vite/client', [], null);
  } elseif (file_exists($manifestPath)) {
    $manifest = json_decode(file_get_contents($manifestPath), true);

    wp_enqueue_style('central-beignets/', get_theme_file_uri('assets/' . $manifest['resources/js/index.js']['css'][0]));
  }
}

add_action('wp_enqueue_scripts', 'sq_insert_css_in_head');

function sq_insert_js_in_footer()
{

  wp_enqueue_script('sq-jquery', get_theme_file_uri() . '/js/jquery.min.js', '', false, false);
  wp_enqueue_script('bootstrap-js', get_theme_file_uri() . '/js/bootstrap.min.js', '', false, false);
  wp_enqueue_script('swiper-js', get_theme_file_uri() . '/js/swiper-bundle.min.js', '', false, false);
  wp_enqueue_script('fancybox', get_theme_file_uri() . '/js/fancybox.umd.js', '', false, false);

  $manifestPath = get_theme_file_path('assets/.vite/manifest.json');

  if (
    wp_get_environment_type() === 'local' &&
    is_array(wp_remote_get('http://localhost:5174/')) // is Vite.js running
  ) {
    wp_enqueue_script('central-beignets/', 'http://localhost:5174/resources/js/index.js');
  } elseif (file_exists($manifestPath)) {
    $manifest = json_decode(file_get_contents($manifestPath), true);
    wp_enqueue_script('central-beignets/', get_theme_file_uri('assets/' . $manifest['resources/js/index.js']['file']));
  }
}

add_action('wp_footer', 'sq_insert_js_in_footer', 10);


// Load scripts as modules.
add_filter('script_loader_tag', function (string $tag, string $handle, string $src) {
  if (in_array($handle, ['vite', 'central-beignets/'])) {
    return '<script type="module" src="' . esc_url($src) . '" defer></script>';
  }

  return $tag;
}, 10, 3);

// Remove admin menu items.
add_action('admin_init', function () {
  remove_menu_page('edit-comments.php'); // Comments
  // remove_menu_page('edit.php?post_type=page'); // Pages
  // remove_menu_page('edit.php'); // Posts
  // remove_menu_page('index.php'); // Dashboard
  // remove_menu_page('upload.php'); // Media
});

// Remove admin toolbar menu items.
add_action('admin_bar_menu', function (WP_Admin_Bar $menu) {
  // $menu->remove_node('archive'); // Archive
  // $menu->remove_node('comments'); // Comments
  // $menu->remove_node('customize'); // Customize
  // $menu->remove_node('dashboard'); // Dashboard
  // $menu->remove_node('edit'); // Edit
  // $menu->remove_node('menus'); // Menus
  // $menu->remove_node('new-content'); // New Content
  // $menu->remove_node('search'); // Search
  // $menu->remove_node('site-name'); // Site Name
  // $menu->remove_node('themes'); // Themes
  // $menu->remove_node('updates'); // Updates
  // $menu->remove_node('view-site'); // Visit Site
  // $menu->remove_node('view'); // View
  // $menu->remove_node('widgets'); // Widgets
  $menu->remove_node('wp-logo'); // WordPress Logo
}, 999);

// Remove admin dashboard widgets.
add_action('wp_dashboard_setup', function () {
  remove_meta_box('dashboard_activity', 'dashboard', 'normal'); // Activity
  // remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // At a Glance
  // remove_meta_box('dashboard_site_health', 'dashboard', 'normal'); // Site Health Status
  remove_meta_box('dashboard_primary', 'dashboard', 'side'); // WordPress Events and News
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); // Quick Draft
});

// Add custom login form logo.
add_action('login_head', function () {
  $url = get_theme_file_uri('favicon.svg');

  $styles = [
    sprintf('background-image: url(%s)', $url),
    'width: 200px',
    'background-position: center',
    'background-size: contain',
  ];

  printf(
    '<style> .login h1 a { %s } </style>',
    implode(';', $styles),
  );
});

// Register custom SMTP credentials.
// add_action('phpmailer_init', function (PHPMailer $mailer) {
//     $mailer->isSMTP();
//     $mailer->SMTPAutoTLS = false;
//     $mailer->SMTPAuth = env('MAIL_USERNAME') && env('MAIL_PASSWORD');
//     $mailer->SMTPDebug = env('WP_DEBUG') ? SMTP::DEBUG_SERVER : SMTP::DEBUG_OFF;
//     $mailer->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
//     $mailer->Debugoutput = 'error_log';
//     $mailer->Host = env('MAIL_HOST');
//     $mailer->Port = env('MAIL_PORT', 587);
//     $mailer->Username = env('MAIL_USERNAME');
//     $mailer->Password = env('MAIL_PASSWORD');
//     return $mailer;
// });

// add_filter('wp_mail_from', fn() => env('MAIL_FROM_ADDRESS', 'hello@example.com'));
// add_filter('wp_mail_from_name', fn() => env('MAIL_FROM_NAME', 'Example'));

// Update permalink structure.
add_action('after_setup_theme', function () {
  if (get_option('permalink_structure') !== '/%postname%/') {
    update_option('permalink_structure', '/%postname%/');
    flush_rewrite_rules();
  }
});



// WOOCOMMERCE

// On active Woocommerce
add_theme_support('woocommerce');

// On retire le breadcrumb de Woocommerce
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);


// On retire la sidebar de Woocommerce
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
