<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>
<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light grey cash-app">
	<div class="grey-divider"></div>
	<div class="header">
		<h1>Cash App</h1>
		<h2>Access financial services on the web.</h2>
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
				<p>People using Cash App, especially those who use it as their primary financial institution, wanted to access their account on their computer.</p><p>Some wanted more screen space to review transactions more carefully, others felt a stronger sense of trust and security using a website, and others wanted to know they could access their money if their phone were to be lost or stolen.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>We crafted a product experience that was focused on the features that we learned people wanted to use on a larger screen and with more intentionality.</p><p>This led us to prioritize features such as filtering, sorting, and downloading transactions, setting up direct deposit, downloading statements, sending and receiving money, updating profile info, and managing security settings.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>I was the sole designer working on the web account experience, collaborating with product management and engineering to develop principles, vision, and roadmap.</p><p>I also prototyped long-term vision concepts, wrote front-end code for select features, worked with research and marketing partners, and contributed to the design system.</p></div>
			</div>
			<div class="links">
				<a target="_blank" rel="noopener" href="https://cash.app/account">Live Site</a>
			</div>
		</div>

		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" data-slide-id="0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/activity.jpg" style="width: 149px; height: 92px;">
					</div>
				</div>
				<label>Activity</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/cash.jpg" style="width: 149px; height: 92px;">
					</div>
				</div>
				<label>Cash</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="2">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/savings.jpg" style="width: 149px; height: 92px;">
					</div>
				</div>
				<label>Savings</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="3">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/card.jpg" style="width: 149px; height: 92px;">
					</div>
				</div>
				<label>Card</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="4">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/account-dark.jpg" style="width: 149px; height: 92px;">
					</div>
				</div>
				<label>Account</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 620px;">
				<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/activity.jpg" style="width: 1001px; height: 620px; position: absolute; left: 50%; margin-left: -500px;">
					<div class="placeholder" style="width: 961px; height: 620px; left: 50%; top: 12px; margin-left: -480px;">
						<div class="desktop-loading-top" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg" alt="Loading..." style="width: 961px; height: 40px;"></div>
						<div class="desktop-loading-middle" style="background: #FFFFFF; position: absolute; width: 961px; height: 500px; margin-top: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg" alt="Loading..." style="width: 961px; height: 100%;"></div>
						<div class="desktop-loading-bottom" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px; margin-top: 540px;"><img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg" alt="Loading..." style="width: 961px; height: 40px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide" data-slide-id="1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/cash.jpg" style="width: 1001px; height: 620px;">
				<div class="caption" style="display: block; margin-top: 40px;">The unit shows each topic with a headline for context.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/savings.jpg" style="width: 1001px; height: 620px;">
				<div class="caption" style="display: block; margin-top: 40px;">The unit shows each topic with a headline for context.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="3">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/card.jpg" style="width: 1001px; height: 620px;">
				<div class="caption" style="display: block; margin-top: 40px;">The unit shows each topic with a headline for context.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="4">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/account-dark.jpg" style="width: 1001px; height: 620px;">
				<div class="caption" style="display: block; margin-top: 40px;">The unit shows each topic with a headline for context.</div>
			</div>
		</div>
	</div>
</div>
