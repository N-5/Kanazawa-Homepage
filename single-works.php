<?php get_header(); ?>
<?php include_once("nav.php"); ?>
<section class="m_ttlArea_1">
  <div id="breadcrumb">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
      <li>&gt;</li>
      <li><a href="<?php echo home_url(); ?>/works">制作案件一覧</a></li>
      <li>&gt;</li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>
  <h1>WORKS<span>制作案件</span></h1>
</section>
 
<div id="news_single">
    <div class="news_single_inr">
        <?php
        $terms = get_terms( 'workscat', array(
            'field' => 'slug',
            'terms' => 'domestic'
        ) );
        ?>
        <section class="post_area">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div class="post_area_ttl">
            <h2><?php the_title(); ?><time><span><?php the_time('Y.m.d'); ?></span></time></h2>
            <ul class="category">
              <?php 
              $custom_post_tag = 'workscat';
              $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
              if(!empty($custom_post_tag_terms)){
                if(!is_wp_error( $custom_post_tag_terms )){
                  foreach($custom_post_tag_terms as $term){
                    $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                    $tag_term_name = $term->name;
                    echo '<li><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                  }
                }
              }
              ?>
            </ul>
            <?php include("sns.php"); ?>
          </div>
          <div class="post_area_box"><?php the_content(); ?></div>

          <?php include("sns.php"); ?>
          <?php endwhile; ?>
        </section>
        <?php get_sidebar(); ?>

      <div class="page_nav cf">  
        <?php
        $prevpost = get_adjacent_post(false, '', true); //前の記事
        $nextpost = get_adjacent_post(false, '', false); //次の記事
        if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
        ?>
        <?php
          if ( $prevpost ) { //前の記事が存在しているとき
            echo '<div class="prev"> <a href="' .get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" >
<div id="prev_title"></div>' .get_the_post_thumbnail($prevpost->ID, array(0,0)) . '<p>' . get_the_title($prevpost->ID) . '</p></a></div>';
          } else { //前の記事が存在しないとき
            echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
</div></a></div>';
          }
          if ( $nextpost ) { //次の記事が存在しているとき
            echo '<div class="next"><a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" >  
<div id="next_title"></div>' .get_the_post_thumbnail($nextpost->ID, array(0,0)) . '<p>' . get_the_title($nextpost->ID) . '</p></a></div>';
          } else { //次の記事が存在しないとき
            echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i></div></a></div>';
          }
        ?>
        <?php } ?>
      </div>

        <section class="view_btn"><a class="arrow" href="<?php echo home_url(); ?>">TOPへもどる</a></section>
    </div>
</div>
<?php get_footer(); ?>