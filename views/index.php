<?php
	$page = Array("title" => "Selected Work", "id" => "index");
	require("views/shared/header.php");
?>

<div id="preload">
	<img src="<?php echo $path; ?>content/fb-stories-and-direct/overview-loading.jpg">
	<img src="<?php echo $path; ?>content/fb-friends-browser/overview-loading.jpg">
	<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg">
	<img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg">
	<img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg">
	<img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg">
	<img src="<?php echo $path; ?>content/places-browser/mobile-loading.jpg">
	<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg">
	<img src="<?php echo $path; ?>content/fb-threaded-comments/desktop-mobile-loading.jpg">
</div>

<header>
	<div class="header-content">
		<h1>Leo Mancini</h1>
		<div id="name">
			<a href="./"><img src="<?php echo $path; ?>resources/images/name.jpg" style="width: 245px; height: 37px;"></a>
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
	<div class="links">
		<a href="#fb-stories-and-direct" data-section-id="fb-stories-and-direct">Stories</a><a href="#fb-friends-browser" data-section-id="fb-friends-browser">Friends</a><a href="#fb-riff" data-section-id="fb-riff">Riff</a><a href="#fb-text-filters" data-section-id="fb-text-filters">Filters</a><a href="#fb-trending" data-section-id="fb-trending">Trending</a><a href="#place-lists" data-section-id="place-lists">Lists</a><a href="#fb-news-feed-discovery" data-section-id="fb-news-feed-discovery">Feed Discovery</a><a href="#fb-pages" data-section-id="fb-pages">Pages</a><a href="#fb-threaded-comments" data-section-id="fb-threaded-comments">Threads</a>
	</div>
	<div class="grey-divider bottom-white"></div>
	<div id="shadow"></div>
</div>

<div id="navigation-fixed-spacer"></div>

<div id="fb-stories-and-direct" class="section-pointer"></div>

<div id="fb-stories-and-direct-content" class="section light grey-blue">
	<div class="header">
		<h1>Facebook Stories and Direct</h1>
		<h2>Share your day with friends<br>and send private visual messages.</h2>
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
				<p>News Feed ranks posts using an algorithm to help you see important updates from friends and family.</p><p>Because you don’t usually have enough time to scroll through everything posted by your friends, you can wind up missing some of the more casual and informal moments of your friends’ lives.</p><p>We also heard from people that they felt their content had to be high quality enough to share with all their friends in News Feed, which had the potential to discourage them from sharing smaller moments.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>With the rise of camera-based sharing shown by Instagram and Snapchat, we built two new spaces for people to view and share visual content from their friends on Facebook.</p><p>In Stories, only friends who check your Story will see your content, making it a space where you can feel more comfortable sharing smaller moments throughout your day. The format is full-screen and visual.</p><p>With Direct, you can send ephemeral photos and videos to friends and have conversations.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>After working on several experimental sharing products in Facebook's London office, I moved back to California in August 2016 to help lead the effort to build Stories and Direct. We launched worldwide in March 2017.</p><p>Working on the team designing the system for sharing visual content on Facebook, I collaborated with engineering, product marketing and research teams to build, test and launch.</p><p>We presented to Mark Zuckerberg and the product leadership team to gain consensus and set direction.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="http://www.facebook.com/facebook/videos/10155656407651729/">Launch Video</a><a target="_blank" href="http://newsroom.fb.com/news/2017/03/more-ways-to-share-with-the-facebook-camera/">Announcement</a><a target="_blank" href="http://techcrunch.com/2017/03/28/storybook/">Press Coverage</a>
			</div>
		</div>
	
		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/thumbs/overview.jpg" style="width: 170px; height: 113px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/thumbs/fblite.jpg" style="width: 146px; height: 83px;">
					</div>
				</div>
				<label>Small Screen Devices</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_2" style="margin-right: 10px; width: 170px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/thumbs/desktop.jpg" style="width: 158px; height: 106px;">
					</div>
				</div>
				<label>Desktop</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_3" style="margin-right: 0px; width: 160px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/thumbs/direct-conversation-flow.jpg" style="width: 66px; height: 113px;">
					</div>
				</div>
				<label>Direct Conversation</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_4" style="width: 160px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/thumbs/direct-intro-video.jpg" style="width: 66px; height: 113px;">
					</div>
				</div>
				<label>Direct Intro Video</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 751px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/fb-stories-and-direct/overview.jpg" style="width: 1115px; height: 711px;">
					<div class="placeholder" style="margin: -714px auto 0 auto; text-align: left; width: 1130px;">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 8px;">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 42px;">
						<img src="<?php echo $path; ?>content/fb-stories-and-direct/overview-loading.jpg" style="width: 341px; height: 711px; margin-left: 42px;">
					</div>
				</div>
				<div style="width: 1116px; margin: 10px auto 0 auto; display: block;"><div class="caption" style="float: left; width: 338px;">See updates from friends in Stories.</div><div class="caption" style="width: 440px;">Send and receive visual messages.</div><div class="caption" style="float: right; width: 338px;">Talk about what your friend shared.</div></div>
			</div>
		</div>
		<div class="slide" id="slide_1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-stories-and-direct/fblite.jpg" style="width: 946px; height: 484px;">
				<div class="caption" style="display: block; margin-top: 40px;">Stories and Direct designed for Facebook Lite – intended for devices with small screens.</div>
			</div>
		</div>
		<div class="slide" id="slide_2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-stories-and-direct/desktop.jpg" style="width: 1166px; height: 805px;">
				<div class="caption" style="display: block; margin-top: 40px;">Stories and Direct designed for desktop browsers. The final version that shipped put Stories into the sidebar.</div>
			</div>
		</div>
		<div class="slide" id="slide_3">
			<div class="slide-contents">
				<video width="293" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 24px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/fb-stories-and-direct/direct-conversation-flow.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/common/blank-iphone-black.png" style="width: 341px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Interactions of replying to content received in Direct. The conversation is attached to the photo or video.</div>
			</div>
		</div>
		<div class="slide" id="slide_4">
			<div class="slide-contents">
				<video width="294" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 24px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/fb-stories-and-direct/direct-intro-video.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/common/blank-iphone-black.png" style="width: 341px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Art direction and production of the demo video for Direct.</div>
			</div>
		</div>
	</div>
</div>

<div id="fb-friends-browser" class="section-pointer"></div>

<div id="fb-friends-browser-content" class="section dark bottom-edge-flush" data-negative-bottom-offset="6">
	<div class="header">
		<h1>Facebook Friends Browser</h1>
		<h2 style="margin-top: 11px;">Connect with your closest friends.</h2>
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
				<p>News Feed uses an algorithm to determine which posts you see.</p><p>This means that you might miss a casual moment from a close friend's daily routine or feel that you see too many updates from an old acquaintance.</p><p>When sharing content, you might not feel comfortable posting frequently because you don't want to overwhelm your friends' News Feeds. You might also not want to post something that you don't feel is high-quality enough to share with all your friends.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>In this space, you only see content from friends you choose. Each friend has their own feed where you can check what they've posted recently. By flipping the model of consumption from passively scrolling through News Feed to actively choosing friends, this space makes sure you can keep up to date with the friends you care about most.</p><p>We also experimented with ways to share that were designed to make it more socially acceptable to post more often, help you feel comfortable posting small moments, and make it faster and more fun to share parts of your day.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>We had been asked by product leadership to think about this problem and I worked with a product manager and two engineers in London to come up with a solution.</p><p>We eventually grew to a full product team of engineers, researchers, content strategists, data analysts and marketers.</p><p>As the only designer, I helped lead product strategy, conducted research and usability sessions, designed the user interface, worked with engineers, and presented to leadership. We explored dozens of variants and directions from mid-2015 to the summer of 2016.</p></div>
			</div>
		</div>
	
		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0" style="margin-right: 50px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-friends-browser/thumbs/overview.jpg" style="width: 149px; height: 106px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1" style="margin-right: 50px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-friends-browser/thumbs/alt-friends-screen.jpg" style="width: 149px; height: 95px;">
					</div>
				</div>
				<label>Alternate Friends Screen</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_2" style="margin-right: 40px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-friends-browser/thumbs/composer-experiments.jpg" style="width: 149px; height: 95px;">
					</div>
				</div>
				<label>Composer Experiments</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_3" style="margin-right: 10px; width: 110px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-friends-browser/thumbs/friend-view-transitions.jpg" style="width: 46px; height: 95px;">
					</div>
				</div>
				<label>Friend Browsing</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 870px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div class="caption arbitrary-position" style="margin-left: 13px; margin-top: 140px; width: 350px; text-align: right;">When a close friend shares an update,<br>this icon will let you know.</div>
				<div class="caption arbitrary-position" style="margin-left: 419px; width: 350px; text-align: center;">You pick the friends<br>you want to see posts from.</div>
				<div class="caption arbitrary-position" style="margin-left: 826px; margin-top: 140px; width: 350px; text-align: left;">Swipe through friends<br>to browse posts.</div>
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/fb-friends-browser/overview.jpg" style="width: 1188px; height: 818px; margin-top: 53px;">
					<div class="placeholder" style="margin: -821px auto 0 auto; text-align: center; width: 1207px; height: 818px;">
						<img src="<?php echo $path; ?>content/fb-friends-browser/overview-loading.jpg" style="width: 387px; height: 747px;">
						<img src="<?php echo $path; ?>content/fb-friends-browser/overview-loading.jpg" style="width: 387px; height: 747px; margin-left: 18px; vertical-align: 140px;">
						<img src="<?php echo $path; ?>content/fb-friends-browser/overview-loading.jpg" style="width: 387px; height: 747px; margin-left: 19px;">
					</div>
				</div>
			</div>
		</div>
		<div class="slide" id="slide_1">
			<div class="slide-contents bottom-padding" style="padding-top: 10px;">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-friends-browser/alt-friends-screen.jpg" style="width: 1114px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Different ideas for how to show your top friends.</div>
			</div>
		</div>
		<div class="slide" id="slide_2">
			<div class="slide-contents bottom-padding" style="padding-top: 10px;">
				<video width="293" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 796px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/fb-friends-browser/composer-experiments-video.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/fb-friends-browser/composer-experiments.jpg" style="width: 1114px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Experiments in how to make it easy and fun to share visual content.</div>
			</div>
		</div>
		<div class="slide" id="slide_3">
			<div class="slide-contents bottom-padding" style="padding-top: 10px;">
				<video width="293" height="522" loop playsinline style="position: absolute; margin-top: 89px; margin-left: 24px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/fb-friends-browser/friend-view-interactions.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/common/blank-iphone-white.png" style="width: 341px; height: 711px;">
				<div class="caption" style="display: block; margin-top: 40px;">Interactions for viewing content from friends.</div>
			</div>
		</div>
	</div>
</div>

<div id="fb-riff" class="section-pointer"></div>

<div id="fb-riff-content" class="section pink">
	<div class="header">
		<img src="<?php echo $path; ?>content/fb-riff/header-icon.jpg" style="width: 197px; height: 197px; margin-top: -36px; margin-bottom: -32px;">
		<h1>Facebook Riff</h1>
		<h2>Create videos together<br>with your friends.</h2>
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
				<p>Videos are a great way to share an experience with your friends. They can see the world through your eyes, wherever they might be.</p></p>Yet there often too many barriers for you to create a video. You might not know what to make a video about, you might be afraid your friends won't like your video, or you might not want to edit and polish your video.</p><p>And so your friends might miss out something special in your life.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>In 2014, a viral video phenomenon swept the internet. People around the world were sharing videos as part of the <a target="_blank" href="https://newsroom.fb.com/news/2014/08/the-ice-bucket-challenge-on-facebook/">Ice Bucket Challenge</a>. The intimacy and vulnerability shown in these videos was bringing people together around a cause.</p><p>Inspired by how these videos were strenghtening friendships, we made an app that reduced the pressure of making a video.</p><p>Rather than come up with a new topic, you can just add a clip to a friend's video. The spotlight isn't all on you to create something funny or beautiful. You create a video together with your friends.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>After brainstorming with a product manager and engineer to come up with the concept for the app, we worked with a small team in London and Tel Aviv to build the app on iOS and Android.</p><p>I designed and prototyped the user interface, produced marketing and App Store materials and built the website.</p><p>We launched the app in April 2015.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="https://newsroom.fb.com/news/2015/04/riff-make-videos-with-friends/">Announcement</a><a target="_blank" href="http://money.cnn.com/2015/04/01/technology/facebook-riff-collaborative-video-app/index.html">Press Coverage</a><a target="_blank" href="https://www.facebook.com/photo.php?fbid=10153206803718735&set=a.273900913734.173436.589048734&type=3&theater">Launch Post</a><a target="_blank" href="http://patft.uspto.gov/netacgi/nph-Parser?Sect2=PTO1&Sect2=HITOFF&p=1&u=/netahtml/PTO/search-bool.html&r=1&f=G&l=50&d=PALL&RefSrch=yes&Query=PN/9772813">Patent</a>
			</div>
		</div>
	
		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0" style="margin-right: 20px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-riff/thumbs/overview.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Overview</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1" style="margin-right: 20px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-riff/thumbs/branding.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Branding</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_2" style="margin-right: 20px; width: 134px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-riff/thumbs/android.jpg" style="width: 125px; height: 116px;">
					</div>
				</div>
				<label>Android</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_3" style="margin-right: 20px; width: 85px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-riff/thumbs/composer.jpg" style="width: 65px; height: 114px;">
					</div>
				</div>
				<label>Composer</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_4" style="margin-right: 20px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-riff/thumbs/website.jpg" style="width: 174px; height: 116px;">
					</div>
				</div>
				<label>Website</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_5" style="width: 100px;">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-riff/thumbs/t-shirt.jpg" style="width: 100px; height: 114px;">
					</div>
				</div>
				<label>T-Shirt</label>
			</div>
			
		</div>
	</div>

	<div class="content" style="height: 780px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div style="width: 1116px; margin: 10px auto 25px auto; display: block; font-family: 'Helvetica Rounded'; font-weight: 400;"><div class="caption" style="float: left; width: 338px; color: #FFFFFF;">Someone picks a topic.</div><div class="caption" style="width: 440px; color: #FFFFFF;">Friends add clips.</div><div class="caption" style="float: right; width: 338px; color: #FFFFFF;">Awesome videos go viral!</div></div>
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/fb-riff/overview.jpg" style="width: 1903px; height: 724px; position: absolute; left: 50%; margin-left: -951px;">
					<div class="placeholder" style="width: 1906px; height: 724px; left: 50%; margin-left: -953px;">
						<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg" style="width: 341px; height: 724px">
						<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/fb-riff/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
					</div>
				</div>	
			</div>
		</div>
		<div class="slide" id="slide_1">
			<div class="slide-contents">
				<video width="285" height="512" loop playsinline style="position: absolute; margin-top: 105px; margin-left: 420px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/fb-riff/ptr.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/fb-riff/branding.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">The branding was meant to inspire fun and creative videos.</div>
			</div>
		</div>
		<div class="slide" id="slide_2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-riff/android.jpg" style="width: 797px; height: 734px;">
				<div class="caption" style="display: block; margin-top: 40px;">Riff designed for Android, which we launched simultaneously as iOS.</div>
			</div>
		</div>
		<div class="slide" id="slide_3">
			<div class="slide-contents">
				<video width="286" height="510" loop playsinline style="position: absolute; margin-top: 105px; margin-left: 29px;">
				  <source data-delay-load-src="<?php echo $path; ?>content/fb-riff/composer.mp4" type="video/mp4">
				</video>
				<img data-delay-load-src="<?php echo $path; ?>content/fb-riff/composer.jpg" style="width: 341px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">When you add to a video, a countdown clock gets you ready.</div>
			</div>
		</div>
		<div class="slide" id="slide_4">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-riff/website.jpg" style="width: 1322px; height: 835px;">
				<div class="caption" style="display: block; margin-top: 40px;">Marketing website for Riff.</div>
			</div>
		</div>
		<div class="slide" id="slide_5">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-riff/t-shirt.jpg" style="width: 586px; height: 689px;">
				<div class="caption" style="display: block; margin-top: 40px;">T-shirts for the team.</div>
			</div>
		</div>
	</div>
</div>

<div id="fb-text-filters" class="section-pointer"></div>

<div id="fb-text-filters-content" class="section text-filters">
	<div class="background">
		<img src="<?php echo $path; ?>content/fb-text-filters/overview.jpg">
	</div>
	
	<div class="header">
		<h1>Facebook Text Filters</h1>
		<h2>Add emotion and style to text posts.</h2>
	</div>

	<button id="info-button" class="expand">
		<div class="info-button-content expand">More Info</div>
		<div class="info-button-content collapse"><div class="x-button"><img src="<?php echo $path; ?>resources/images/x.png" style="width: 36px"></div></div>
	</button>
	
	<div class="expanded-content" data-expanded="0">
		<div class="description">
			<div class="text">
			<div class="text-block">
				<span class="title" style="color: #F46867;">Problem</span>
				<p>Writing is one of the most basic and powerful ways to communicate.</p><p>With quick access to high-quality cameras to capture and share moments, posting plain text on social media can sometimes feel like it's harder to express how you're feeling or what's happening.</p></div><div class="text-block">
				<span class="title" style="color: #52BEF6;">Solution</span>
				<p>Just like a filter can help express the mood or emotion of a photo, we experimented with what a "filter" could be for text posts.</p><p>Instead of sharing just what you wrote, you would be able to select a combination of fonts, colors, and images to help tell your story.</p></div><div class="text-block">
				<span class="title" style="color: #67CF23;">Role</span>
				<p>We prototyped this idea and pitched it to leadership. After some tests, research and iteration, another team went on to build out a version of this concept.</p><p>Later, it evolved to a feature where you could <a target="_blank" href="https://www.engadget.com/2016/12/19/spice-up-your-facebook-timeline-with-colored-backgrounds/">add a background color to your post</a>.</p></div>
			</div>
		</div>
	</div>
	
</div>

<div id="fb-trending" class="section-pointer"></div>

<div id="fb-trending-content" class="section light white">
	<div class="header">
		<img src="<?php echo $path; ?>content/fb-trending/header-icon.jpg" style="width: 50px; height: 34px; margin: 5px 0;">
		<h1>Facebook Trending</h1>
		<h2>Learn about current<br>events through conversations.</h2>
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
				<p>When something happens in the world, it might take a while for it to show up in News Feed. And if your friends or pages you follow aren't posting about it, you might not see content about important events outside your friend network or interests.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>The trending unit on Facebook's homepage shows breaking news events and popular conversations in the world.</p><p>When you click a topic, you see a page designed to help you understand the topic from various perspectives. You can browse top headlines from news publishers, comments by relevant public figures, photos and videos from people involved, live updates, and posts from friends and family.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>Working closely with leadership to refine the trending sidebar unit, we launched in early 2014.</p><p>We designed a system for presenting content about a topic through different sections.</p><p>This system was used for the trending topic and search result pages. It was also used in experiences for the <a target="_blank" href="https://newsroom.fb.com/news/2015/02/trending-oscars-on-facebook/">Oscars</a> and the <a target="_blank" href="https://newsroom.fb.com/news/2015/01/introducing-a-new-super-bowl-experience-on-facebook/">Super Bowl</a>.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="https://newsroom.fb.com/news/2014/01/finding-popular-conversations-on-facebook/">Announcement</a><a target="_blank" href="https://newsroom.fb.com/news/2014/12/updates-to-trending/">Updates</a><a target="_blank" href="http://mashable.com/2014/01/16/facebook-trending/">Press Coverage</a>
			</div>
		</div>

		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-trending/thumbs/topic-page.jpg" style="width: 143px; height: 116px;">
					</div>
				</div>
				<label>Topic Page</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-trending/thumbs/rhc.jpg" style="width: 140px; height: 116px;">
					</div>
				</div>
				<label>Sidebar Unit</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_2">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/fb-trending/thumbs/search-units.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Content Sections</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 801px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/fb-trending/topic-page.jpg" style="width: 1001px; height: 801px; position: absolute; left: 50%; margin-left: -500px;">
					<div class="placeholder" style="width: 961px; height: 801px; left: 50%; top: 12px; margin-left: -480px;">
						<div class="desktop-loading-top" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg" style="width: 961px; height: 40px;"></div>
						<div class="desktop-loading-middle" style="background: #FFFFFF; position: absolute; width: 961px; height: 690px; margin-top: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg" style="width: 961px; height: 100%;"></div>
						<div class="desktop-loading-bottom" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px; margin-top: 722px;"><img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg" style="width: 961px; height: 40px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide" id="slide_1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-trending/rhc.jpg" style="width: 1002px; height: 801px;">
				<div class="caption" style="display: block; margin-top: 40px;">The unit shows each topic with a headline for context.</div>
			</div>
		</div>
		<div class="slide" id="slide_2">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/fb-trending/search-units.jpg" style="width: 1122px; height: 724px;">
				<div class="caption" style="display: block; margin-top: 40px;">Each section provides a different way to learn about the story.</div>
			</div>
		</div>
	</div>
</div>

<div id="place-lists" class="section-pointer"></div>

<div id="place-lists-content" class="section light grey monochrome">
	<div class="grey-divider"></div>
	<div class="header">
		<h1>Place Lists</h1>
		<h2>Explore local spots by<br>neighborhood and category.</h2>
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
				<p>I love traveling and documenting my experiences. I make lists to remember places that I've enjoyed in different cities.</p><p>Foursquare has a rich database of places, but I wasn't satisfied with the way you could browse or share lists. I wanted more features and a cleaner layout.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>Using the <a target="_blank" href="https://developer.foursquare.com/places-api">Foursquare API</a>, I built a product that displays the lists I've made, with a page for each list that can be shared.</p><p>Places are ranked by rating and organized by category. You can filter by a combination of category, neighborhood, and rating — or search by any metadata.<p></p></div><div class="text-block">
				<span class="title">Role</span>
				<p>This was a personal project I built during the summer of 2017.</p><p>I designed the interface and built a system for syncing with the Foursquare API to keep the data up to date.</p><p>I engineered all the features to filter, search, and browse places and lists.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="http://places.leo.gd/">All Lists</a><a target="_blank" href="http://places.leo.gd/san-francisco">City Page</a><a target="_blank" href="http://places.leo.gd/san-francisco/food/mexican">Category Filter</a><a target="_blank" href="http://places.leo.gd/san-francisco:mission-district">Neighborhood Filter</a><a target="_blank" href="https://github.com/leomancini31/place-lists">Source Code</a>
			</div>
		</div>
	
		<div class="slide-thumbnail-set">
			<div class="slide-thumbnail-wrapper selected" id="slide_0">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/places-browser/thumbs/mobile.jpg" style="width: 168px; height: 114px;">
					</div>
				</div>
				<label>Mobile</label>
			</div>
			<div class="slide-thumbnail-wrapper" id="slide_1">
				<div class="slide-thumbnail">
					<div class="slide-thumbnail-image">
						<img src="<?php echo $path; ?>content/places-browser/thumbs/desktop.jpg" style="width: 151px; height: 116px;">
					</div>
				</div>
				<label>Desktop</label>
			</div>
		</div>
	</div>

	<div class="content" style="height: 740px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/places-browser/mobile.jpg" style="width: 1122px; height: 724px; position: absolute; left: 50%; margin-left: -561px;">
					<div class="placeholder" style="width: 1132px; height: 724px; left: 50%; margin-left: -566px;">
						<img src="<?php echo $path; ?>content/places-browser/mobile-loading.jpg" style="width: 341px; height: 724px">
						<img src="<?php echo $path; ?>content/places-browser/mobile-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/places-browser/mobile-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
					</div>
				</div>
			</div>
		</div>
		<div class="slide" id="slide_1">
			<div class="slide-contents">
				<img data-delay-load-src="<?php echo $path; ?>content/places-browser/desktop.jpg" style="width: 1001px; height: 740px;">
			</div>
		</div>
	</div>
</div>	

<div id="fb-news-feed-discovery" class="section-pointer"></div>

<div id="fb-news-feed-discovery-content" class="section dark">
	<div class="header">
		<h1>Facebook News Feed Discovery</h1>
		<h2>Discover new and relevant<br>articles, videos, photos, and news.</h2>
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
				<p>Your News Feed is mostly made up of content from your friends and pages you follow.</p><p>This can sometimes make it hard to see different perspectives of a story or discover new sources of content.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>After you read an article or watch a video, suggestions of related content will show up below.</p><p>To add new sources of content into your News Feed, you can browse recommended pages and see what they've posted recently.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>In 2013 and 2014, I worked with the News Feed team to design various features for recommending content and suggesting sources.</p><p>We prototyped and pitched several concepts, variations of which were then further developed and launched.</p></div>
			</div>
			<div class="links">
				<a target="_blank" href="https://newsroom.fb.com/news/2017/04/news-feed-fyi-new-test-with-related-articles/">Articles Announcement</a><a target="_blank" href="https://newsroom.fb.com/news/2014/09/the-latest-on-facebook-video/">Videos Announcement</a><a target="_blank" href="http://patft.uspto.gov/netacgi/nph-Parser?Sect2=PTO1&Sect2=HITOFF&p=1&u=/netahtml/PTO/search-bool.html&r=1&f=G&l=50&d=PALL&RefSrch=yes&Query=PN/9560154">Patent</a>
			</div>
		</div>
	</div>

	<div class="content" style="height: 730px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview.jpg" style="width: 1903px; height: 726px; position: absolute; left: 50%; margin-left: -951px;">
					<div class="placeholder" style="width: 1906px; height: 726px; left: 50%; margin-left: -953px;">
						<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg" style="width: 341px; height: 724px">
						<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
						<img src="<?php echo $path; ?>content/fb-news-feed-discovery/overview-loading.jpg" style="width: 341px; height: 724px; margin-left: 45.5px;">
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>

<div id="fb-pages" class="section-pointer"></div>

<div id="fb-pages-content" class="section light grey monochrome">
	<div class="header">
		<h1>Facebook Pages</h1>
		<h2>Connect and interact with your favorite<br>artists, restaurants, businesses, etc.</h2>
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
				<p>When you see posts from a musician, public figure, restaurant, brand or any other business, it's usually in your News Feed. When you visit their Facebook Page, the layout focuses on their posts – which you likely have already seen.</p><p>Details and other content from the brand or business aren't easily accessible.</p></div><div class="text-block">
				<span class="title">Solution</span>
				<p>To help people get information quickly, we redesigned the layout to highlight content specific to the page's category.</p><p>The sections would be reordered to show you the most relevant data first. A store would have a map and its hours, a restaurant would display photos and a menu, a movie would show videos and reviews.</p></div><div class="text-block">
				<span class="title">Role</span>
				<p>We designed and built a modular layout system. We presented to Mark Zuckerberg and product leadership and iterated based on feedback.</p><p>The redesign didn't launch as originally pitched at the time, but a similar layout highlighting content sections based on category eventually came to Facebook Pages in 2016.</p></div>
			</div>
		</div>

	</div>

	<div class="content" style="height: 958px;">
		<div class="slide selected" id="slide_0">
			<div class="slide-contents">							
				<div class="image-with-loading-placeholder">
					<img src="<?php echo $path; ?>content/fb-pages/page.jpg" style="width: 1001px; height: 958px; position: absolute; left: 50%; margin-left: -500px;">
					<div class="placeholder" style="width: 961px; height: 958px; left: 50%; top: 12px; margin-left: -480px;">
						<div class="desktop-loading-top" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-top.jpg" style="width: 961px; height: 40px;"></div>
						<div class="desktop-loading-middle" style="background: #FFFFFF; position: absolute; width: 961px; height: 850px; margin-top: 40px;"><img src="<?php echo $path; ?>content/common/desktop-loading-middle.jpg" style="width: 961px; height: 100%;"></div>
						<div class="desktop-loading-bottom" style="background: #FFFFFF; position: absolute; width: 961px; height: 40px; margin-top: 878px;"><img src="<?php echo $path; ?>content/common/desktop-loading-bottom.jpg" style="width: 961px; height: 40px;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fb-threaded-comments" class="section-pointer"></div>

<div id="fb-threaded-comments-content" class="section light white monochrome">
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
					<img src="<?php echo $path; ?>content/fb-threaded-comments/desktop-mobile.jpg" style="width: 1133px; height: 933px; position: absolute; left: 50%; margin-left: -566px;">
					<div class="placeholder" style="width: 1113px; height: 916px; left: 50%; top: 13px; margin-left: -566px;">
						<img src="<?php echo $path; ?>content/fb-threaded-comments/desktop-mobile-loading.jpg" style="width: 1113px; height: 916px;">
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php require("views/shared/footer.php"); ?>