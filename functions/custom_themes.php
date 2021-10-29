<?php
if (!is_admin()) {
  function custom_theme_scripts()
  {
    $dir = get_template_directory_uri();

    wp_register_style( 'font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), '', 'all' );

    // CSS読み込み
    wp_register_style('reset', $dir . '/assets/add_css/base/reset.css', array(), '', 'all');
    wp_register_style('base', $dir . '/assets/add_css/base/base.css', array('reset'), '', 'all');
    wp_register_style('contact', $dir . '/assets/add_css/pages/contact.css', array('base'), '', 'all');
    wp_register_style('aboutus', $dir . '/assets/add_css/pages/about.css', array('base'), null, 'all');

    // JS読み込み
    wp_deregister_script( 'jquery' );

    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',array(),"",true);
    wp_register_script('base', $dir . "/assets/add_js/base.js",array('jquery'),"",true);

    // 全ページ共通ファイル

    // CSS
    wp_enqueue_style('font');
    wp_enqueue_style('base');

    // JS
    wp_enqueue_script('base');
    

    // アバウトページ
    if(is_page('about')) :
      wp_enqueue_style('aboutus');
    endif;

    
  }
  add_action('wp_enqueue_scripts', 'custom_theme_scripts');
};
