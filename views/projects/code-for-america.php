<?php $project = pathinfo(__FILE__, PATHINFO_FILENAME); ?>
<div id="<?php echo $project; ?>" class="section-pointer"></div>

<div id="<?php echo $project; ?>-content" class="section light white monochrome">
	<div class="grey-divider"></div>
	<div class="header">
		<h1>Code for America</h1>
		<h2>Find a job that pays enough to live on.</h2>
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
				<p>America’s public workforce system is a set of government services designed to help people find and keep high-quality jobs.</p><p>The delivery of these services is frequently shaped by policies written without a good understanding how people use these services. Job seekers are often asked to navigate complicated systems, use unintuitive interfaces, and struggle with bureaucratic procedures.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>We conducted research to identify systemic issues in the workforce system. We interviewed dozens of case managers and job seekers.</p><p>We prototyped and tested various technology products to help people find and keep high-quality jobs. We used these experiments to inspire government partners to use technology to improve delivery of workforce services. 
</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>Collaborating with a small cross-functional team, I led research, design, prototyping, and experimentation.</p><p>I designed high-fidelity screens, mocked up interactive demos, and <a target="_blank" rel="noopener" href="https://github.com/topics/codeforamerica-workforce-2018">built functional prototypes and websites</a>.</p><p>We gathered feedback from government leaders and non-profits to refine and improve our products.</p></div>
			</div>
			<div class="links">
				<a target="_blank" rel="noopener" href="https://github.com/topics/codeforamerica-workforce-2018">Prototype Code</a><a target="_blank" rel="noopener" href="https://techcrunch.com/2017/07/26/google-org-commits-50-million-to-help-prepare-people-for-the-future-of-work/">Support from Google.org</a><a target="_blank" rel="noopener" href="https://workforce.urban.org/topics/public-workforce-system">Overview of Public Workforce System</a><a target="_blank" rel="noopener" href="https://www.codeforamerica.org/news/following-the-user-need-beyond-traditional-boundaries">Lessons Learned</a>
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
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/find-training.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Find Job Training</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="2">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/fair-chance.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Appeal Job Rejection</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="3">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/kupana.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Pay for Caregiving Costs</label>
			</div>
			<div class="slide-thumbnail-wrapper" data-slide-id="4">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/thumbs/corner.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Get Emotional Support</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 770px;">
		<div class="slide selected" data-slide-id="0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview.jpg" style="width: 1903px; height: 724px; position: absolute; left: 50%; margin-left: -951px;">
					<div class="placeholder" style="width: 1906px; height: 724px; left: 50%; margin-left: -953px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/<?php echo $project; ?>/overview-loading.jpg" alt="Loading..." style="width: 341px; height: 724px; margin-left: 45.5px;">
					</div>
				</div>
				<div style="width: 1116px; margin: 0 auto; display: block; padding-top: 13px;"><div class="caption" style="float: left; width: 338px;">Receive financial aid as a working caregiver.</div><div class="caption" style="width: 440px;">Find the best job training programs.</div><div class="caption" style="float: right; width: 338px;">Get compensated for currently unpaid work.</div></div>
			</div>
		</div>
		
		<div class="slide" data-slide-id="1">
			<div class="slide-contents">
				<video width="292" height="506" loop playsinline style="position: absolute; margin-top: 107px; margin-left: 416px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/find-training-feed-video.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/find-training.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Help job seekers <a href="https://github.com/codeforamerica/etpl-search" target="_blank" rel="noopener">find and compare training programs</a> that are eligible for tuition assistance from the government.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="2">
			<div class="slide-contents">
				<video width="292" height="506" loop playsinline style="position: absolute; margin-top: 107px; margin-left: 416px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/fair-chance-flow.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/fair-chance.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Enable people to successfully appeal a decision by an employer to rescind job offer based on conviction history.</div>
			</div>
		</div>
		<div class="slide" data-slide-id="3">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/kupana.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Support people to get back into the workforce by helping them get reimbursed for caregiving expenses.
</div>
			</div>
		</div>
		<div class="slide" data-slide-id="4">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/<?php echo $project; ?>/corner.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Empower job seekers to bring together their network of supporters to help them find a job.</div>
			</div>
		</div>
	</div>
</div>
