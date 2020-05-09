<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light white">
	<div class="header">
		<img src="<?php echo $path; ?>content/<?php echo $project; ?>/header-icon.jpg" style="width: 50px; height: 34px; margin: 5px 0;">
		<h1>Facebook Trending</h1>
		<h2>Learn about current<br>events through conversations.</h2>
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
				<p>When something happens in the world, it might take a while for it to show up in News Feed. And if your friends or pages you follow aren't posting about it, you might not see content about important events outside your friend network or interests.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>The trending unit on Facebook's homepage shows breaking news events and popular conversations in the world.</p><p>When you click a topic, you see a page designed to help you understand the topic from various perspectives. You can browse top headlines from news publishers, comments by relevant public figures, photos and videos from people involved, live updates, and posts from friends and family.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>Working closely with leadership to refine the trending sidebar unit, we launched in early 2014.</p><p>We designed a system for presenting content about a topic through different sections.</p><p>This system was used for the trending topic and search result pages. It was also used in experiences for the <a target="_blank" rel="noopener" href="https://newsroom.fb.com/news/2015/02/trending-oscars-on-facebook/">Oscars</a> and the <a target="_blank" rel="noopener" href="https://newsroom.fb.com/news/2015/01/introducing-a-new-super-bowl-experience-on-facebook/">Super Bowl</a>.</p></div>
			</div>
			<div class="links">
				<a target="_blank" rel="noopener" href="https://newsroom.fb.com/news/2014/01/finding-popular-conversations-on-facebook/">Announcement</a><a target="_blank" rel="noopener" href="https://newsroom.fb.com/news/2014/12/updates-to-trending/">Updates</a><a target="_blank" rel="noopener" href="http://mashable.com/2014/01/16/facebook-trending/">Press Coverage</a>
			</div>
		</div>

		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" data-slide-id="0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/topic-page.jpg" style="width: 140px; height: 116px;">
					</div>
				</div>
				<label>Topic Page</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/rhc.jpg" style="width: 140px; height: 116px;">
					</div>
				</div>
				<label>Sidebar Unit</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="2">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/search-units.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Content Sections</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 801px;">
		<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/topic-page.jpg" style="width: 1001px; height: 801px; position: absolute; left: 50%; margin-left: -500px;">
					<div class="placeholder" style="width: 961px; height: 801px; left: 50%; top: 12px; margin-left: -480px;">
						<div class="desktop-loading-top" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg" alt="Loading..." style="width: 961px; height: 40px;"></div>
						<div class="desktop-loading-middle" style="background: #FFFFFF; position: absolute; width: 961px; height: 690px; margin-top: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg" alt="Loading..." style="width: 961px; height: 100%;"></div>
						<div class="desktop-loading-bottom" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px; margin-top: 722px;"><img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg" alt="Loading..." style="width: 961px; height: 40px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide" data-slide-id="1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/rhc.jpg" style="width: 1002px; height: 801px;">
				<div class="caption" style="display: block; margin-top: 40px;">The unit shows each topic with a headline for context.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/search-units.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Each section provides a different way to learn about the story.</div>
			</div>
		</div>
	</div>
</div>