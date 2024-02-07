<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light white">
	<div class="grey-divider"></div>
	<div class="header">
		<h1>Facebook Stories and Direct</h1>
		<h2>Share your day with friends<br>and send private visual messages.</h2>
	</div>

	<button id="info-button" class="expand">
		<div class="info-button-content expand">More Info</div>
		<div class="info-button-content collapse"><div class="x-button"><img src="<?php echo $path; ?>resources/images/x.png" style="width: 36px" alt="Collapse additional info"></div></div>
	</button>

	<div class="expanded-content" data-expanded="0">		
		<div class="description">
			<div class="text">
			<div class="text-block">
				<span class="title">Problem</span>
				<p>News Feed ranks posts using an algorithm to help you see important updates from friends and family.</p><p>Because you don’t usually have enough time to scroll through everything posted by your friends, you can wind up missing some of the more casual and informal moments of your friends’ lives.</p><p>We also heard from people that they felt their content had to be high quality enough to share with all their friends in News Feed, which had the potential to discourage them from sharing smaller moments.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>With the rise of camera-based sharing shown by Instagram and Snapchat, we built two new spaces for people to view and share visual content from their friends on Facebook.</p><p>In Stories, only friends who check your Story will see your content, making it a space where you can feel more comfortable sharing smaller moments throughout your day. The format is full-screen and visual.</p><p>With Direct, you can send ephemeral photos and videos to friends and have conversations.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>After working on several experimental sharing products in Facebook's London office, I moved back to California in August 2016 to help lead the effort to build Stories and Direct. We launched worldwide in March 2017.</p><p>Working on the team designing the system for sharing visual content on Facebook, I collaborated with engineering, product marketing and research teams to build, test and launch.</p><p>We presented to Mark Zuckerberg and the product leadership team to gain consensus and set direction.</p></div>
			</div>
			<div class="links">
				<a target="_blank" rel="noopener" href="http://www.facebook.com/facebook/videos/10155656407651729/">Launch Video</a><a target="_blank" rel="noopener" href="http://newsroom.fb.com/news/2017/03/more-ways-to-share-with-the-facebook-camera/">Announcement</a><a target="_blank" rel="noopener" href="http://techcrunch.com/2017/03/28/storybook/">Press Coverage</a><a target="_blank" rel="noopener" href="https://labs.noshado.ws/patent/11023429">Patent 1</a><a target="_blank" rel="noopener" href="https://labs.noshado.ws/patent/11157134">Patent 2</a>
			</div>
		</div>
	
		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" data-slide-id="0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/overview.jpg" style="width: 170px; height: 113px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/fblite.jpg" style="width: 146px; height: 83px;">
					</div>
				</div>
				<label>Small Screen Devices</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="2" style="margin-right: 10px; width: 170px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/desktop.jpg" style="width: 157px; height: 114px;">
					</div>
				</div>
				<label>Desktop</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="3" style="margin-right: 0px; width: 160px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/direct-conversation-flow.jpg" style="width: 66px; height: 113px;">
					</div>
				</div>
				<label>Direct Conversation</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="4" style="width: 160px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/direct-intro-video.jpg" style="width: 66px; height: 113px;">
					</div>
				</div>
				<label>Direct Intro Video</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 751px;">
		<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1115px; height: 711px;">
					<div class="placeholder" style="margin: -714px auto 0 auto; text-align: left; width: 1130px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 711px; margin-left: 8px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 711px; margin-left: 42px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 711px; margin-left: 42px;">
					</div>
				</div>
				<div style="width: 1116px; margin: 10px auto 0 auto; display: block;"><div class="caption" style="float: left; width: 338px;">See updates from friends in Stories.</div><div class="caption" style="width: 440px;">Send and receive visual messages.</div><div class="caption" style="float: right; width: 338px;">Talk about what your friend shared.</div></div>
			</div>
		</div>
		<div class="slide" data-slide-id="1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/fblite.jpg" style="width: 946px; height: 484px;">
				<div class="caption" style="display: block; margin-top: 40px;">Stories and Direct designed for Facebook Lite – intended for devices with small screens.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/desktop.jpg" style="width: 1166px; height: 805px;">
				<div class="caption" style="display: block; margin-top: 40px;">Stories and Direct designed for desktop browsers. The final version that shipped put Stories into the sidebar.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="3">
			<div class="slide-contents">
				<video width="293" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 24px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/direct-conversation-flow.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/common/blank-iphone-black.png" style="width: 341px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Interactions of replying to content received in Direct. The conversation is attached to the photo or video.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="4">
			<div class="slide-contents">
				<video width="294" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 24px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/direct-intro-video.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/common/blank-iphone-black.png" style="width: 341px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Art direction and production of the demo video for Direct.</div>
			</div>
		</div>
	</div>
</div>
