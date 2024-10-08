<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section dark">
	<div class="header">
		<h1>Facebook News Feed Discovery</h1>
		<h2>Discover new and relevant<br>articles, videos, photos, and news.</h2>
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
				<p>Your News Feed is mostly made up of content from your friends and pages you follow.</p><p>This can sometimes make it hard to see different perspectives of a story or discover new sources of content.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>After you read an article or watch a video, suggestions of related content will show up below.</p><p>To add new sources of content into your News Feed, you can browse recommended pages and see what they've posted recently.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>In 2013 and 2014, I worked with the News Feed team to design various features for recommending content and suggesting sources.</p><p>We prototyped and pitched several concepts, variations of which were then further developed and launched.</p></div>
			</div>
			<div class="links">
				<a target="_blank" rel="noopener" href="https://about.fb.com/news/2013/12/news-feed-fyi-helping-you-find-more-news-to-talk-about/">Articles Announcement</a><a target="_blank" rel="noopener" href="https://about.fb.com/news/2014/09/the-latest-on-facebook-video/">Videos Announcement</a><a target="_blank" rel="noopener" href="https://labs.noshado.ws/patent/10306003">Patent</a>
			</div>
		</div>
	</div>

	<div class="content" style="height: 730px;">
		<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1903px; height: 726px; position: absolute; left: 50%; margin-left: -951px;">
					<div class="placeholder" style="width: 1906px; height: 726px; left: 50%; margin-left: -953px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>