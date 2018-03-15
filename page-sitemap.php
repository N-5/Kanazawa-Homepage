  <?php get_header(); ?>
  <section id="menu_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn.png" class="on"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn_close.png" class="off"></section>
  <?php include_once("nav.php"); ?>
  <!-- main -->
  <main id="sitemap" class="content">
    <section>
        <div class="ttl"><h3>SITEMAP<span>サイトマップ</span></h3></div>
    </section>
    <section class="sitemapList">
      <div class="sitemapList_inr">
        <ul>
          <li><a href="<?php echo home_url(); ?>">トップ</a>
            <ul>
              <li><a href="<?php echo home_url(); ?>#lead"><?php echo $city; ?>ホームページ制作.COMとは</a></li>
              <li><a href="<?php echo home_url(); ?>#concept">選ばれる３つの理由</a></li>
              <li><a href="<?php echo home_url(); ?>#reason">私たちの強み</a></li>
              <li><a href="<?php echo home_url(); ?>#contents">選べるコンテンツ</a></li>
              <li><a href="<?php echo home_url(); ?>#price">料金のご案内</a></li>
              <li><a href="<?php echo home_url(); ?>#flow/">公開までの流れ</a></li>
              <li><a href="<?php echo home_url(); ?>#faq">よくあるご質問</a></li>
              <li><a href="<?php echo home_url(); ?>#contact">お問い合わせ</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url(); ?>/news/">ニュース</a>
              <ul>
                <?php
                $loop = new WP_Query (array(
                    'post_type'			=> 'news',
                    'order'				=> 'DESC',
                    'posts_per_page'	=> 16,
                ));
                while ($loop -> have_posts()) : $loop -> the_post();
                ?>
                <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                </li>
                <?php endwhile; ?>
              </ul>
            </li>
          <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
          <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>  
        </ul>
        <ul>
          <h4>関連リンク</h4>
          <li><a href="http://toyama-venture.com/" target="_parent">北陸ベンチャーハック</a></li>
          <li><a href="http://is-consulting.jp/" target="_parent">I’s Consulting,Inc</a></li>
        </ul>
      </div>
    </section>
  </main>
<!-- /main -->
<?php get_footer(); ?>