<?php
	$page = Array("title" => "Selected Work", "id" => "index");
	require("shared/header.php");

	$configFile = file_get_contents('../config/portfolio2018.json');
	$config = json_decode($configFile, true);
	
	if ($_GET['projectsOverride'] && $_GET['projectsOverridePassword'] && md5($_GET['projectsOverridePassword']) === $config['projectsOverridePasswordHash']) {
		$projects = Array();
		$projectsOverride = explode(',', $job = htmlentities($_GET['projectsOverride'], ENT_QUOTES));

		foreach($projectsOverride as $projectIdTitlePair) {
			$projectIdTitlePairArray = explode(':', $projectIdTitlePair);

			array_push($projects, Array(
				"id" => $projectIdTitlePairArray[0],
				"title" => $projectIdTitlePairArray[1]
			));
		}
	} else {
		$projects = Array(
			Array(
				"id" => "fb-stories-and-direct",
				"title" => "Stories"
			),
			Array(
				"id" => "fb-friends-browser",
				"title" => "Friends"
			),
			Array(
				"id" => "indeed",
				"title" => "Indeed"
			),
			Array(
				"id" => "code-for-america",
				"title" => "Code for America"
			),
			Array(
				"id" => "fb-riff",
				"title" => "Riff"
			),
			Array(
				"id" => "fb-text-filters",
				"title" => "Filters"
			),
			Array(
				"id" => "fb-trending",
				"title" => "Trending"
			),
			Array(
				"id" => "place-lists",
				"title" => "Lists"
			),
			Array(
				"id" => "fb-news-feed-discovery",
				"title" => "Feed Discovery"
			),
			Array(
				"id" => "fb-pages",
				"title" => "Pages"
			),
			Array(
				"id" => "fb-threaded-comments",
				"title" => "Threads"
			)
		);	
	}
?>

<div id="preload">
	<img src="<?php echo $path; ?>content/fb-stories-and-direct/overview-loading.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/fb-friends-browser/overview-loading.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/places-browser/mobile-loading.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg" alt="Loading...">
	<img src="<?php echo $path; ?>content/fb-threaded-comments/desktop-mobile-loading.jpg" alt="Loading...">
</div>

<header>
	<div class="header-content">
		<div id="name">
			<a href="./"><h1>Leo Mancini</h1><img src="<?php echo $path; ?>resources/images/<?php if($dark_mode) { echo "dark-mode/"; } ?>name.jpg" style="width: 245px; height: 37px;" alt="Leo Mancini"></a>
		</div>
		<h2><a href="mailto:mancini@leo.gd">mancini@leo.gd</a></h2>
		<div class="links">
			<a class="selected">Wor<span>k</span></a>
			<a href="./resume<?php if($server == "local") { echo ".php"; } ?>">Resum<span>e</span></a>
			<a href="./about<?php if($server == "local") { echo ".php"; } ?>">Abou<span>t</span></a>
		</div>
	</div>
</header>

<div class="grey-divider"></div>

<div id="navigation">
	<div class="links"><?php $project_index = 0; foreach($projects as $project) { $project_index++; ?><a href="#<?php echo $project["id"]; ?>" data-section-id="<?php echo $project["id"]; ?>"<?php if($internal_page_switch && $project_index == 1) { echo ' class="selected"'; } ?>><?php echo $project["title"]; ?></a><?php } ?></div>
	<div class="grey-divider bottom-white"></div>
	<div id="shadow"></div>
</div>

<div id="navigation-fixed-spacer"></div>

<?php
	foreach($projects as $project) {
		include("projects/".$project["id"].".php");
	}
?>

<?php require("shared/footer.php"); ?>