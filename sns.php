<?php
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title()).'｜'.get_bloginfo('name');
?>
<div class="share">
	<ul>
		<!--Facebookボタン-->
		<li class="facebook">
			<a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
				<i class="fa fa-facebook">
					<svg id="facebookIcon" viewBox="0 0 104 200" width="100%" height="100%">
						<path d="M67,200v-91h31.6l4.6-36H67V50.7c0-10.3,3.2-17.3,17.9-17.3l19.1,0V1.6
								 C101,1.2,89.6,0,76.6,0C49.5,0,31,16.8,31,47.1V73H0v36h31v91H67z"></path>
					</svg>
				</i>
				<?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?>
			</a>
		</li>
		<!--ツイートボタン-->
		<li class="tweet">
			<a href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
				<i class="fa fa-twitter">
					<svg id="twitterIcon" viewBox="0 0 246.1 200" width="100%" height="100%">
						<path d="M246.1,23.7c-9.1,4-18.8,6.7-29,8c10.4-6.2,18.4-16.1,22.2-27.9c-9.8,5.8-20.6,10-32.1,12.3
								 C198,6.1,184.9,0,170.4,0c-27.9,0-50.5,22.6-50.5,50.5c0,4,0.4,7.8,1.3,11.5C79.2,59.9,42,39.8,17.1,9.2c-4.3,7.5-6.8,16.1-6.8,25.4
								 c0,17.5,8.9,33,22.5,42c-8.3-0.3-16.1-2.5-22.9-6.3c0,0.2,0,0.4,0,0.6c0,24.5,17.4,44.9,40.5,49.5c-4.2,1.2-8.7,1.8-13.3,1.8
								 c-3.3,0-6.4-0.3-9.5-0.9c6.4,20.1,25.1,34.7,47.2,35.1C57.5,169.9,35.7,178,12,178c-4.1,0-8.1-0.2-12-0.7
								 C22.3,191.6,48.9,200,77.4,200c92.9,0,143.7-76.9,143.7-143.7c0-2.2,0-4.4-0.1-6.5C230.8,42.7,239.3,33.8,246.1,23.7z"></path>
					</svg>
				</i>
				<?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?>
			</a>
		</li>
		<!--Google+ボタン-->
		<li class="googleplus">
			<a href="//plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;">
				<i class="fa fa-google-plus">
					<svg id="googleplusIcon" viewBox="0 0 314.3 200" width="100%" height="100%">
						<path d="M100,85.7V120h56.7c-2.3,14.7-17.1,43.1-56.7,43.1c-34.1,0-62-28.3-62-63.1c0-34.9,27.9-63.1,62-63.1
								 c19.4,0,32.4,8.3,39.9,15.4L167,26.1C149.6,9.9,127,0,100,0C44.7,0,0,44.7,0,100c0,55.3,44.7,100,100,100c57.7,0,96-40.6,96-97.7
								 c0-6.6-0.7-11.6-1.6-16.6H100L100,85.7L100,85.7z M100,85.7"></path>
						<polygon points="314.3,85.7 285.7,85.7 285.7,57.1 257.1,57.1 257.1,85.7 228.6,85.7 228.6,114.3 257.1,114.3
										 257.1,142.9 285.7,142.9 285.7,114.3 314.3,114.3"></polygon>
					</svg>
				</i>
				<?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?>
			</a>
		</li>
		<!--はてなボタン-->
		<li class="hatena">
			<a href="//b.hatena.ne.jp/entry/<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;"><i class="fa fa-hatena">
				<svg id="hatenaIcon" viewBox="0 0 200 169" width="100%" height="100%">
					<rect x="157.7" width="39.4" height="112.7"></rect>
					<path d="M121.2,90.5c-6.7-7.5-16-11.7-27.9-12.6c10.6-2.9,18.3-7.1,23.1-12.7c4.8-5.6,7.2-13.1,7.2-22.6
							 c0-7.5-1.6-14.2-4.8-19.9c-3.3-5.7-8-10.3-14.1-13.7c-5.4-3-11.8-5.1-19.3-6.3C78,1.4,64.8,0.8,45.9,0.8H0v167.5h47.3
							 c19,0,32.7-0.7,41.1-1.9c8.4-1.3,15.4-3.5,21.1-6.6c7-3.7,12.4-9,16.1-15.8c3.8-6.8,5.6-14.7,5.6-23.6
							 C131.3,107.9,127.9,97.9,121.2,90.5z M42.4,37.9h9.8c11.3,0,18.9,1.3,22.9,3.8c3.9,2.6,5.9,7,5.9,13.3c0,6.1-2.1,10.3-6.3,12.8
							 c-4.2,2.5-11.9,3.7-23.1,3.7h-9.1V37.9z M81.3,133.9c-4.5,2.7-12.1,4.1-22.9,4.1h-16v-36.6H59c11.1,0,18.7,1.4,22.8,4.2
							 c4.1,2.8,6.2,7.7,6.2,14.8C88,126.7,85.8,131.2,81.3,133.9z"></path>
					<path d="M177.5,123.9c-12.5,0-22.5,10.1-22.5,22.5c0,12.5,10.1,22.5,22.5,22.5c12.4,0,22.5-10.1,22.5-22.5
							 C200,134,189.9,123.9,177.5,123.9z"></path>
				</svg>
			</i>
				<?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a>
		</li>
	</ul>
</div>