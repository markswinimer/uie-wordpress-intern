$(document).ready(function() {
	$("a.smooth").smoothScroll({
		speed: 760,
		easing: "easeInOutCubic",
		afterScroll: function() {
			window.location.href = $(this).eq(0).attr("href");
		}
	});

	$(".fancybox").fancybox({
		openEffect: 'elastic',
		openEasing: 'easeOutCubic',
		closeEffect: 'elastic',
		closeEasing: 'easeOutQuad',
		speedIn: 140,
		speedOut: 140
	});

	$(".fancybox-media").fancybox({
		openEffect: 'elastic',
		openEasing: 'easeOutCubic',
		closeEffect: 'elastic',
		closeEasing: 'easeOutQuad',
		speedIn: 140,
		speedOut: 140,
		width: 800,
		height: 450,
		aspectRatio: true,
		tpl: {
			wrap: '<div class="fancybox-wrap fancybox-media" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>'
		},
		helpers: {
			media: {},
			title: {
				type: 'inside',
				position: 'bottom'
			}
		}
	});

	$("a.menu-toggle")
		.on("click", function(event) {
			var toggleSpeed = 320,
			    easing = "easeOutQuint";

			if (parseInt($(".nav").css("height"), 10) > 0) {
				// this is open, close it
				$(".nav")
					.stop()
					.animate({
						borderTopWidth: 8
					}, toggleSpeed, easing)
					.find(".live-page")
						.stop()
						.slideUp(toggleSpeed, easing, function() {
						$(this).attr("style", "");
					});
			} else {
				// this is closed, open it
				$(".nav")
					.stop()
					.animate({
						borderTopWidth: 0
					}, toggleSpeed, easing)
					.find(".live-page")
						.stop()
						.slideDown(toggleSpeed, easing)
			}

			event.preventDefault();
			event.stopPropagation();
		});
});
