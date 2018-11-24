<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section dark bottom-edge-flush" data-negative-bottom-offset="6">
	<div class="header">
		<h1>Facebook Friends Browser</h1>
		<h2 style="margin-top: 11px;">Connect with your closest friends.</h2>
	</div>

	<button id="info-button" class="expand">
		<div class="info-button-content expand">More Info</div>
		<div class="info-button-content collapse"><div class="x-button"><img src="<?php echo $path; ?>resources/images/x.png" style="width: 36px"></div></div>
	</button>

	<div class="expanded-content" data-expanded="0">			
		<div class="description">
			<div class="text">
			<div class="text-block">
				<span class="title">Problem</span>
				<p>News Feed uses an algorithm to determine which posts you see.</p><p>This means that you might miss a casual moment from a close friend's daily routine or feel that you see too many updates from an old acquaintance.</p><p>When sharing content, you might not feel comfortable posting frequently because you don't want to overwhelm your friends' News Feeds. You might also not want to post something that you don't feel is high-quality enough to share with all your friends.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>In this space, you only see content from friends you choose. Each friend has their own feed where you can check what they've posted recently. By flipping the model of consumption from passively scrolling through News Feed to actively choosing friends, this space makes sure you can keep up to date with the friends you care about most.</p><p>We also experimented with ways to share that were designed to make it more socially acceptable to post more often, help you feel comfortable posting small moments, and make it faster and more fun to share parts of your day.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>We had been asked by product leadership to think about this problem and I worked with a product manager and two engineers in London to come up with a solution.</p><p>We eventually grew to a full product team of engineers, researchers, content strategists, data analysts and marketers.</p><p>As the only designer, I helped lead product strategy, conducted research and usability sessions, designed the user interface, worked with engineers, and presented to leadership. We explored dozens of variants and directions from mid-2015 to the summer of 2016.</p></div>
			</div>
		</div>
	
		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0" style="margin-right: 50px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/overview.jpg" style="width: 149px; height: 106px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1" style="margin-right: 50px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/alt-friends-screen.jpg" style="width: 149px; height: 95px;">
					</div>
				</div>
				<label>Alternate Friends Screen</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_2" style="margin-right: 40px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/composer-experiments.jpg" style="width: 149px; height: 95px;">
					</div>
				</div>
				<label>Composer Experiments</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_3" style="margin-right: 10px; width: 110px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/friend-view-transitions.jpg" style="width: 46px; height: 95px;">
					</div>
				</div>
				<label>Friend Browsing</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 870px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div class="caption arbitrary-position" style="margin-left: 13px; margin-top: 140px; width: 350px; text-align: right;">When a close friend shares an update,<br>this icon will let you know.</div>
				<div class="caption arbitrary-position" style="margin-left: 419px; width: 350px; text-align: center;">You pick the friends<br>you want to see posts from.</div>
				<div class="caption arbitrary-position" style="margin-left: 826px; margin-top: 140px; width: 350px; text-align: left;">Swipe through friends<br>to browse posts.</div>
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1188px; height: 818px; margin-top: 53px;">
					<div class="placeholder" style="margin: -821px auto 0 auto; text-align: center; width: 1207px; height: 818px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 387px; height: 747px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 387px; height: 747px; margin-left: 18px; vertical-align: 140px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 387px; height: 747px; margin-left: 19px;">
					</div>
				</div>
			</div>
		</div>
		<div class="slide" id="slide_1">
			<div class="slide-contents bottom-padding" style="padding-top: 10px;">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/alt-friends-screen.jpg" style="width: 1114px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Different ideas for how to show your top friends.</div>
			</div>
		</div>
		<div class="slide" id="slide_2">
			<div class="slide-contents bottom-padding" style="padding-top: 10px;">
				<video width="293" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 796px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/composer-experiments-video.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/composer-experiments.jpg" style="width: 1114px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Experiments in how to make it easy and fun to share visual content.</div>
			</div>
		</div>
		<div class="slide" id="slide_3">
			<div class="slide-contents bottom-padding" style="padding-top: 10px;">
				<video width="293" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 24px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/friend-view-interactions.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/common/blank-iphone-white.png" style="width: 341px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Interactions for viewing content from friends.</div>
			</div>
		</div>
	</div>
</div>
