<?php


//グローバル変数定義　石川・金沢

$place = "石川";
$city = "金沢";

//画像サイズ
if ( function_exists( 'add_image_size' ) ) {
  //add_image_size( 'custom_size',134,134, true );
}
//アイキャッチ画像
add_theme_support('post-thumbnails');

// ACFオプション
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' 	=> 'options',
    'menu_title'	=> '共通設定',
    'menu_slug' 	=> 'options',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));
}

//検索結果を投稿記事のみに
function SearchFilter($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', 'news' );
  }
}
add_action( 'pre_get_posts','SearchFilter' );

// カスタム投稿
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'news',
     array(
       'labels' => array(
		   'name' => __( 'ニュース' ),
		   'singular_name' => __( 'ニュース' )
       ),
       'public' => true,
       'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
       'menu_position' => 115,
       'capability_type' => page,
       'hierarchical' => true,
       'has_archive' => true
     )
    );
}
{
  register_taxonomy(
    'newscat',
    'news',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'ニュースのカテゴリ',
		'singular_label' => 'ニュースのカテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );
}
{
register_post_type( 'works', /* post-type */
   array(
     'labels' => array(
       'name' => __( 'WOKRS' ),
       'singular_name' => __( '実績案件' )
     ),
     'public' => true,
     'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
     'menu_position' => 110,
     'capability_type' => page,
     'hierarchical' => true,
     'has_archive' => true
   )
  );
}
{
  register_taxonomy(
    'workscat',
    'works',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'WOKRSのカテゴリ',
      'singular_label' => 'WOKRSのカテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );
}


//pre_get_posts
function custom_pre_get_posts( $query ) {
  if( is_admin() || ! $query->is_main_query() ){
    return;
  }
  /*if ( $query->is_page( 'artwork-number' ) ) {
    $query->set( 'post_type', 'artwork' );
    $query->set( 'posts_per_page', '10' );
    return;
  }*/
}
add_action( 'pre_get_posts', 'custom_pre_get_posts' );

//pager
	function  pageNavigation () {
	global $wp_rewrite;
	global $wp_query;
	global $paged;
	$paginate_base = get_pagenum_link(1);
	if (strpos($paginate_base, '?') || !$wp_rewrite -> using_permalinks()) {
		$paginate_format = '';
		$paginate_base = add_query_arg ('page', '%#%');
	} else {
		$paginate_format = (substr($paginate_base, - 1, 1) == '/' ? '' : '/') .
			untrailingslashit('?page=%#%', 'paged' );
		$paginate_base .=  '%_%';
	}
	$result = paginate_links (array (
		'base'     => $paginate_base,
		'format'   => $paginate_format,
		'total'    => $wp_query -> max_num_pages,
		'mid_size' => 4,
		'current'  => ($paged ? $paged : 1),
		'prev_text' => '« 前へ',
		'next_text' => '次へ »',
	));
	return $result;
}


