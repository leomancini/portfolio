<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>

<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light white monochrome">
	<div class="grey-divider" style="height: 1px;"></div>
	<div class="header">
		<h1>Facebook Threaded Comments</h1>
		<h2>Reply to a specific comment<br>and have multiple conversations.</h2>
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
				<p>In a comment thread, it's hard to have more than one conversation. This gets worse when there's a lot of people on a public thread or when a business wants to respond directly to a customer.</p><p>It's tough to tell which comments are replies to other comments and which are responding to the original post. It winds up being hard for someone to jump into the conversation or read it later.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>We developed and tested a system that would allow some comments to be designated as replies to other comments.</p><p>When you wanted to reply directly to someone's comment, you could click "Reply" and your comment would be marked as a response to that comment.</p><p>Replies were visually differentiated so that it was easier to read the conversation and add your thoughts.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>As an intern in 2012, I designed various layouts for comment threads with replies. I also prototyped the interactions of replying to a comment and collapsing or expanding the thread.</p><p>We presented to Mark Zuckerberg and the product leadership team. The feature was initially launched for comment threads on posts by Pages. After refinement and further iteration by another team, the feature was launched to all threads.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="https://www.facebook.com/notes/journalists-on-facebook/improving-conversations-on-facebook-with-replies/578890718789613/">Announcement</a><a target="_blank" href="https://www.huffingtonpost.com/craig-kanalley/facebook-replies-threaded_b_2974226.html">Press Coverage</a>
			</div>
		</div>
	</div>

	<div class="content" style="height: 924px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/desktop-mobile.jpg" style="width: 1133px; height: 933px; position: absolute; left: 50%; margin-left: -566px;">
					<div class="placeholder" style="width: 1113px; height: 916px; left: 50%; top: 13px; margin-left: -566px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/desktop-mobile-loading.jpg" style="width: 1113px; height: 916px;">
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>