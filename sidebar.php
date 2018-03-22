<!-- sidebar -->
<section id="sidebar">
  <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
  <h3>検索</h3>
  <ul>
    <div class="search"><?php get_search_form(); ?></div>
  </ul>
  <h3>カテゴリー 一覧</h3>
  <ul>
    <?php
    $taglist = wp_list_categories(array(
        'title_li' =>'',
        'show_count' => 1,
        'taxonomy' => 'newscat',
        'echo' => 0
    ));
    $taglist = preg_replace('/<\/a> (\([0-9]*\))/', ' <div class="count"><span>$1</span></div></a>', $taglist);
    $taglist = str_replace(array('(',')'), '', $taglist);
    echo $taglist;
    ?>
  </ul>
  <h3>特集</h3>
  <ul>
    <li><a href="https://kanazawa-website.com/news/dw/"><img src="<?php echo get_template_directory_uri(); ?>/images/top_seo_banner_sp.png" alt=""></a>
    </li>
  </ul>
</section>
<!-- /sidebar -->