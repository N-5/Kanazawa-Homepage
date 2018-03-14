<?php get_header(); ?>
  <section id="menu_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn.png" class="on"><img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn_close.png" class="off"></section>
  <?php include_once("nav.php"); ?>
	<div id="news_single">
		<div class="news_single_inr">
			<?php
			$terms = get_terms( 'newscat', array(
				'taxonomy' => 'area',
				'field' => 'slug',
				'terms' => 'domestic'
			) );
			?>
			<section class="post_area">
              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <div id="breadcrumb">
                <ul>
                  <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
                  <li>&gt;</li>
                  <li><a href="<?php echo home_url(); ?>/news">NEWS一覧</a></li>
                  <li>&gt;</li>
                  <li><?php the_title(); ?></li>
                </ul>
              </div>
              <h1>NEWS<span>ニュース</span></h1>
              <div class="post_area_ttl">
                <h2><?php the_title(); ?><time><span><?php the_time('Y.m.d'); ?></span></time></h2>
                <ul class="category">
                  <?php 
                  $custom_post_tag = 'newscat';
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
              <div class="banner">
                <figure><a href="https://kanazawa-website.com/#contact"><img src="<?php echo get_template_directory_uri(); ?>/images/newssigle_banner.png" alt="簡単お手軽なホームページ制作はこちら"></a></figure>
                <p>ホームページ制作でお悩みですか？！格安に、制作もSEO対策もまるっとおまかせ！？</p>
              </div>
              <?php include("sns.php"); ?>
		      <?php endwhile; ?>
			</section>
			<?php get_sidebar(); ?>
			<section class="relation">
			<h3>この記事を読んだ方はこちらも読んでます</h3>
				<?php
				global $post;
				$args = array(
					'numberposts' => 4,
					'post_type' => 'news',
					'taxonomy' => 'newscat',
					'orderby' => 'rand',
					'post__not_in' => array($post->ID)
				);
				?>
				<ul class="col4">
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
<!--
			<section class="page_nav cf">
				<?php if (get_previous_post()):?>
				<div class="prev">
                  <figure>
                    <?php if (has_post_thumbnail()) : ?>
                    <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
                    <?php endif ; ?>
                  </figure>
                  <?php previous_post_link('%link','<span>%title</span>'); ?>
                  </div>
				<?php endif; ?>
				<?php if (get_next_post()):?>
				<div class="next">
                  <figure>
                    <?php if (has_post_thumbnail()) : ?>
                    <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
                    <?php endif ; ?>
                  </figure>
                  <?php next_post_link('%link','<span>%title</span>'); ?></div>
				<?php endif; ?>
			</section>
-->
			<section class="view_btn"><a class="arrow" href="<?php echo home_url(); ?>/news/">一覧に戻る</a></section>
		</div>
	</div>
<?php get_footer(); ?>