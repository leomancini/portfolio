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
		<h3><a href="https://leomancini.net/##square" target="_blank" rel="noopener">Square</a></h3>
		<h4>Senior Product Designer &nbsp;<span class="inline-description">April 2020 &ndash; present</span></h4>
		<div class="description">Designing products to expand access to economic opportunity</div>
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
				<span class="project-name"><a href="https://leomancini.net/fb-stories-and-direct" target="_blank" rel="noopener">Stories</a></span> &ndash; share your day with friends
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-stories-and-direct" target="_blank" rel="noopener">Direct</a></span> &ndash; send ephemeral photos and videos
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-friends-browser" target="_blank" rel="noopener">Friends Browser</a></span> &ndash; connect with your closest friends
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-riff" target="_blank" rel="noopener">Riff</a></span> &ndash; create videos together with friends
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-text-filters" target="_blank" rel="noopener">Text Filters</a></span> &ndash; add emotion and style to text posts
				<br>
				<h5>Audience</h5>
				<span class="project-name">Teens</span> &ndash; experiments in visual sharing
				<br>
				<span class="project-name">Japan</span> &ndash; research on identity
				<br>
				<span class="project-name">India</span> &ndash; design for multiple languages
				<br>
				<span class="project-name">Small Devices</span> &ndash; interaction optimizations for various devices
				<br>
				<h5>Public Content</h5>
				<span class="project-name"><a href="https://leomancini.net/fb-trending" target="_blank" rel="noopener">Trending</a></span> &ndash; learn about current events through conversations
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-news-feed-discovery" target="_blank" rel="noopener">News Feed Discovery</a></span> &ndash; discover new articles, videos, and sources
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-notes" target="_blank" rel="noopener">Notes</a></span> &ndash; share and read articles and writing
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-mentions-app" target="_blank" rel="noopener">Mentions</a></span> &ndash; interact with your followers as a public figure or celebrity
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-pages" target="_blank" rel="noopener">Pages</a></span> &ndash; learn about brands and businesses
			</span>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://leomancini.net/##fb-internship" target="_blank" rel="noopener">Facebook</a></h3>
		<h4>Product Design Intern &nbsp;<span class="inline-description">Summer 2012</span></h4>
		<div class="description">
			<span class="projects">
				<h5>Projects</h5>
				<span class="project-name"><a href="https://leomancini.net/fb-boosted-posts" target="_blank" rel="noopener">Boosted Posts</a></span> &ndash; connect with your audience
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-threaded-comments" target="_blank" rel="noopener">Threaded Comments</a></span> &ndash; reply to comments
				<br>
				<span class="project-name"><a href="https://leomancini.net/fb-topic-pages" target="_blank" rel="noopener">Topic Pages</a></span> &ndash; learn about subjects and interests
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
		<h3><a href="https://leomancini.net/##sva" target="_blank" rel="noopener">School of Visual Arts</a></h3>
		<h4>Engineer and Application Developer &nbsp;<span class="inline-description">August 2011 &ndash; May 2012</span></h4>
		<div class="description">Built <a href="https://leomancini.net/sva-2012-portfolio-app" target="_blank" rel="noopener">senior-class portfolio iOS app</a> and <span href="https://leomancini.net/sva-attendance-app" target="_blank" rel="noopener">attendance system</span> for lectures</div>
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
		<h3><a href="http://qc.cuny.edu" target="_blank" rel="noopener">Queens College, City University of New York</a></h3>
		<h4 style="width: 620px;">Townsend Harris High School senior-year course work &nbsp;<span class="inline-description">August 2010 &ndash; May 2011</span></h4>
	</div>
</div>

<div id="container-grey-background">
	<div class="grey-divider"></div>
</div>

<?php require("shared/footer.php"); ?>