<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>
<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light grey monochrome">
	<div class="header">
		<h1>Indeed</h1>
		<h2>Discover jobs that fit your needs and preferences.</h2>
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
				<p>_PLACEHOLDER_</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>_PLACEHOLDER_</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>_PLACEHOLDER_</p></div>
			</div>
		</div>

		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" data-slide-id="0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/overview.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/homepage-feed.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Homepage Feed</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="2">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/experimental-apps.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Experimental Apps</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="3">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/native-app.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Core App</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="4">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/goodwill.jpg" style="width: 174px; height: 116px;">
					</div>
				</div>
				<label>Goodwill Partnership</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 770px;">
		<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1115px; height: 711px;">
					<div class="placeholder" style="margin: -714px auto 0 auto; text-align: left; width: 1130px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 8px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 42px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 42px;">
					</div>
				</div>
				<div style="width: 1116px; margin: 10px auto 0 auto; display: block;"><div class="caption" style="float: left; width: 338px;">See the newest and most relevant jobs.</div><div class="caption" style="width: 440px;">Find a job that fits your preferences.</div><div class="caption" style="float: right; width: 338px;">Search and apply for jobs.</div></div>
			</div>
		</div>
		<div class="slide" data-slide-id="1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/homepage-feed.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">See the newest and most relevant jobs based on your activity and preferences.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="2">
			<div class="slide-contents">
				<video width="297" height="532" loop playsinline style="position: absolute; margin-top: 91px; margin-left: 412px;">
					<source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/high-quality-job-search.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/experimental-apps.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Filter by criteria that matter to you: living wage, good commute, hiring immediately, etc.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="3">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/native-app.jpg" style="width: 1142px; height: 765px;">
				<div class="caption" style="display: block; margin-top: 40px;">Discover, search, and apply for jobs with a native app.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="4">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/goodwill.jpg" style="width: 1322px; height: 835px;">
				<div class="caption" style="display: block; margin-top: 40px;">Learn how Indeed can help with your job search at a Goodwill Career Center.</div>
			</div>
		</div>
	</div>
</div>
