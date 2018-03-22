
<?php get_header(); ?>
  <?php include_once("nav.php"); ?>
  <section class="m_ttlArea_1">
   <div id="breadcrumb">
      <ul>
        <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
        <li>&gt;</li>
        <li><a href="<?php echo home_url(); ?>/news">NEWS一覧</a></li>
      </ul>
    </div>
    <h1>NEWS<span>ニュース一覧</span></h1>
  </section>
  <section id="news_archive">
    <div class="news_archive_inr">
      <div class="post_list">
      <ul class="col3">
        <?php
          $loop = new WP_Query (array(
              'post_type'			=> 'news',
              'order'				=> 'DESC',
              'posts_per_page'	=> 12,
              'paged' => $paged
          ));
          while ($loop -> have_posts()) : $loop -> the_post();
          ?>
        <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php if (has_post_thumbnail()) : ?>
              <?php $title= get_the_title(); the_post_thumbnail('-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
              <?php endif ; ?>
            </figure>
            <div class="textbox">
              <div class="info">
                <?php if(is_object_in_term( $post->ID, 'newscat')): ?>
                <i><?php $terms = get_the_terms($post->ID, 'newscat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></i>　|<?php endif ; ?>
                <h4><?php the_title(); ?></h4>
                <time><?php the_time('Y.m.d'); ?></time>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
        <div class="pagination sp">
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
        <?php get_sidebar(); ?>
        <section class="view_btn"><a class="arrow" href="<?php echo home_url(); ?>">TOPへ戻る</a></section>
        <!-- pager -->
        <div class="pagination pc">
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
            'prev_text' => '<',
            'next_text' => '>',
          )); ?>
        </div>
    </div>
  </section>
<?php get_footer(); ?>