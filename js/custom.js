!function(e){"use strict";jQuery(window).on("load",function(){jQuery("#status").fadeOut(),jQuery("#preloader").delay(350).fadeOut("slow")}),jQuery(document).ready(function(e){e(window);e(window).scroll(function(){e(window).scrollTop()+1>300?e(".gc_main_menu_wrapper").addClass("menu_fixed animated fadeInDown"):e(".gc_main_menu_wrapper").removeClass("menu_fixed animated fadeInDown")}),e(window).scroll(function(){e(this).scrollTop()>100?e("#scroll").fadeIn():e("#scroll").fadeOut()}),e("#scroll").on("click",function(){return e("html, body").animate({scrollTop:0},600),!1}),e("#search_button").on("click",function(i){e("#search_open").slideToggle(),i.stopPropagation()}),e(document).on("click",function(i){i.target.closest("#search_open")||e("#search_open").slideUp()}),e("#toggle").on("click",function(){var i=e("#sidebar").width();0==e("#sidebar").offset().left?e("#sidebar").animate({left:-i},"slow"):e("#sidebar").animate({left:"0"},"slow")}),e("#toggle_close").on("click",function(){var i=e("#sidebar").width();0==e("#sidebar").offset().left?e("#sidebar").animate({left:-i},"slow"):e("#sidebar").animate({left:"0"},"slow")}),function(e){e(document).ready(function(){e("#cssmenu li.active").addClass("open").children("ul").show(),e("#cssmenu li.has-sub>a").on("click",function(){e(this).removeAttr("href");var i=e(this).parent("li");i.hasClass("open")?(i.removeClass("open"),i.find("li").removeClass("open"),i.find("ul").slideUp(200)):(i.addClass("open"),i.children("ul").slideDown(200),i.siblings("li").children("ul").slideUp(200),i.siblings("li").removeClass("open"),i.siblings("li").find("li").removeClass("open"),i.siblings("li").find("ul").slideUp(200))})})}(jQuery),e(document).ready(function(){e(".btc_team_slider_wrapper .owl-carousel").owlCarousel({loop:!0,margin:10,autoplay:!0,responsiveClass:!0,smartSpeed:1200,navText:['<i class="flaticon-left-arrow" aria-hidden="true"></i>','<i class="flaticon-right-arrow" aria-hidden="true"></i>'],responsive:{0:{items:1,nav:!0},600:{items:2,nav:!0},1000:{items:3,nav:!0,loop:!0,margin:20}}})}),e(document).ready(function(){e(".btc_partner_slider_wrapper .owl-carousel").owlCarousel({loop:!0,margin:10,autoplay:!0,responsiveClass:!0,smartSpeed:1200,navText:['<i class="flaticon-left-arrow" aria-hidden="true"></i>','<i class="flaticon-right-arrow" aria-hidden="true"></i>'],responsive:{100:{items:1,nav:!0},300:{items:2,nav:!0},600:{items:4,nav:!0},1000:{items:6,nav:!0,loop:!0,margin:20}}})}),e(document).ready(function(){e(".cc_ps_top_slider_section .owl-carousel").owlCarousel({loop:!0,margin:10,autoplay:!1,responsiveClass:!0,smartSpeed:1200,navText:['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],responsive:{0:{items:1,nav:!0},600:{items:1,nav:!0},1000:{items:1,nav:!0,loop:!0,margin:20}}})}),e(document).ready(function(){e(".btc_blog_cate_client_slider_wrapper .owl-carousel").owlCarousel({loop:!0,margin:10,autoplay:!0,responsiveClass:!0,smartSpeed:1200,navText:['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],responsive:{0:{items:1,nav:!0},600:{items:1,nav:!0},1000:{items:1,nav:!0,loop:!0,margin:20}}})});var i=jQuery;i(document).ready(function(){null==i("#rev_slider_24_1").revolution?revslider_showDoubleJqueryError("#rev_slider_24_1"):i("#rev_slider_24_1").show().revolution({sliderType:"standard",jsFileLocation:"revolution/js/",sliderLayout:"fullscreen",dottedOverlay:"none",delay:9e3,navigation:{keyboardNavigation:"off",keyboard_direction:"horizontal",mouseScrollNavigation:"off",mouseScrollReverse:"default",onHoverStop:"off",bullets:{enable:!0,hide_onmobile:!1,style:"bullet-bar",hide_onleave:!1,direction:"horizontal",h_align:"center",v_align:"bottom",h_offset:0,v_offset:50,space:5,tmp:""}},responsiveLevels:[1240,1024,778,480],visibilityLevels:[1240,1024,778,480],gridwidth:[1240,1024,778,480],gridheight:[868,768,960,720],lazyType:"none",shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",fullScreenAutoWidth:"off",fullScreenAlignForce:"off",fullScreenOffsetContainer:"",fullScreenOffset:"60px",hideThumbsOnMobile:"off",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,debugMode:!1,fallbacks:{simplifyAll:"off",nextSlideOnWindowFocus:"off",disableFocusListener:!1}})})})}();