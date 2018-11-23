function show_slide(slide_thumbnail_set, slide_id, this_thumbnail) {
	section = slide_thumbnail_set.parent().parent(".section");
	content = section.children(".content");
	number_of_slides = slide_thumbnail_set.children().length;
	
	if(number_of_slides > 1) {
		// add selected style to this slide's thumbnail
		this_thumbnail.addClass("selected");
	
		// remove selected style from all other thumbnails
		slide_thumbnail_set.children(".slide-thumbnail-wrapper").not(this_thumbnail).removeClass("selected");
	
		// hide all other slides
		content.children(".slide").not("#"+slide_id).removeClass("selected");

		// get height of next slide
		next_slide_content_height = Math.round(content.children(".slide#"+slide_id).height());
		
		// wait, then change content height to fit next slide
		setTimeout(function() {
			if(section.data("negative-bottom-offset")) {
				content.height(next_slide_content_height - section.data("negative-bottom-offset"));
			} else {
				content.height(next_slide_content_height);
			}
		
			// wait, then show next slide
			setTimeout(function() {
				content.children(".slide#"+slide_id).addClass("selected");
			}, 200);
		}, 200);
	}
	
	// check if there is a video in this slide
	video = content.children(".slide#"+slide_id).children(".slide-contents").find("video")[0];
	
	// if there is a video, play it
	if(video) {
		setTimeout(function() {
			video.play();
		}, 500);
	}
	
	content.children(".slide").each(function() {
		var other_video = $(this).children(".slide-contents").find("video")[0];
		if(other_video) {
			setTimeout(function() {
				other_video.pause();
				other_video.currentTime = 0;
			}, 100);
		}
	});
}

function toggle_expanded_content(section_id_function_variable) {
	if(Object.prototype.toString.call(section_id_function_variable) == '[object Object]') {
		section_id = $(this).parent(".section").attr("id");
	} else {
		section_id = section_id_function_variable;
	}
	
	section = $("#"+section_id);
	expanded_content = section.children(".expanded-content");
	info_button = section.children("button#info-button");
	
	if(expanded_content.attr("data-expanded") == 0) {
		// EXPAND
		
		// send event to Google Analytics for logging
		gtag('event', section_id, { 'event_category': 'expand' });
		
		// ----- load images -----
		
		// load images
		section.children(".content").children(".slide").children(".slide-contents").find("img").each(function() {
			source = $(this).attr("data-delay-load-src");
			
			if(source) {
				$(this).attr("src", source);
			}
		})
		
		// load videos
		section.children(".content").children(".slide").children(".slide-contents").find("video").each(function() {
			source = $(this).children("source").attr("data-delay-load-src");

			if(source) {
				$(this).children("source").attr("src", source);
				$(this)[0].load();
			}
		})
		
		// ----- content transition -----
		
		// set variable "expanded" to true
		expanded_content.attr("data-expanded", 1);
	
		// expand height
		expanded_content_description_height = Math.round(expanded_content.children(".description").height());
		expanded_content_slide_thumbnail_set_height = Math.round(expanded_content.children(".slide-thumbnail-set").height());
		
		if(section.children(".content").length > 0) {
			content_margin_top = parseInt(section.children(".content").css("margin-top").replace("px", ""));
		} else {
			content_margin_top = 60;
		}
		
		if(expanded_content_slide_thumbnail_set_height) {
			expanded_content.css("height", expanded_content_description_height + expanded_content_slide_thumbnail_set_height + content_margin_top);	
		} else {		
			expanded_content.css("height", expanded_content_description_height + content_margin_top);
		}
	
		// wait, then fade in and scale up
		setTimeout(function() {
			expanded_content.css("opacity", "1");
			// expanded_content.css("transform", "scale(1)");

			// wait, then show slide thumbnail set
			setTimeout(function() {
				expanded_content.children(".slide-thumbnail-set").css("opacity", "1");
			}, 200);
		}, 300);
	
		// toggle class on content
		expanded_content.addClass("visible");
		
		// ----- button transition -----
			
		// toggle class on button
		info_button.removeClass("expand").addClass("collapse");
		
		// fade out expand label ("more info")
		info_button.children(".info-button-content.expand").css("opacity", "0");
		
		// wait, then make button smaller
		setTimeout(function() {
			info_button.css("width", "32px");
	
			// wait, then fade in collapse label ("x")
			setTimeout(function() {
				info_button.children(".info-button-content.collapse").css("opacity", "1");
			}, 150);
	
		}, 100);
		
	} else {
		// COLLAPSE
		
		// send event to Google Analytics for logging
		gtag('event', section_id, { 'event_category': 'collapse' });
		
		// ----- content transition -----
		
		// set variable "expanded" to false
		expanded_content.attr("data-expanded", 0);

		// hide slide thumbnail set
		expanded_content.children(".slide-thumbnail-set").css("opacity", "0");
		
		// wait, then fade out and scale down
		setTimeout(function() {
			expanded_content.css("opacity", "0");
			// expanded_content.css("transform", "scale(0.95)");

			// wait, then collapse height
			setTimeout(function() {
				expanded_content.css("height", "0");
			}, 500);
			
		}, 100);

		// toggle class on content
		expanded_content.removeClass("visible");

		// ----- button transitio -----
			
		// toggle class on button
		info_button.removeClass("collapse").addClass("expand");

		// fade out collapse label ("x")
		info_button.children(".info-button-content.collapse").css("opacity", "0");
	
		// wait, then make button wider
		setTimeout(function() {
			info_button.css("width", "120px");
			
			// wait, then fade in expand label ("more info")
			setTimeout(function() {
				info_button.children(".info-button-content.expand").css("opacity", "1");
			}, 200);
			
		}, 100);
		
		show_slide(expanded_content.children(".slide-thumbnail-set"), "slide_0", expanded_content.children(".slide-thumbnail-set").children(".slide-thumbnail-wrapper").first());
	}
	
	setTimeout(function() {
		$(".section-pointer").each(function() {
			section_id = $(this).attr("id");
			window.section_position[section_id] = Math.round($(this).offset().top);
		});
		
		window.section_map = build_map_of_sections(window.section_ids);
	}, 1500);
}

$(document).ready(function() { 
	if(window.this_page == "index") {
		$("button#info-button").bind("click", toggle_expanded_content);

		$(".slide-thumbnail-set .slide-thumbnail-wrapper").click(function() {
			// get some info about this instance of slides and slide thumbnails
			slide_thumbnail_set = $(this).parent();
			slide_id = $(this).attr("id");
		
			show_slide(slide_thumbnail_set, slide_id, $(this));
		});
	
		$("#navigation a").click(function() {
			$(this).addClass("selected");
			$("#navigation a").not($(this)).removeClass("selected");
		});
	}
	
	setTimeout(function() {
		$("#container").addClass("loaded");

		if(window.this_page == "index") {
			setTimeout(function() {
				window.section_position = Array();
	
				$(".section-pointer").each(function() {
					section_id = $(this).attr("id");
					window.section_position[section_id] = Math.round($(this).offset().top);
				});
	
				window.section_ids = Array();
	
				$(".section").each(function() {
					window.section_ids.push($(this).attr("id").replace("-content", ""));
				});
		
				window.section_map = build_map_of_sections(window.section_ids);
				
				var scroll_position = $(window).scrollTop();
				
				update_navigation_link_selected_states(scroll_position, window.section_ids);
				update_navigation_position_state(scroll_position);	
				update_location_hash_on_scroll(scroll_position);
			}, 100);
		}
	}, 200);

});

function build_map_of_sections(section_ids) {
	var section_map = [[]];
	
	section_ids.forEach(function(section_id) {	
		section_map[section_id] = [];
		section_map[section_id]["top"] = window.section_position[section_id] - 50;
		section_map[section_id]["bottom"] = (window.section_position[section_id] + $(".section#"+section_id+"-content").height() - 50);
	});

	return section_map;
}

function update_navigation_link_selected_states(scroll_position, section_ids) {
	if(section_ids) {
		if(scroll_position < $("header").height()) {
			$("#navigation a[data-section-id='"+section_ids[0]+"']").addClass("selected");
		}
		section_ids.forEach(function(section_id) {
			if( scroll_position > 0 &&
				scroll_position >= window.section_map[section_id]["top"] &&
				scroll_position < window.section_map[section_id]["bottom"]
			) {
				$("#navigation a").removeClass("selected");
				$("#navigation a[data-section-id='"+section_id+"']").addClass("selected");
				window.section_id_in_view = section_id;
			}
		});
	}
}

function update_navigation_position_state(scroll_position) {
	if(scroll_position > $("header").height()) {
		$("#navigation").addClass("fixed");
		$("#navigation-fixed-spacer").addClass("fixed");
	} else {
		$("#navigation").removeClass("fixed");
		$("#navigation-fixed-spacer").removeClass("fixed");
	}
}

function update_location_hash_on_scroll(scroll_position) {
	if(scroll_position < $("header").height()) {
		window.set_location_hash = false;
	} else {
		window.set_location_hash = true;
	}
	
	if(window.set_location_hash == true) {
		if(location.hash !== '#'+window.section_id_in_view && typeof window.section_id_in_view !== "undefined") {
			// switch location hash to section in view
			if(history.pushState) {
				history.pushState(null, null, '#'+window.section_id_in_view);
			} else {
				location.hash = '#'+window.section_id_in_view;
			}
		}
	} else {
		if(location.hash != "" || location.hash == "#undefined") {
			// reset location hash to empty
			if(history.pushState) {
				history.pushState("", document.title, window.location.pathname + window.location.search);
			} else {
				location.hash = "#";
			}
		}
	}
}

$(window).on("scroll touchmove", function(e) {
	if(window.this_page == "index") {
		var scroll_position = $(window).scrollTop();
		
		update_navigation_link_selected_states(scroll_position, window.section_ids);
		update_navigation_position_state(scroll_position);	
		update_location_hash_on_scroll(scroll_position);
	}
});