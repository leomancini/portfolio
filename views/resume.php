<?php
	$page = Array("title" => "Resume", "id" => "resume");
	require("shared/header.php");
?>

<header>
	<div class="header-content">
		<div id="name">
			<a href="./"><h1>Leo Mancini</h1><img src="<?php echo $path; ?>resources/images/name.jpg" style="width: 245px; height: 37px;" alt="Leo Mancini"></a>
		</div>
		<h2><a href="mailto:mancini@leo.gd">mancini@leo.gd</a></h2>
		<div class="links">
			<a href="./">Wor<span>k</span></a>
			<a class="selected">Resum<span>e</span></a>
			<a href="./about<?php if($server == "local") { echo ".php"; } ?>">Abou<span>t</span></a>
		</div>
	</div>
	<div class="grey-divider"></div>
</header>

<div id="resume">
	<div id="print-header">
		<h1>Leo Mancini</h1>
		<h2>Portfolio: <a href="http://leo.gd">www.leo.gd</a> &nbsp;&nbsp;&nbsp; Email: <a href="mailto:mancini@leo.gd">mancini@leo.gd</a></h2>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##propel" target="_blank" rel="noopener">Propel</a></h3>
		<h4>Principal Product Design Technologist &nbsp;<span class="inline-description">December 2024 &ndash; present</span></h4>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##freelance%202024" target="_blank" rel="noopener">Product Design Consultant</a></h3>
		<h4><span class="inline-description">April 2024 &ndash; November 2024</span></h4>
		<div class="description">
			<span class="projects">
				<h5>Clients</h5>
				<span class="project-name"><a href="https://leomancini.net/propel-dsnp-plan-navigator" target="_blank" rel="noopener">Propel</a></span> &ndash; Incubating products for people relying on government benefits
				<br>
				<span class="project-name"><a href="https://leomancini.net/##braid" target="_blank" rel="noopener">Braid</a></span> &ndash; Designed and launched product to facilitate team engagement
				<br>
				<span class="project-name"><a href="https://leomancini.net/cash-app-card-studio" target="_blank" rel="noopener">Cash App</a></span> &ndash; Expanded banking feature set on desktop web
				<br>
				<span class="project-name"><a href="https://leomancini.net/distill" target="_blank" rel="noopener">Distill</a></span> &ndash; Designed AI tool to research people and companies
				<br>
				<span class="project-name"><a href="https://leomancini.net/slope" target="_blank" rel="noopener">Slope</a></span> &ndash; Optimized flows for businesses to access growth capital
			</span>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/cash-app-website" target="_blank" rel="noopener">Cash App</a></h3>
		<h4>Staff Product Designer &nbsp;<span class="inline-description">October 2022 &ndash; March 2024</span></h4>
		<div class="description">Launched a <a href="https://leomancini.net/cash-app-website" target="_blank" rel="noopener">new desktop web platform</a> to increase access to financial services
</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##square" target="_blank" rel="noopener">Square</a></h3>
		<h4>Staff Product Designer &nbsp;<span class="inline-description">April 2020 &ndash; October 2022</span></h4>
		<div class="description">
			<p>Designed products to expand access to economic opportunity</p>
			<ul>
				<li>Expanded availability of <a href="https://leomancini.net/sq-early-wage-access" target="_blank" rel="noopener">Early Wage Access features</a> that provides a way for employees of Square businesses to access a portion of their wages before the end of the pay period</li>
				<li>Simplified the <a href="https://leomancini.net/sq-payroll-schedule" target="_blank" rel="noopener">experience of setting up a pay schedule</a> on Square Payroll and access faster money movement, which was the top issue reported by sellers</li>
				<li>Prototyped <a href="https://leomancini.net/sq-idv-configurator" target="_blank" rel="noopener">systems for automatically generating screens</a> to support onboarding sellers across countries and business types</li>
				<li>Designed a <a href="https://leomancini.net/sq-information-requests" target="_blank" rel="noopener">communication platform</a> that helped increase the types of businesses that could use Square payment processing</li>
			</ul>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##indeed" target="_blank" rel="noopener">Indeed</a></h3>
		<h4>Product Design Technologist &nbsp;<span class="inline-description">December 2018 &ndash; April 2020</span></h4>
		<div class="description">
			<p>Focused on designing for people who are experiencing barriers to employment</p>
			<ul>
				<li>Launched <a href="https://leomancini.net/indeed-job-feed" target="_blank" rel="noopener">personalized feed of jobs on the homepage</a> and built algorithms to highlight new and relevant jobs</li>
				<li>Crafted <a href="https://leomancini.net/indeed-mobile-app" target="_blank" rel="noopener">long-term design vision for the Indeed native app</a></li>
				<li>Designed <a href="https://leomancini.net/indeed-experimental-apps" target="_blank" rel="noopener">experimental apps</a> to connect people with jobs tailored to their needs, including short commute, living wage, or hiring immediately</li>
				<li>Partnered with Goodwill to build <a href="https://leomancini.net/indeed-goodwill" target="_blank" rel="noopener">specialized job-search features</a> for the nonprofit's employment services</li>
			</ul>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##code-for-america" target="_blank" rel="noopener">Code for America</a></h3>
		<h4>Lead Product Designer &nbsp;<span class="inline-description">April 2018 &ndash; December 2018</span></h4>
		<div class="description">
			<p>Developed products and strategies to improve delivery of America's public workforce services</p>
			<ul>
				<li>Worked with policy and product managers to identify systemic issues across the country</li>
				<li>Conducted research to understand problems faced by job seekers with significant barriers to employment, including people with criminal records and individuals relying on food stamps</li>
				<li>Designed and prototyped technology to alleviate key pain points, including <a href="https://leomancini.net/job-training-search-tool" target="_blank" rel="noopener">finding high-quality training problems eligible for tuition assistance</a>, <a href="https://leomancini.net/portable-job-seeker-profile-v2" target="_blank" rel="noopener">enabling job seekers to carry their data between service providers</a>, and <a href="https://leomancini.net/job-commute-search-tool" target="_blank" rel="noopener">searching for a job with an easy and low-cost commute</a></li>
			</ul>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##open-dream" target="_blank" rel="noopener">Open Dream</a></h3>
		<h4>Co-Founder &nbsp;<span class="inline-description">September 2017 &ndash; November 2017</span></h4>
		<div class="description">Prototyped and tested ways to increase access to economic opportunities in America, including a <a href="https://leomancini.net/village-time" target="_blank" rel="noopener">service to help parents create babysitting co-ops to reduce child care costs</a>, models for running a business from your home or vehicle, and mechanisms to enable remote work opportunities for people with physical barriers to employment</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##fb-fte" target="_blank" rel="noopener">Facebook</a></h3>
		<h4>Lead Product Designer &nbsp;<span class="inline-description">October 2012 &ndash; September 2017</span></h4>
		<div class="description">
			<p>Collaborated with product teams to identify high-impact problems and develop solutions in sharing, audience, and public content</p>
			<ul>
				<li>Worked with product managers and researchers to develop strategy</li>
				<li>Designed and prototyped user interfaces and interaction flows</li>
				<li>Presented to senior leadership and iterated based on feedback</li>
				<li>As part of London landing team in 2014, initiated projects and grew design team</li>
			</ul>
			<span class="projects">
				<h5>Sharing</h5>
				<span class="project-name"><a href="https://leomancini.net/fb-stories-and-direct" target="_blank" rel="noopener">Stories</a></span> &ndash; Share your day with friends
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-stories-and-direct" target="_blank" rel="noopener">Direct</a></span> &ndash; Send ephemeral photos and videos
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-friends-browser" target="_blank" rel="noopener">Friends Browser</a></span> &ndash; Connect with your closest friends
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-riff" target="_blank" rel="noopener">Riff</a></span> &ndash; Create videos together with friends
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-text-filters" target="_blank" rel="noopener">Text Filters</a></span> &ndash; Add emotion and style to text posts
				<br>
				<h5>Audience</h5>
				<span class="project-name"><a href="https://leomancini.net/fb-blush" target="_blank" rel="noopener">Teens</a></span> &ndash; Experiments in visual sharing
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-japan-optimizations" target="_blank" rel="noopener">Japan</a></span> &ndash; Research on identity
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-india-optimizations" target="_blank" rel="noopener">India</a></span> &ndash; Design for multiple languages
				<br>
				<span class="project-name">Small Devices</span> &ndash; Interaction optimizations for various devices
				<br>
				<h5>Public Content</h5>
				<span class="project-name"><a href="https://leomancini.net/fb-trending" target="_blank" rel="noopener">Trending</a></span> &ndash; Learn about current events through conversations
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-news-feed-discovery" target="_blank" rel="noopener">News Feed Discovery</a></span> &ndash; Discover new articles, videos, and sources
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-notes" target="_blank" rel="noopener">Notes</a></span> &ndash; Share and read articles and writing
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-mentions-app" target="_blank" rel="noopener">Mentions</a></span> &ndash; Interact with your followers as a public figure or celebrity
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-pages" target="_blank" rel="noopener">Pages</a></span> &ndash; Learn about brands and businesses
			</span>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##fb-internship" target="_blank" rel="noopener">Facebook</a></h3>
		<h4>Product Design Intern &nbsp;<span class="inline-description">Summer 2012</span></h4>
		<div class="description">
			<span class="projects">
				<h5>Projects</h5>
				<span class="project-name"><a href="https://leomancini.net/fb-boosted-posts" target="_blank" rel="noopener">Boosted Posts</a></span> &ndash; Connect with your audience
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-threaded-comments" target="_blank" rel="noopener">Threaded Comments</a></span> &ndash; Reply to comments
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-topic-pages" target="_blank" rel="noopener">Topic Pages</a></span> &ndash; Learn about subjects and interests
			</span>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://oak.is/about/" target="_blank" rel="noopener">Oak Studios</a></h3>
		<h4>Design and Engineering Intern &nbsp;<span class="inline-description">Spring 2012</span></h4>
		<div class="description print-hidden">Designed and built parts of <span href="https://www.dropmark.com/" target="_blank" rel="noopener">Dropmark</span></div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##nyc-department-of-education" target="_blank" rel="noopener">New York City Department of Education</a></h3>
		<h4>Graphic Designer &nbsp;<span class="inline-description">July 2011 &ndash; May 2012</span></h4>
		<div class="description print-hidden">Created <a href="https://leomancini.net/##nyc-department-of-education" target="_blank" rel="noopener">advertisements, posters, and signage</a> for print and web</div>
	</div>
	<div id="position" class="print-hidden">
		<h3><a href="https://leomancini.net/##sva-engineering" target="_blank" rel="noopener">School of Visual Arts</a></h3>
		<h4>Engineer and Application Developer &nbsp;<span class="inline-description">August 2011 &ndash; May 2012</span></h4>
		<div class="description">Built <a href="https://leomancini.net/sva-2012-portfolio-app" target="_blank" rel="noopener">senior-class portfolio iOS app</a> and <a href="https://leomancini.net/sva-attendance-app" target="_blank" rel="noopener">attendance system</a> for lectures</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/bestvendor" target="_blank" rel="noopener">BestVendor</a></h3>
		<h4>Design and Engineering Intern &nbsp;<span class="inline-description">Summer 2011</span></h4>
		<div class="description print-hidden">Designed and built <a href="https://leomancini.net/bestvendor" target="_blank" rel="noopener">new product features</a></div>
	</div>
	<h6>Education</h6>
	<div id="position">
		<h3><a href="https://leomancini.net/##sva" target="_blank" rel="noopener">School of Visual Arts</a></h3>
		<h4>Fine Arts and Humanities Honors Program &nbsp;<span class="inline-description">August 2011 &ndash; May 2012</span></h4>
	</div>
	<div id="position" class="print-hidden">
		<h3>Queens College, City University of New York</h3>
		<h4 style="width: 620px;">Townsend Harris High School senior-year course work &nbsp;<span class="inline-description">August 2010 &ndash; May 2011</span></h4>
	</div>
</div>

<div id="container-grey-background">
	<div class="grey-divider"></div>
</div>

<?php require("shared/footer.php"); ?>