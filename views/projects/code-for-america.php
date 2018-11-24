<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>
<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light white monochrome">
	<div class="header">
		<h1>Code for America</h1>
		<h2>Products that enable people to<br>find and maintain family-sustaining jobs</h2>
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
				<p>PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER</p><p>PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER</p><p>PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER</p><p>PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="https://github.com/topics/codeforamerica-workforce-2018">Open Source Code</a><a target="_blank" href="https://www.google.org/our-work/economic-opportunity/code-for-america/">Grant from Google.org</a>
			</div>
		</div>

		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/overview.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/find-training.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Find Job Training</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_2">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/fair-chance.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Conviction History Appeal</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_3">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/kupana.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Caregiver Financial Aid</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_4">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/corner.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Emotional Support</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 770px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1903px; height: 725px; position: absolute; left: 50%; margin-left: -951px;">
					<div class="placeholder" style="width: 2267px; height: 725px; left: 50%; margin-left: -1133px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 44px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 44px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 44px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 44px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 44px;">
					</div>
				</div>
				<div style="width: 1116px; margin: 0 auto; display: block; padding-top: 13px;"><div class="caption" style="float: left; width: 338px;">Receive financial aid as a working caregiver.</div><div class="caption" style="width: 440px;">Find the best job training programs.</div><div class="caption" style="float: right; width: 338px;">Get compensated for currently unpaid work.</div></div>
			</div>
		</div>
		
		<div class="slide" id="slide_1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/find-training.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Help job seekers <a href="https://github.com/codeforamerica/etpl-search" target="_blank">find and compare training programs</a> that are eligible for tuition assistance from the government.</div>
			</div>
		</div>
		<div class="slide" id="slide_2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/fair-chance.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Enable people to successfully appeal a decision by an employer to rescind job offer based on conviction history.</div>
			</div>
		</div>
		<div class="slide" id="slide_3">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/kupana.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Support people to get back into the workforce by helping them get reimbursed for caregiving expenses.
</div>
			</div>
		</div>
		<div class="slide" id="slide_4">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/corner.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Empower job seekers to bring together their network of supporters to help them find a job.</div>
			</div>
		</div>
	</div>
</div>
