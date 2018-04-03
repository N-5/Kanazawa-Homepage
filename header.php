<?php ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 iegroup" lang="ja"> <![endif]-->
<!--[if IE 7]><html class="ie7 iegroup" lang="ja"> <![endif]-->
<!--[if IE 8]><html class="ie8 iegroup" lang="ja"> <![endif]-->
<!--[if IE 9]><html class="ie9 iegroup" lang="ja"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
  <!--<![endif]-->
  <head>
    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
    <link rel=”canonical” href="https://kanazawa-website.com/">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- /meta -->

    <!-- icon -->
    <link rel="icon" type="image/png" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
    <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
    <!-- /icon -->
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <!-- /icon -->
    
    <?php if(is_home() && is_front_page()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/document-min.css">
    <?php endif; ?>
    <!-- wp_head -->
    <?php wp_head(); ?>
    <!-- /wp_head -->

    <!-- ie -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/html5.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/selectivizr-min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/respond.js"></script>
    <![endif]-->
  </head>
  <!-- heatmap-->
  <script type="text/javascript">
    window._pt_lt = new Date().getTime();
    window._pt_sp_2 = [];
    _pt_sp_2.push('setAccount,19ff0a76');
    var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    (function() {
      var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
      atag.src = _protocol + 'js.ptengine.jp/pta.js';
      var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true;
      stag.src = _protocol + 'js.ptengine.jp/pts.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(atag, s); s.parentNode.insertBefore(stag, s);
    })();
  </script>
  <!-- /heatmap-->  
<body <?php body_class(); ?>>    
  <!-- noscript -->
  <noscript><div class="noscript">サイトを快適に利用するためには、JavaScriptを有効にしてください。</div></noscript>
  <!-- /noscript -->
  <!-- #main -->
  <div id="main" class="contents">
    <div id="sp_nav">
      <ul>
        <li><a href="https://kanazawa-website.com/#contact"><img src="<?php echo get_template_directory_uri(); ?>/images/sp_nav_contact_01.png" alt="お問い合わせ"></a></li>
      </ul>
      <div class="overlay"></div>
    </div>
    <header>
     <div class="header_inr">
        <h1><a href="<?php echo home_url(); ?>">KANAZAWA HOMEPAGE.com</a></h1>
        <div id="searchbtn">
          <a data-target="con1" class="modal-open">
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 16 15.3" style="enable-background:new 0 0 16 15.3;" xml:space="preserve"><g><g><rect y="-14.3" class="st0" width="16" height="44"/></g><g><circle class="st0" cx="6.5" cy="6.2" r="4.9"/><path class="st1" d="M15.4,14.3l-4.2-4.2c0.9-1.1,1.4-2.4,1.4-3.9c0-3.3-2.7-6.1-6.1-6.1S0.4,2.9,0.4,6.2s2.7,6.1,6.1,6.1 c1.5,0,2.8-0.5,3.9-1.4l4.2,4.2L15.4,14.3z M6.5,11.2c-2.7,0-4.9-2.2-4.9-4.9s2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9S9.2,11.2,6.5,11.2z"/></g></g>
         </svg>
         </a>
        </div>
        <div id="con1" class="modal-content">
          <h3>記事を検索</h3>
          <div class="search"><?php get_search_form(); ?></div>
          <p><a class="modal-close">閉じる<span></span></a></p>
        </div>
        <div id="menu_btn">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </header>