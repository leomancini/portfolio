<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section text-filters">
	<div class="background">
		<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg">
	</div>
	
	<div class="header">
		<h1>Facebook Text Filters</h1>
		<h2>Add emotion and style to text posts.</h2>
	</div>

	<button id="info-button" class="expand">
		<div class="info-button-content expand">More Info</div>
		<div class="info-button-content collapse"><div class="x-button"><img src="<?php echo $path; ?>resources/images/x.png" style="width: 36px" alt="Collapse additional info"></div></div>
	</button>
	
	<div class="expanded-content" data-expanded="0">
		<div class="description">
			<div class="text">
			<div class="text-block">
				<span class="title" style="color: #F46867;">Problem</span>
				<p>Writing is one of the most basic and powerful ways to communicate.</p><p>With quick access to high-quality cameras to capture and share moments, posting plain text on social media can sometimes feel like it's harder to express how you're feeling or what's happening.</p></div><div class="text-block">
				<span class="title" style="color: #52BEF6;">Solution</span>
				<p>Just like a filter can help express the mood or emotion of a photo, we experimented with what a "filter" could be for text posts.</p><p>Instead of sharing just what you wrote, you would be able to select a combination of fonts, colors, and images to help tell your story.</p></div><div class="text-block">
				<span class="title" style="color: #67CF23;">Role</span>
				<p>We prototyped this idea and pitched it to leadership. After some tests, research and iteration, another team went on to build out a version of this concept.</p><p>Later, it evolved to a feature where you could <a target="_blank" rel="noopener" href="https://www.engadget.com/2016/12/19/spice-up-your-facebook-timeline-with-colored-backgrounds/">add a background color to your post</a>.</p></div>
			</div>
		</div>
	</div>
</div>