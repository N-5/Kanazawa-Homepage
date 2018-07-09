
<?php get_header(); ?>
<div id="<?php echo get_page($wp_query->post->ID)->post_name; ?>" class="main">
 <section class="m_ttlArea_1">
 <div id="breadcrumb">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
      <li>&gt;</li>
      <li>NEWSカテゴリー</li>
    </ul>
  </div>
  <h1>CATEGORY<span>カテゴリー</span></h1>
</section>
  <?php get_sidebar(); ?>
  <div id="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="box">
        <p><a href="<?php the_permalink() ?>"><?php $img[0]=get_post_meta($post->ID,'File Upload',true); ?>
        <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'File Upload', true),'custom_size'); ?></a>
        </p>
        <p><?php the_time('Y年m月d日'); ?></p>
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      </div>
      <?php endwhile;　?>	
      <!-- pagenavi -->
      <div class="tablenav"><?php global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
              $paginate_format = '';
              $paginate_base = add_query_arg('paged', '%#%');
          } else {
              $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
                  user_trailingslashit('page/%#%/', 'paged');;
              $paginate_base .= '%_%';
          }
          echo paginate_links( array(
              'base' => $paginate_base,
              'format' => $paginate_format,
              'total' => $wp_query->max_num_pages,
              'mid_size' => 5,
              'current' => ($paged ? $paged : 1),
          )); ?></div>
      <!-- /pagenavi --> 	
  </div><!-- content -->
</div><!-- main -->
<?php get_footer(); ?>