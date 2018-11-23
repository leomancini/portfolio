<?php
	$page = Array("title" => "About", "id" => "about");
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
			<a href="./resume<?php if($server == "local") { echo ".php"; } ?>">Resum<span>e</span></a>
			<a class="selected">Abou<span>t</span></a>
		</div>
	</div>
	<div class="grey-divider"></div>
</header>
			
<div id="about">
	<img src="<?php echo $path; ?>resources/images/face.jpg" class="face" style="width: 150px; height: 150px;">
	<h1>I’m a designer, engineer, and artist.</h1>
	<h2>I believe design and technology should<br>encourage community, equal opportunity<br>and social progress.</h2>
	<h3>Based in San Francisco, California.<br>Originally from Queens, NYC.</h3>
	<h4><a target="_blank" href="http://facebook.com/leo"><img src="<?php echo $path; ?>resources/images/emoji/bluebook.jpg"></a> <a target="_blank" href="http://linkedin.com/in/leomancini"><img src="<?php echo $path; ?>resources/images/emoji/astronaut.jpg"></a> <a href="mailto:mancini@leo.gd"><img src="<?php echo $path; ?>resources/images/emoji/wave.jpg"></a></h4>
</div>
	
<div id="container-grey-background">
	<div class="grey-divider"></div>
</div>

<?php require("shared/footer.php"); ?>