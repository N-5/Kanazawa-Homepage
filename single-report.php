<?php get_header(); ?>
<div id="report_single">
	<div class="report_single_inr">
			<section class="post_area">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<h4><?php the_title(); ?></h4>
					
					<?php $image = get_field('repot_img_1'); if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
					
					<?php $image = get_field('repot_img_2'); if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				
					<?php if(get_field('report_time')): ?>
						<p>レポート日：<?php the_field('report_time'); ?></p>
					<?php endif; ?>

					<?php if(get_field('report_mans')): ?>
						<p>新郎：<?php the_field('report_mans'); ?></p>
					<?php endif; ?>
					<?php if(get_field('report_mans')): ?>
						<p>新婦：<?php the_field('report_womans'); ?></p>
					<?php endif; ?>

					<?php if(get_field('report_message')): ?>
						<p>レポートメッセージ：<?php the_field('report_message'); ?></p>
					<?php endif; ?>
					
					<?php if(get_field('report_comment')): ?>
						<p>担当コメント：<?php the_field('report_comment'); ?></p>
					<?php endif; ?>
				<?php if(get_field('report_staff')): ?>
				<p>担当名：<?php the_field('report_staff'); ?></p>
				<?php endif; ?>
					
				<?php endwhile; ?>
			</section>
			<section class="page_nav cf">
				<?php if (get_previous_post()):?>
				<div class="prev"><?php previous_post_link('%link','Prev.<span>%title</span>'); ?></div>
				<?php endif; ?>
				<?php if (get_next_post()):?>
				<div class="next"><?php next_post_link('%link','Next.<span>%title</span>'); ?></div>
				<?php endif; ?>
			</section>
		<section class="staff_btn"><a href="<?php echo home_url(); ?>/report/">REPORT 一覧に戻る</a></section>
		</div>
	</div>
<?php get_footer(); ?>