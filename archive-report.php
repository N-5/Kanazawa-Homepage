<?php get_header(); ?>
	<div id="report_archive">
		<div class="report_archive_inr">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="report_archive_post">
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
								<?php if(is_object_in_term( $post->ID, 'reportcat')): ?>
								<i><?php $terms = get_the_terms($post->ID, 'reportscat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></i><?php endif ; ?>
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
								<time>
									<?php the_time('Y.m.d'); ?>
								</time>
							</div>
						</div>
					</a>
				</section>
				<?php endwhile; endif; ?>

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
					'mid_size' => 3,
					'current' => ($paged ? $paged : 1),
					'prev_text' => '« 前へ',
					'next_text' => '次へ »',
				)); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>