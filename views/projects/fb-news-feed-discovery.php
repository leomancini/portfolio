<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section dark">
	<div class="header">
		<h1>Facebook News Feed Discovery</h1>
		<h2>Discover new and relevant<br>articles, videos, photos, and news.</h2>
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
				<p>Your News Feed is mostly made up of content from your friends and pages you follow.</p><p>This can sometimes make it hard to see different perspectives of a story or discover new sources of content.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>After you read an article or watch a video, suggestions of related content will show up below.</p><p>To add new sources of content into your News Feed, you can browse recommended pages and see what they've posted recently.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>In 2013 and 2014, I worked with the News Feed team to design various features for recommending content and suggesting sources.</p><p>We prototyped and pitched several concepts, variations of which were then further developed and launched.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="https://newsroom.fb.com/news/2017/04/news-feed-fyi-new-test-with-related-articles/">Articles Announcement</a><a target="_blank" href="https://newsroom.fb.com/news/2014/09/the-latest-on-facebook-video/">Videos Announcement</a><a target="_blank" href="http://patft.uspto.gov/netacgi/nph-Parser?Sect2=PTO1&Sect2=HITOFF&p=1&u=/netahtml/PTO/search-bool.html&r=1&f=G&l=50&d=PALL&RefSrch=yes&Query=PN/9560154">Patent</a>
			</div>
		</div>
	</div>

	<div class="content" style="height: 730px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1903px; height: 726px; position: absolute; left: 50%; margin-left: -951px;">
					<div class="placeholder" style="width: 1906px; height: 726px; left: 50%; margin-left: -953px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 724px">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>