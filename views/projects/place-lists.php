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