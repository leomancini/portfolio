<?php
	$page = Array("title" => "Resume", "id" => "resume");
	require("shared/header.php");
?>

<header>
	<div class="header-content">
		<h1>Leo Mancini</h1>
		<div id="name">
			<a href="./"><img src="<?php echo $path; ?>resources/images/name.jpg" style="width: 245px; height: 37px;"></a>
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
		<h3><a href="https://indeed.com" target="_blank">Indeed</a></h3>
		<h4>Design Technologist &nbsp;<span class="inline-description">December 2018 &ndash; present</span></h4>
		<div class="description">
			<p>Designing and prototyping tools to help people get jobs</p>
		</div>
	</div>
	<div id="position">
		<h3><a href="https://codeforamerica.org" target="_blank">Code for America</a></h3>
		<h4>Lead Product Designer &nbsp;<span class="inline-description">April 2018 &ndash; December 2018</span></h4>
		<div class="description">
			<p>Developed products and strategies to improve delivery of America's public workforce services</p>
			<ul>
				<li>Worked with policy and product managers to identify systemic issues across the country</li>
				<li>Conducted research to understand problems faced by job seekers with significant barriers to employment, including people with criminal records and individuals relying on food stamps</li>
				<li>Designed and prototyped technology to alleviate key pain points, including <a href="https://github.com/codeforamerica/etpl-search" target="_blank">finding high-quality training problems eligible for tuition assistance</a>, <a href="https://github.com/codeforamerica/qr-portable-profile" target="_blank">enabling job seekers to carry their data between service providers</a>, and <a href="https://github.com/codeforamerica/job-commute-search" target="_blank">searching for a job with an easy and low-cost commute</a></li>
			</ul>
		</div>
	</div>
	<div id="position">
		<h3><a href="http://opendream.us" target="_blank">Open Dream</a></h3>
		<h4>Co-Founder &nbsp;<span class="inline-description">September 2017 &ndash; November 2017</span></h4>
		<div class="description">Prototyped and tested ways to increase access to economic opportunities in America, including a service to reduce child care costs by setting up a babysitting co-op, a model for running a business out of your home or vehicle, and exploring ways to enable remote work opportunities for people with physical barriers to employment</div>
	</div>
	<div id="position">
		<h3><a href="http://facebook.com" target="_blank">Facebook</a></h3>
		<h4>Product Designer &nbsp;<span class="inline-description">October 2012 &ndash; September 2017</span></h4>
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
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-stories-and-direct" target="_blank">Stories</a></span> &ndash; share your day with friends
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-stories-and-direct" target="_blank">Direct</a></span> &ndash; send ephemeral photos and videos
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-friends-browser" target="_blank">Friends Browser</a></span> &ndash; connect with your closest friends
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-riff" target="_blank">Riff</a></span> &ndash; create videos together with friends
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-text-filters" target="_blank">Text Filters</a></span> &ndash; add emotion and style to text posts
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
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-trending" target="_blank">Trending</a></span> &ndash; learn about current events through conversations
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-news-feed-discovery" target="_blank">News Feed Discovery</a></span> &ndash; discover new articles, videos, and sources
				<br>
				<span class="project-name"><a href="https://newsroom.fb.com/news/2015/09/updates-for-facebook-notes/" target="_blank">Notes</a></span> &ndash; share and read articles and writing
				<br>
				<span class="project-name"><a href="https://newsroom.fb.com/news/2014/07/introducing-facebook-mentions-a-new-app-for-public-figures/" target="_blank">Mentions</a></span> &ndash; interact with your followers as a public figure or celebrity
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-pages" target="_blank">Pages Redesign</a></span> &ndash; learn about brands and businesses
			</span>
		</div>
	</div>
	<div id="position">
		<h3><a href="http://facebook.com" target="_blank">Facebook</a></h3>
		<h4>Product Design Intern &nbsp;<span class="inline-description">Summer 2012</span></h4>
		<div class="description">
			<span class="projects">
				<h5>Projects</h5>
				<span class="project-name"><a href="https://venturebeat.com/2012/10/11/facebook-intern-mobile-ads/" target="_blank">Boosted Posts</a></span> &ndash; connect with your audience
				<br>
				<span class="project-name"><a href="//leo.gd/?s=resume#fb-threaded-comments" target="_blank">Threaded Comments</a></span> &ndash; reply to comments
				<br>
				<span class="project-name">Topic Pages</span> &ndash; learn about subjects and interests
			</span>
		</div>
	</div>
	<div id="position">
		<h3><a href="http://oak.is" target="_blank">Oak Studios</a></h3>
		<h4>Design and Engineering Intern &nbsp;<span class="inline-description">Spring 2012</span></h4>
		<div class="description">Designed and built parts of <span href="https://www.dropmark.com/" target="_blank">Dropmark</span></div>
	</div>
	<div id="position">
		<h3><a href="http://schools.nyc.gov">New York City Department of Education</a></h3>
		<h4>Graphic Designer &nbsp;<span class="inline-description">July 2011 &ndash; May 2012</span></h4>
		<div class="description">Created <a href="//leo.gd/portfolio2012/portfolio/tag/NYC-Department-of-Education" target="_blank">advertisements, posters, and signage</a> for print and web</div>
	</div>
	<div id="position">
		<h3><a href="http://sva.edu" target="_blank">School of Visual Arts</a></h3>
		<h4>Engineer and Application Developer &nbsp;<span class="inline-description">August 2011 &ndash; May 2012</span></h4>
		<div class="description">Built <a href="//leo.gd/portfolio2012/portfolio/sva-2012-portfolio-app" target="_blank">senior-class portfolio iOS app</a> and <span href="http://gdadapps.sva.edu/attendance/login" target="_blank">attendance system</span> for lectures</div>
	</div>
	<div id="position">
		<h3><a href="https://www.crunchbase.com/organization/bestvendor" target="_blank">BestVendor</a></h3>
		<h4>Design and Engineering Intern &nbsp;<span class="inline-description">Summer 2011</span></h4>
		<div class="description">Designed and built <a href="//leo.gd/portfolio2012/portfolio/bestvendor" target="_blank">new product features</a></div>
	</div>
	<h6>Education</h6>
	<div id="position">
		<h3><a href="http://sva.edu" target="_blank">School of Visual Arts</a></h3>
		<h4>Fine Arts and Humanities Honors Program &nbsp;<span class="inline-description">August 2011 &ndash; May 2012</span></h4>
	</div>
	<div id="position">
		<h3><a href="http://qc.cuny.edu" target="_blank">Queens College, City University of New York</a></h3>
		<h4 style="width: 620px;">Townsend Harris High School senior-year course work &nbsp;<span class="inline-description">August 2010 &ndash; May 2011</span></h4>
	</div>
	<br>
</div>

<div id="container-grey-background">
	<div class="grey-divider"></div>
</div>

<?php require("shared/footer.php"); ?>