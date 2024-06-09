"use strict"

function addSwitcher(){
    
			
	var demoPanel = '<div class="dz-demo-panel"><div class="bg-close"></div><a class="dz-demo-trigger" data-bs-toggle="tooltip" data-bs-placement="right" data-original-title="Check out more demos" href="javascript:void(0)"><span><i class="las la-tint"></i></span></a><div class="dz-demo-inner"><a href="javascript:void(0);" class="btn btn-primary btn-sm px-2 py-1 mb-3" onclick="deleteAllCookie()">Delete All Cookie</a><div class="dz-demo-header"><h4>Select A Demo</h4><a class="dz-demo-close" href="javascript:void(0)"><span><i class="las la-times"></i></span></a></div><div class="dz-demo-content"><div class="dz-wrapper"><div class="overlay-bx dz-demo-bx demo-active"><div class="overlay-wrapper rounded-lg"><img src="images/demo/pic1.jpg" alt="" class="w-100"></div><div class="overlay-layer"><a href="javascript:void(0);" data-theme="1" class="btn dz_theme_demo btn-secondary btn-sm me-2">Demo 1</a><a href="javascript:void(0);" data-theme="1" class="btn dz_theme_demo_rtl btn-info btn-sm">RTL Version</a></div></div><h5 class="text-black">Demo 1</h5><hr><div class="overlay-bx dz-demo-bx"><div class="overlay-wrapper rounded-lg"><img src="images/demo/pic2.jpg" alt="" class="w-100"></div><div class="overlay-layer"><a href="javascript:void(0);" data-theme="2" class="btn dz_theme_demo btn-secondary btn-sm me-2">Demo 2</a><a href="javascript:void(0);" data-theme="2" class="btn dz_theme_demo_rtl btn-info btn-sm">RTL Version</a></div></div><h5 class="text-black">Demo 2</h5><hr><div class="overlay-bx dz-demo-bx"><div class="overlay-wrapper rounded-lg"><img src="images/demo/pic3.jpg" alt="" class="w-100"></div><div class="overlay-layer"><a href="javascript:void(0);" data-theme="3" class="btn dz_theme_demo btn-secondary btn-sm me-2">Demo 3</a><a href="javascript:void(0);" data-theme="3" class="btn dz_theme_demo_rtl btn-info btn-sm">RTL Version</a></div></div><h5 class="text-black">Demo 3</h5><hr><div class="overlay-bx dz-demo-bx"><div class="overlay-wrapper rounded-lg"><img src="images/demo/pic4.jpg" alt="" class="w-100"></div><div class="overlay-layer"><a href="javascript:void(0);" data-theme="4" class="btn dz_theme_demo btn-secondary btn-sm me-2">Demo 4</a><a href="javascript:void(0);" data-theme="4" class="btn dz_theme_demo_rtl btn-info btn-sm">RTL Version</a></div></div><h5 class="text-black">Demo 4</h5><hr><div class="overlay-bx dz-demo-bx"><div class="overlay-wrapper rounded-lg"><img src="images/demo/pic5.jpg" alt="" class="w-100"></div><div class="overlay-layer"><a href="javascript:void(0);" data-theme="5" class="btn dz_theme_demo btn-secondary btn-sm me-2">Demo 5</a><a href="javascript:void(0);" data-theme="5" class="btn dz_theme_demo_rtl btn-info btn-sm">RTL Version</a></div></div><h5 class="text-black">Demo 5</h5></div></div><div class="note-text"><span class="text-danger">*Note :</span>This theme switcher is not part of product. It is only for demo. you will get all guideline in documentation. please check<a href="../doc/" target="_blank" class="text-primary">documentation.</a></div></div></div>';
	
	if($("#dzSwitcher").length == 0) {
		jQuery('body').append(dzSwitcher+demoPanel);
		
		$('.sidebar-right-trigger').on('click', function() {
			$('.sidebar-right').toggleClass('show');
		});
		$('.sidebar-close-trigger,.bg-overlay').on('click', function() {
			$('.sidebar-right').removeClass('show');
		});
	}
}

(function($) {
    "use strict"
	addSwitcher();
	
    const body = $('body');
    const html = $('html');

    //get the DOM elements from right sidebar
    const typographySelect = $('#typography');
    const versionSelect = $('#theme_version');
    const layoutSelect = $('#theme_layout');
    const sidebarStyleSelect = $('#sidebar_style');
    const sidebarPositionSelect = $('#sidebar_position');
    const headerPositionSelect = $('#header_position');
    const containerLayoutSelect = $('#container_layout');
    const themeDirectionSelect = $('#theme_direction');

    //change the theme typography controller
    typographySelect.on('change', function() {
        body.attr('data-typography', this.value);
		
		setCookie('typography', this.value);
    });

    //change the theme version controller
    versionSelect.on('change', function() {
		body.attr('data-theme-version', this.value);
		
		if(this.value === 'dark'){
			jQuery('.dz-theme-mode').addClass('active');
			jQuery(".nav-header .logo-compact").attr("src", "page-error-404.html");
			jQuery(".nav-header .brand-title").attr("src", "page-error-404.html");
			
			setCookie('logo_src', 'page-error-404.html');
			setCookie('logo_src2', 'page-error-404.html');
		
		}else{
			jQuery('.dz-theme-mode').removeClass('active');
			
			jQuery(".nav-header .logo-abbr").attr("src", "images/logo.png");
			jQuery(".nav-header .logo-compact").attr("src", "images/logo-text.png");
			jQuery(".nav-header .brand-title").attr("src", "images/logo-text.png");
			
			setCookie('logo_src', 'images/logo.png');
			setCookie('logo_src2', 'images/logo-text.png');
		}
		
		setCookie('version', this.value);
    }); 
	
    //change the sidebar position controller
    sidebarPositionSelect.on('change', function() {
        this.value === "fixed" && body.attr('data-sidebar-style') === "modern" && body.attr('data-layout') === "vertical" ? 
        alert("Sorry, Modern sidebar layout dosen't support fixed position!") :
        body.attr('data-sidebar-position', this.value);
		setCookie('sidebarPosition', this.value);
    });

    //change the header position controller
    headerPositionSelect.on('change', function() {
        body.attr('data-header-position', this.value);
		setCookie('headerPosition', this.value);
    });

    //change the theme direction (rtl, ltr) controller
    themeDirectionSelect.on('change', function() {
        html.attr('dir', this.value);
        html.attr('class', '');
        html.addClass(this.value);
        body.attr('direction', this.value);
		setCookie('direction', this.value);
    });

    //change the theme layout controller
    layoutSelect.on('change', function() {
        if(body.attr('data-sidebar-style') === 'overlay') {
            body.attr('data-sidebar-style', 'full');
            body.attr('data-layout', this.value);
            return;
        }

        body.attr('data-layout', this.value);
		setCookie('layout', this.value);
    });
    
	//change the container layout controller
    containerLayoutSelect.on('change', function() {
        if(this.value === "boxed") {

            if(body.attr('data-layout') === "vertical" && body.attr('data-sidebar-style') === "full") {
                body.attr('data-sidebar-style', 'overlay');
                body.attr('data-container', this.value);
				setCookie('containerLayout', this.value);
                
                setTimeout(function(){
                    $(window).trigger('resize');
                },200);
				
                return;
            }
        }

        body.attr('data-sidebar-style', 'full');
		body.attr('data-container', this.value);
		setCookie('containerLayout', this.value);
    });
	
	var currentURL = window.location.href;
	
	jQuery('#theme_direction').on('change',function(){
		if(html.attr('dir') === "rtl"){
			jQuery('.main-css').attr('href','css/style-rtl.css');
		}else{
			jQuery('.main-css').attr('href','css/style.css')
		}
	});

    //change the sidebar style controller
    sidebarStyleSelect.on('change', function() {
        if(body.attr('data-layout') === "horizontal") {
            if(this.value === "overlay") {
                alert("Sorry! Overlay is not possible in Horizontal layout.");
                return;
            }
        }
        if(body.attr('data-layout') === "vertical") {
            if(body.attr('data-container') === "boxed" && this.value === "full") {
                alert("Sorry! Full menu is not available in Vertical Boxed layout.");
                return;
            }
            if(this.value === "modern" && body.attr('data-sidebar-position') === "fixed") {
                alert("Sorry! Modern sidebar layout is not available in the fixed position. Please change the sidebar position into Static.");
                return;
            }
        }
        body.attr('data-sidebar-style', this.value);

		if(body.attr('data-sidebar-style') === 'icon-hover') {
            $('.deznav').hover(function() {
				$('#main-wrapper').addClass('iconhover-toggle'); 
            }, function() {
				$('#main-wrapper').removeClass('iconhover-toggle'); 
            });
        }		
		setCookie('sidebarStyle', this.value);
	});
	
	//change the nav-header background controller
    $('input[name="navigation_header"]').on('click', function() {
		body.attr('data-nav-headerbg', this.value);
		$('.nav-header').removeAttr('style');
		setCookie('navheaderBg', this.value);
    });
	
    //change the header background controller
    $('input[name="header_bg"]').on('click', function() {
        body.attr('data-headerbg', this.value);
		setCookie('headerBg', this.value);
    });
	
	//change the sidebar text controller
    $('input[name="sidebar_text"]').on('click', function() {
        body.attr('data-sidebartext', this.value);
		setCookie('navTextColor', this.value);
    });
	
	//change the primary color controller
    $('input[name="primary_bg"]').on('click', function() {
        body.attr('data-primary', this.value);
		setCookie('primary', this.value);
    });
	
	
	//change the primary color controller
    $('input[name="sidebar_img_bg"]').on('click', function() {
		var sidebarBgImg = this.value;
		$('.deznav').css('background', 'url(' + sidebarBgImg + ')');
		$('.nav-header').css('background', 'url(' + sidebarBgImg + ')');
		$('.nav-header').addClass('light-logo');
		$('.nav-header').addClass('dez-bg');
		$('.deznav').addClass('dez-bg');
    });
    
    //change the sidebar background controller
    $('input[name="sidebar_bg"]').on('click', function() {
        body.attr('data-sidebarbg', this.value);
		$('.deznav, .nav-header').removeAttr('style');
		setCookie('sidebarBg', this.value);
        $('.deznav').removeClass('dez-bg');
    });
	
    $('#nav_header_color_1').on('click', function() {
		$('.nav-header').removeClass('light-logo');
    });
	
	//change the primary color controller
    $('input[name="sidebar_img_bg"]').on('click', function() {
		var sidebarBgImg = this.value;
		$('.deznav').css('background-image', 'url(' + sidebarBgImg + ')');
		$('.nav-header').css('background-image', 'url(' + sidebarBgImg + ')');
		$('body').attr('data-navigationbarimg',sidebarBgImg);
		$('.nav-header').addClass('nav-header-brand');
		$('.deznav').addClass('dz-bg');
		
		setCookie('navigationBarImg', this.value);
	});
	
	//change the theme color controller
    $('input[name="themecolor_bg"]').on('click', function() {
        body.attr('data-theme', this.value);
		setCookie('themeBg', this.value);
    });
	
	//remove the sidebar image 
    $('.remove-img').on('click', function() {	
		$('.deznav, .nav-header').removeAttr('style');
		$('.deznav, .nav-header').removeClass('dz-bg');
		$('.deznav,.nav-header').removeClass('dez-bg');
		$('.nav-header').removeClass('light-logo');
			
		$('body').attr('data-navigationbarimg','');
		jQuery('.chk-col-primary').prop('checked', false);
		setCookie('navigationBarImg', '');
    });
	
})(jQuery);