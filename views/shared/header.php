<?php
	session_start();
	
	if($_SERVER['SERVER_NAME'] == "localhost" || $_SERVER['SERVER_NAME'] == "leo.local") {
		$server = "local";
	} else {
		$server = "remote";
	}
	
	$path = "/portfolio2018/no-content/";
	
	$browsers_with_stylesheet_variation = Array("chrome", "safari");
	
	if(preg_match("/chrome/i", $_SERVER['HTTP_USER_AGENT'])) {
		$browser = "chrome";
	} elseif(preg_match("/safari/i", $_SERVER['HTTP_USER_AGENT'])) {
		$browser = "safari";
	} elseif(preg_match("/firefox/i", $_SERVER['HTTP_USER_AGENT'])) {
		$browser = "firefox";
	} else {
		$browser = "unknown";
	}
	
	if(isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' || (preg_match("/leo.gd/", $_SERVER["HTTP_REFERER"]) || preg_match("/localhost/", $_SERVER["HTTP_REFERER"]))) {
		$internal_page_switch = true;
	} else {
		$internal_page_switch = false;
	}
?>

<!DOCTYPE HTML>
<html id="<?php echo $page["id"]; ?>">

	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112757234-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-112757234-1');
		</script>
		<title>Leo Mancini - <?php echo $page["title"]; ?></title>
	    <meta charset="UTF-8">
	    <meta name="description" content="Recent product and interaction design, prototyping, strategy and engineering work.">
	    <meta name="author" content="Leo Mancini">
		<meta property="og:image" content="http://leo.gd/portfolio2018/resources/images/og-share-preview.jpg">
		<meta property="og:url" content="https://leo.gd">
		<meta property="og:title" content="Leo Mancini - Selected Work">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Recent product and interaction design, prototyping, strategy and engineering work.">
		<link rel="stylesheet/less" href="<?php echo $path; ?>resources/css/style.less">
		<?php if(in_array($browser, $browsers_with_stylesheet_variation)) { ?>
			<link rel="stylesheet" href="<?php echo $path; ?>resources/css/browser-specific/<?php echo $browser; ?>.css">
		<?php } ?>
		<script src="<?php echo $path; ?>resources/js/lib/less.js"></script>
		<script type="text/javascript"> window.this_page = "<?php echo $page["id"]; ?>"; </script>
		<script src="<?php echo $path; ?>resources/js/lib/jquery.js"></script>
		<script src="<?php echo $path; ?>resources/js/main.js"></script>
		<meta name="viewport" content="width=1300">
	</head>
	<body>
		<div id="container"<?php if($internal_page_switch == true) { echo " class='internal-page-switch'"; } ?>>
