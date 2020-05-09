<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light grey monochrome">
	<div class="header">
		<h1>Facebook Pages</h1>
		<h2>Connect and interact with your favorite<br>artists, restaurants, businesses, etc.</h2>
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
				<p>When you see posts from a musician, public figure, restaurant, brand or any other business, it's usually in your News Feed. When you visit their Facebook Page, the layout focuses on their posts – which you likely have already seen.</p><p>Details and other content from the brand or business aren't easily accessible.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>To help people get information quickly, we redesigned the layout to highlight content specific to the page's category.</p><p>The sections would be reordered to show you the most relevant data first. A store would have a map and its hours, a restaurant would display photos and a menu, a movie would show videos and reviews.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>We designed and built a modular layout system. We presented to Mark Zuckerberg and product leadership and iterated based on feedback.</p><p>The redesign didn't launch as originally pitched at the time, but a similar layout highlighting content sections based on category eventually came to Facebook Pages in 2016.</p></div>
			</div>
		</div>

	</div>

	<div class="content" style="height: 958px;">
		<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/page.jpg" style="width: 1001px; height: 958px; position: absolute; left: 50%; margin-left: -500px;">
					<div class="placeholder" style="width: 961px; height: 958px; left: 50%; top: 12px; margin-left: -480px;">
						<div class="desktop-loading-top" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg" style="width: 961px; height: 40px;"></div>
						<div class="desktop-loading-middle" style="background: #FFFFFF; position: absolute; width: 961px; height: 850px; margin-top: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg" style="width: 961px; height: 100%;"></div>
						<div class="desktop-loading-bottom" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px; margin-top: 878px;"><img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg" style="width: 961px; height: 40px;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>