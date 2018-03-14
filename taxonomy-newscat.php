<?php get_header(); ?>
<section id="menu_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn.png" class="on"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn_close.png" class="off"></section>
<?php include_once("nav.php"); ?>
<section id="news_archive">
  <div class="news_archive_inr">
    <div class="post_list">
      <h1>CATEGORY<span>カテゴリー</span></h1>
      <h2><span><?php single_cat_title(); ?></span>カテゴリー記事の一覧です</h2>
      <div class="lead"><?php echo category_description( $category_id ); ?></div>
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
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <?php get_sidebar(); ?>
    <section class="view_btn"><a class="arrow" href="<?php echo home_url(); ?>/news/">一覧に戻る</a></section>
  </div>
</section>
<?php get_footer(); ?>