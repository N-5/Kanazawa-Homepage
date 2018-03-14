<?php get_header(); ?>
<section id="menu_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn.png" class="on"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn_close.png" class="off"></section>
<?php include_once("nav.php"); ?>
<section id="news_archive">
  <div class="news_archive_inr">
    <div class="post_list">
      <h1>SEARCH<span>検索結果一覧</span></h1>
      <h2><span><?php the_search_query(); ?></span>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h2>
      <!-- 投稿情報 loop -->
      <ul class="col3">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
        <a href="<?php the_permalink(); ?>">
          <figure>
            <?php if (has_post_thumbnail()) : ?>
            <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
            <?php endif ; ?>
          </figure>
          <div class="textbox">
            <div class="info">
              <h4><?php the_title(); ?></h4>
              <time>
                <?php the_time('Y.m.d'); ?>
              </time>
            </div>
          </div>
        </a>
      </li>
      <?php endwhile; ?>
      </ul>
      <?php else: ?>
      <div class="post">
        <p>申し訳ございません。<br />該当する記事がございませんでしたが、こんな記事もおすすめです。</p>
      </div>
      <section class="relation">
        <?php
        global $post;
        $args = array(
          'numberposts' => 6,
          'post_type' => 'news', //カスタム投稿タイプ名
          'taxonomy' => 'newscat', //タクソノミー名 ←ここが追加
          'orderby' => 'rand', //ランダム表示
          'post__not_in' => array($post->ID) //表示中の記事を除外
        );
        ?>
        <ul class="col3">
          <?php $myPosts = get_posts($args); if($myPosts) : ?>
          <?php foreach($myPosts as $post) : setup_postdata($post); ?>
          <li><a href="<?php the_permalink(); ?>">
            <figure>
              <?php if (has_post_thumbnail()) : ?>
              <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
              <?php endif ; ?>
            </figure>
            <p><?php the_title(); ?></p></a></li>
          <?php endforeach; ?>
        </ul>
        <?php else : ?>
        <p>関連アイテムはまだありません。</p>
        <?php endif; wp_reset_postdata(); ?>
        <!--ここまで-->
      </section>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    <section class="view_btn"><a class="arrow" href="<?php echo home_url(); ?>/news/">NEWS一覧へ戻る</a></section>
    <!-- pager -->
    <div class="pagination">
      <?php global $wp_rewrite;
      $paginate_base = get_pagenum_link(1);
      if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
      }
      else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
          user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
      }
      echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 4,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '«',
        'next_text' => '»',
      )); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>