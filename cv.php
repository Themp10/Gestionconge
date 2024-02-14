<html class="theme-color-e8676b light_skin desktop cssall cssgradients rgba opacity supports textshadow cssanimations bgrepeatround bgrepeatspace boxshadow csstransforms csstransforms3d csstransitions">

<head>
    <style>
        .gm-style-moc{background-color:rgba(0,0,0,.45);pointer-events:none;text-align:center;transition:opacity ease-in-out}.gm-style-mot{color:white;font-family:Roboto,Arial,sans-serif;font-size:22px;margin:0;position:relative;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}
    </style>
    <style>
        .gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}
    </style>
    <style>
        .gm-style-moc{background-color:rgba(0,0,0,.45);pointer-events:none;text-align:center;transition:opacity ease-in-out}.gm-style-mot{color:white;font-family:Roboto,Arial,sans-serif;font-size:22px;margin:0;position:relative;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}
    </style>
    <style>
        .gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2016/01/favicon-2-2-1-1.png">
    <title>Startuper – Just another Rs Card Sites site</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="//maps.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <script src="//www.googletagmanager.com/gtag/js?id=UA-71657642-2" data-cfasync="false" data-wpfc-render="false" type="text/javascript" async=""></script>
    <script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
        var em_version = '7.3.1';
        var em_track_user = true;
        var em_no_track_reason = '';
        
        				var disableStrs = [
        											'ga-disable-UA-71657642-2',
        					];
        
        /* Function to detect opted out users */
        function __gtagTrackerIsOptedOut() {
        	for ( var index = 0; index < disableStrs.length; index++ ) {
        		if ( document.cookie.indexOf( disableStrs[ index ] + '=true' ) > -1 ) {
        			return true;
        		}
        	}
        
        	return false;
        }
        
        /* Disable tracking if the opt-out cookie exists. */
        if ( __gtagTrackerIsOptedOut() ) {
        	for ( var index = 0; index < disableStrs.length; index++ ) {
        		window[ disableStrs[ index ] ] = true;
        	}
        }
        
        /* Opt-out function */
        function __gtagTrackerOptout() {
        	for ( var index = 0; index < disableStrs.length; index++ ) {
        		document.cookie = disableStrs[ index ] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
        		window[ disableStrs[ index ] ] = true;
        	}
        }
        
        if ( 'undefined' === typeof gaOptout ) {
        	function gaOptout() {
        		__gtagTrackerOptout();
        	}
        }
        				window.dataLayer = window.dataLayer || [];
        
        window.ExactMetricsDualTracker = {
        	helpers: {},
        	trackers: {},
        };
        if ( em_track_user ) {
        	function __gtagDataLayer() {
        		dataLayer.push( arguments );
        	}
        
        	function __gtagTracker( type, name, parameters ) {
        		if (!parameters) {
        			parameters = {};
        		}
        
        		if (parameters.send_to) {
        			__gtagDataLayer.apply( null, arguments );
        			return;
        		}
        
        		if ( type === 'event' ) {
        			
        											parameters.send_to = exactmetrics_frontend.ua;
        				__gtagDataLayer( type, name, parameters );
        									} else {
        			__gtagDataLayer.apply( null, arguments );
        		}
        	}
        	__gtagTracker( 'js', new Date() );
        	__gtagTracker( 'set', {
        		'developer_id.dNDMyYj' : true,
        							} );
        											__gtagTracker( 'config', 'UA-71657642-2', {"forceSSL":"true"} );
        						window.gtag = __gtagTracker;											(function () {
        
        			var noopfn = function () {
        				return null;
        			};
        			var newtracker = function () {
        				return new Tracker();
        			};
        			var Tracker = function () {
        				return null;
        			};
        			var p = Tracker.prototype;
        			p.get = noopfn;
        			p.set = noopfn;
        			p.send = function (){
        				var args = Array.prototype.slice.call(arguments);
        				args.unshift( 'send' );
        				__gaTracker.apply(null, args);
        			};
        			var __gaTracker = function () {
        				var len = arguments.length;
        				if ( len === 0 ) {
        					return;
        				}
        				var f = arguments[len - 1];
        				if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
        					if ( 'send' === arguments[0] ) {
        						var hitConverted, hitObject = false, action;
        						if ( 'event' === arguments[1] ) {
        							if ( 'undefined' !== typeof arguments[3] ) {
        								hitObject = {
        									'eventAction': arguments[3],
        									'eventCategory': arguments[2],
        									'eventLabel': arguments[4],
        									'value': arguments[5] ? arguments[5] : 1,
        								}
        							}
        						}
        						if ( 'pageview' === arguments[1] ) {
        							if ( 'undefined' !== typeof arguments[2] ) {
        								hitObject = {
        									'eventAction': 'page_view',
        									'page_path' : arguments[2],
        								}
        							}
        						}
        						if ( typeof arguments[2] === 'object' ) {
        							hitObject = arguments[2];
        						}
        						if ( typeof arguments[5] === 'object' ) {
        							Object.assign( hitObject, arguments[5] );
        						}
        						if ( 'undefined' !== typeof arguments[1].hitType ) {
        							hitObject = arguments[1];
        							if ( 'pageview' === hitObject.hitType ) {
        								hitObject.eventAction = 'page_view';
        							}
        						}
        						if ( hitObject ) {
        							action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
        							hitConverted = mapArgs( hitObject );
        							__gtagTracker( 'event', action, hitConverted );
        						}
        					}
        					return;
        				}
        
        				function mapArgs( args ) {
        					var arg, hit = {};
        					var gaMap = {
        						'eventCategory': 'event_category',
        						'eventAction': 'event_action',
        						'eventLabel': 'event_label',
        						'eventValue': 'event_value',
        						'nonInteraction': 'non_interaction',
        						'timingCategory': 'event_category',
        						'timingVar': 'name',
        						'timingValue': 'value',
        						'timingLabel': 'event_label',
        						'page' : 'page_path',
        						'location' : 'page_location',
        						'title' : 'page_title',
        					};
        					for ( arg in args ) {
        																if ( ! ( ! args.hasOwnProperty(arg) || ! gaMap.hasOwnProperty(arg) ) ) {
        							hit[gaMap[arg]] = args[arg];
        						} else {
        							hit[arg] = args[arg];
        						}
        					}
        					return hit;
        				}
        
        				try {
        					f.hitCallback();
        				} catch ( ex ) {
        				}
        			};
        			__gaTracker.create = newtracker;
        			__gaTracker.getByName = newtracker;
        			__gaTracker.getAll = function () {
        				return [];
        			};
        			__gaTracker.remove = noopfn;
        			__gaTracker.loaded = true;
        			window['__gaTracker'] = __gaTracker;
        		})();
        					} else {
        						console.log( "" );
        	( function () {
        			function __gtagTracker() {
        				return null;
        			}
        			window['__gtagTracker'] = __gtagTracker;
        			window['gtag'] = __gtagTracker;
        	} )();
        					}
    </script>
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/rscard.px-lab.com\/startuper\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.4"}};
        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <script src="https://rscard.px-lab.com/startuper/wp-includes/js/wp-emoji-release.min.js?ver=5.8.4" type="text/javascript" defer=""></script>
    <script src="https://rscard.px-lab.com/startuper/wp-includes/js/wp-emoji-release.min.js?ver=5.8.4" type="text/javascript" defer=""> </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
        	display: inline !important;
        	border: none !important;
        	box-shadow: none !important;
        	height: 1em !important;
        	width: 1em !important;
        	margin: 0 .07em !important;
        	vertical-align: -0.1em !important;
        	background: none !important;
        	padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://rscard.px-lab.com/startuper/wp-includes/css/dist/block-library/style.min.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=6.5.2" type="text/css" media="all">
    <link rel="stylesheet" id="wc-blocks-style-css" href="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=6.5.2" type="text/css" media="all">
    <link rel="stylesheet" id="extendify-utilities-css" href="https://rscard.px-lab.com/startuper/wp-content/plugins/redux-framework/extendify-sdk/public/build/extendify-utilities.css?ver=0.1.0" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel="stylesheet" id="rscard-woocommerce-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/woocommerce/css/woocommerce.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="rscard-woocommerce-layout-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/woocommerce/css/woocommerce-layout.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="rscard-woocommerce-smallscreen-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/woocommerce/css/woocommerce-smallscreen.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="google-font0-css" href="https://fonts.googleapis.com/css?family=Fredoka+One&amp;ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="Open Sans-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&amp;ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="Fredoka One-css" href="https://fonts.googleapis.com/css?family=Fredoka+One%3A400&amp;ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="icon-fonts-map-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/fonts/map-icons/css/map-icons.min.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="icon-fonts-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/fonts/icomoon/style.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="bxslider-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.bxslider/jquery.bxslider.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="custom-scroll-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="mediaelement-player-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.mediaelement/mediaelementplayer.min.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.owlcarousel/owl.carousel.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-theme-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.owlcarousel/owl.theme.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="slick-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.slick/slick.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="rscard-style-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/style.css?ver=5.8.4" type="text/css" media="all">
    <link rel="stylesheet" id="theme-color-css" href="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/colors/theme-color.css?ver=5.8.4" type="text/css" media="all">
    <script type="text/javascript" id="exactmetrics-frontend-script-js-extra">
        /* <![CDATA[ */
        var exactmetrics_frontend = {"js_events_tracking":"true","download_extensions":"zip,mp3,mpeg,pdf,docx,pptx,xlsx,rar","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/rscard.px-lab.com\/startuper","hash_tracking":"false","ua":"UA-71657642-2","v4_id":""};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/google-analytics-dashboard-for-wp/assets/js/frontend-gtag.min.js?ver=7.3.1" id="exactmetrics-frontend-script-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <script type="text/javascript" id="main-js-extra">
        /* <![CDATA[ */
        var ajax_var = {"url":"https:\/\/rscard.px-lab.com\/startuper\/wp-admin\/admin-ajax.php","nonce":"46fd4bee39"};
        var date = {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"weeks":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/site.js?ver=1" id="main-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/libs/modernizr.js?ver=5.8.4" id="modernizr-js"></script>
    <link rel="https://api.w.org/" href="https://rscard.px-lab.com/startuper/wp-json/">
    <link rel="alternate" type="application/json" href="https://rscard.px-lab.com/startuper/wp-json/wp/v2/pages/310">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://rscard.px-lab.com/startuper/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://rscard.px-lab.com/startuper/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.8.4">
    <meta name="generator" content="WooCommerce 6.1.2">
    <link rel="canonical" href="https://rscard.px-lab.com/startuper/">
    <link rel="shortlink" href="https://rscard.px-lab.com/startuper/">
    <link rel="alternate" type="application/json+oembed" href="https://rscard.px-lab.com/startuper/wp-json/oembed/1.0/embed?url=https%3A%2F%2Frscard.px-lab.com%2Fstartuper%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://rscard.px-lab.com/startuper/wp-json/oembed/1.0/embed?url=https%3A%2F%2Frscard.px-lab.com%2Fstartuper%2F&amp;format=xml">
    <meta name="framework" content="Redux 4.3.7">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style type="text/css">
        body,
        select,
        textarea,
        input[type='tel'],
        input[type='text'],
        input[type='email'],
        input[type='search'],
        input[type='password'],
        .btn,
        .filter button,
        .nav-wrap .nav a,
        .mobile-nav .nav a {
                                font-family: "Open Sans";
                            }
        				
        				.logo,
        				.site-title {
                                font-family: "Fredoka One";
                            }
        				
        				h1,
        				h2,
        				h3,
        				h4,
        				h5,
        				h6  {
                                font-family: "Open Sans";
                            }
        				.head-bg:before {
        	background-color: rgba(44, 51, 64, 0.8);
        }
    </style> <noscript>
        <style>
            .woocommerce-product-gallery{ opacity: 1 !important; }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
    </style>
    <style type="text/css" id="wp-custom-css">
        #map {
        	display: none;
        }		
    </style>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/overlay.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/stats.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/overlay.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/stats.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/2/intl/fr_ALL/onion.js"></script>
</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-310 theme-rs-card woocommerce-js header-has-img masthead-fixed" cz-shortcut-listen="true" style="margin-right: 0px; margin-bottom: 0px;">
    <div class="mobile-nav"> <button class="btn-mobile mobile-nav-close"><i class="rsicon rsicon-close"></i></button>
        <div id="mobile-nav" class="mobile-nav-inner mCustomScrollbar _mCS_1 mCS_no_scrollbar">
            <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0">
                        <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                            <div class="head-items"> <a class="head-woo" href="https://rscard.px-lab.com/startuper/cart/"> <i class="rsicon rsicon-shopping-basket"></i> <span class="head-woo-count">0</span> </a> </div>
                            <nav class="nav">
                                <ul class="clearfix">
                                    <li id="menu-item-468" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#about">About</a></li>
                                    <li id="menu-item-469" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#skills">Skills</a></li>
                                    <li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#education">Education</a></li>
                                    <li id="menu-item-479" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#references">References</a></li>
                                    <li id="menu-item-471" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#calendar">Calendar</a></li>
                                    <li id="menu-item-472" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#contact">Contact</a></li>
                                    <li id="menu-item-477" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#">Other</a><span class="rsicon rsicon-chevron-down"></span> </li>
                                </ul>
                            </nav>
                        </div>
                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: none;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; top: 0px; height: 0px;" oncontextmenu="return false;">
                                    <div class="mCSB_dragger_bar" style="line-height: 0px;"></div>
                                    <div class="mCSB_draggerRail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;" oncontextmenu="return false;">
                            <div class="mCSB_dragger_bar"></div>
                            <div class="mCSB_draggerRail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <header class="header" style="min-height: 60px;">
            <div class="head-bg" style="background-image: url('https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2016/02/rs-cover-2-2-1-1.jpg')"></div>
            <div class="head-bar has-woo has-sidebar head-sticky-classic animated head-sticky">
                <div class="head-bar-inner">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-xs-6"> <a class="logo" href="https://rscard.px-lab.com/startuper/"> <span>RS</span>card </a> </div>
                        <div class="col-lg-10 col-md-9 col-xs-6">
                            <div class="head-cont clearfix"> <button class="btn-mobile btn-mobile-nav">Menu</button>
                                <div id="head-nav" class="head-nav">
                                    <nav class="nav">
                                        <ul class="clearfix">
                                            <li id="menu-item-468" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#about">Présentation</a></li>
                                            <li id="menu-item-469" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#skills">Compétences</a></li>
                                            <li id="menu-item-474" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children"><a href="https://rscard.px-lab.com/startuper/#experience">Expérience professionnelle</a><span class="rsicon rsicon-chevron-down"></span>
                                            <li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#education">Formation</a></li>
                                            <li id="menu-item-479" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#interests">Loisirs</a></li>
                                            <li id="menu-item-472" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="https://rscard.px-lab.com/startuper/#contact">Contact</a></li>
                                            <li id="menu-item-470" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active"><a href="https://rscard.px-lab.com/startuper/#portfolio">Portfolio</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="container">
                <section id="about" class="section section-about">
                    <div class="animate-up animated">
                        <div class="section-box">
                            <div class="profile">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="profile-photo"> <img alt="" src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/startuper-1.jpg" srcset="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/startuper-1.jpg 2x" class="photo"> <img alt="" src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/startuper-hover-1-299x347.jpg" srcset="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/startuper-hover-1-598x644.jpg 2x" class="photo-hover"> </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="profile-info">
                                            <div class="profile-items clearfix">
                                                <div class="profile-preword"><span>Bonjour</span></div>
                                            </div>
                                            <h1 class="profile-title"> <span>Je suis</span> ABOUJAAFAR Oussama </h1>
                                            <h2 class="profile-position">Développeur informatique - DevOps</h2>
                                        </div>
                                        <ul class="profile-list">
                                            <li class="clearfix"> <strong class="title">Né le</strong> <span class="cont">09/10/1993</span> </li>
                                            <li class="clearfix"> <strong class="title">Address</strong> <span class="cont">Boulevard Hassan 2, Résidence Galia Bat E APT 11,28830, Mohammedia Maroc </span> </li>
                                            <li class="clearfix"> <strong class="title">E-mail</strong> <span class="cont">Oussamaaboujaafar@gmail.com </span> </li>
                                            <li class="clearfix"> <strong class="title">Tel</strong> <span class="cont">+212 7 08 34 06 31</span> </li>
                                            <li class="clearfix"> <strong class="title">Dev chez Koutoubia</strong> <span class="cont">depuis Juin 28, 2020</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-social">
                                <ul class="social">
                                    <li><a href="https://twitter.com/_pxlab" target="_blank"><i class="rsicon rsicon-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/pxlaboratory/" target="_blank"><i class="rsicon rsicon-facebook"></i></a></li>
                                    <li><a href="https://dribbble.com/Px-Lab" target="_blank"><i class="rsicon rsicon-dribbble"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="rsicon rsicon-linkedin"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank"><i class="rsicon rsicon-instagram"></i></a></li>
                                    <li><a href="https://plus.google.com/" target="_blank"><i class="rsicon rsicon-google-plus"></i></a></li>
                                    <li><a href="https://plus.google.com/" target="_blank"><i class="rsicon rsicon-telegram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="section-txt-btn">
                            <p><a class="btn btn-lg btn-border ripple" target="_blank" href="https://bit.ly/1P5CMQ3"> Download Resume </a></p>
                            <p>Hello! I’m Robert Smith. Senior Web Developer specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in numerous programming languages including JavaScript, SQL, and C. Stng background in project management and customer relations.</p>
                        </div>
                    </div>
                </section>
                <section id="skills" class="section section-skills">
                    <div class="animate-up animated">
                        <h2 class="section-title">Professional Skills</h2>
                        <div class="section-box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="progress-bar animated">
                                        <div class="bar-data"> <span class="bar-title">WordPress</span> </div>
                                        <div class="bar-line"> <span class="bar-fill" data-width="80%" style="width: 80%;"></span> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress-bar animated">
                                        <div class="bar-data"> <span class="bar-title">HTML &amp; CSS</span> </div>
                                        <div class="bar-line"> <span class="bar-fill" data-width="89%" style="width: 89%;"></span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="progress-bar animated">
                                        <div class="bar-data"> <span class="bar-title">JavaScript</span> </div>
                                        <div class="bar-line"> <span class="bar-fill" data-width="52%" style="width: 52%;"></span> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress-bar animated">
                                        <div class="bar-data"> <span class="bar-title">PHP &amp; MySQL</span> </div>
                                        <div class="bar-line"> <span class="bar-fill" data-width="99%" style="width: 99%;"></span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="progress-bar animated">
                                        <div class="bar-data"> <span class="bar-title">Drupal</span> </div>
                                        <div class="bar-line"> <span class="bar-fill" data-width="61%" style="width: 61%;"></span> </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress-bar animated">
                                        <div class="bar-data"> <span class="bar-title">Photoshop</span> </div>
                                        <div class="bar-line"> <span class="bar-fill" data-width="97%" style="width: 97%;"></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="experience" class="section section-experience">
                    <div class="animate-up animated">
                        <h2 class="section-title">Work Experience</h2>
                        <div class="timeline">
                            <div class="timeline-bar" style="top: 80px; height: 668.6px;"></div>
                            <div class="timeline-inner clearfix" style="height: 1009.9px;">
                                <div class="timeline-box timeline-box-left" style="position: absolute; left: 0px; top: 0px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right animated"> <span class="arrow"></span>
                                        <div class="timeline-head">
                                            <div class="date">2014 - 2016</div> <a class="img" href="#"> <img src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-envato-1-2-2-1-1.png" alt=""> </a>
                                            <h4>Full Stack developer</h4>
                                        </div>
                                        <p>Worked as part of a multi-disciplinary team, carrying out ad-hoc tasks as requested by the IT Manager. Had a specific brief to ensure the websites build for customer’s precisely matched their requirements.developers and marketers.</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-right" style="position: absolute; right: 0px; top: 50px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left animated"> <span class="arrow"></span>
                                        <div class="timeline-head">
                                            <div class="date">2011 - 2014</div> <a class="img" href="#"> <img src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-angularjs-1-2-2-1-1.png" alt=""> </a>
                                            <h4>Web Developer</h4>
                                        </div>
                                        <p>I was responsible for working on a range of projects, designing appealing websites and interacting on a daily basis with graphic designers, back-end developers and marketers.</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-left" style="position: absolute; left: 0px; top: 329.3px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right animated"> <span class="arrow"></span>
                                        <div class="timeline-head">
                                            <div class="date">2008 - 2011</div> <a class="img" href="#"> <img src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-bootstrap-1-2-2-1-1.png" alt=""> </a>
                                            <h4>Systems Analyst / Web Developer</h4>
                                        </div>
                                        <p>Rebuilt and enhanced existing ASP B2C site with ASP.NET 2.0 Framework and tools. Technology consists of ASP.NET 2.0 (C#), IIS, Microsoft SQL Server 2005, Stored Procedures &amp; PayPal Instant Payment Notification.</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-right" style="position: absolute; right: 0px; top: 375.3px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left animated"> <span class="arrow"></span>
                                        <div class="timeline-head">
                                            <div class="date">2004 - 2008</div> <a class="img" href="#"> <img src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-jquery-1-2-2-1-1.png" alt=""> </a>
                                            <h4>Webmaster / Web Developer</h4>
                                        </div>
                                        <p>Developed, managed, operated and promoted an Internet business.Handled customer support issues.Planned and managed business finances.</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-left" style="position: absolute; left: 0px; top: 668.6px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right animated"> <span class="arrow"></span>
                                        <div class="timeline-head">
                                            <div class="date">2003 - 2004</div> <a class="img" href="#"> <img src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-compass-1-2-2-1-1.png" alt=""> </a>
                                            <h4>Intern</h4>
                                        </div>
                                        <p>This was beginning of my career. Developed, managed, operated and promoted an Internet business.Handled customer support issues.</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-right" style="position: absolute; right: 0px; top: 667.6px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left animated"> <span class="arrow"></span>
                                        <div class="timeline-head">
                                            <div class="date">2000 - 2003</div> <a class="img" href="#"> <img src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-teaspoon-1-2-2-1-1.png" alt=""> </a>
                                            <h4>Taxi Driver</h4>
                                        </div>
                                        <p>Driving from point A to point B and if necessary to point C and sometimes even to point R and point S. I was known as experienced driver. Once my passenger who was a web developer told me about his job and I have made my decision at that moment to became a developer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="education" class="section section-education">
                    <div class="animate-up animated">
                        <h2 class="section-title">Education</h2>
                        <div class="timeline">
                            <div class="timeline-bar" style="top: 80px; height: 363.2px;"></div>
                            <div class="timeline-inner clearfix" style="height: 507.7px;">
                                <div class="timeline-box timeline-box-compact timeline-box-left" style="position: absolute; left: 0px; top: 0px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right animated"> <span class="arrow"></span>
                                        <div class="date">2012 - 2014</div>
                                        <h3>Master of Information Technology</h3> <img class="img" src="" alt="">
                                        <h4> <a href="https://themeforest.net/item/resume-cv-portfolio-wordpress/14502131-lab?ref=PX-lab"> MIT&amp;T </a> </h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-right" style="position: absolute; right: 0px; top: 50px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left animated"> <span class="arrow"></span>
                                        <div class="date">2008 - 2012</div>
                                        <h3>Bachelor Computer Engineering</h3> <img class="img" src="" alt="">
                                        <h4> <a href="https://themeforest.net/item/resume-cv-portfolio-wordpress/14502131-lab?ref=PX-lab"> Harwarg Universitey </a> </h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-left" style="position: absolute; left: 0px; top: 169.5px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right animated"> <span class="arrow"></span>
                                        <div class="date">2007 - 2008</div>
                                        <h3>Certificate for courses of Computer Science</h3> <img class="img" src="" alt="">
                                        <h4> <a href="https://themeforest.net/item/resume-cv-portfolio-wordpress/14502131-lab?ref=PX-lab"> Stanfoorb Universitey </a> </h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-right" style="position: absolute; right: 0px; top: 219.5px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left animated"> <span class="arrow"></span>
                                        <div class="date">2007 - 2008</div>
                                        <h3>1 week Courses of Information Systems</h3> <img class="img" src="" alt="">
                                        <h4> <a href="https://themeforest.net/item/resume-cv-portfolio-wordpress/14502131-lab?ref=PX-lab"> Oxforz Universitey </a> </h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-left" style="position: absolute; left: 0px; top: 363.2px;"> <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right animated"> <span class="arrow"></span>
                                        <div class="date">2006 - 2007</div>
                                        <h3>Software Engineering</h3> <img class="img" src="" alt="">
                                        <h4> <a href="https://themeforest.net/item/resume-cv-portfolio-wordpress/14502131-lab?ref=PX-lab"> Sordonne University </a> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="interests" class="section section-interests">
                    <div class="animate-up animated">
                        <h2 class="section-title">My Interests</h2>
                        <div class="section-box">
                            <p>Send Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nuncl them Toruk Macto calls to them!<br> You fly now,</p>
                            <ul class="interests-list">
                                <li> <i class="map-icon map-icon-bicycling"></i> <span style="left: 6.89165px;">Bicycling</span> </li>
                                <li> <i class="map-icon map-icon-movie-theater"></i> <span style="left: -6.64165px;">Watch Movies</span> </li>
                                <li> <i class="map-icon map-icon-ice-skating"></i> <span style="left: 10.325px;">Skating</span> </li>
                                <li> <i class="map-icon map-icon-shopping-mall"></i> <span style="left: 4.81665px;">Shopping</span> </li>
                                <li> <i class="map-icon map-icon-tennis"></i> <span style="left: -7.58335px;">Playing Tennis</span> </li>
                                <li> <i class="map-icon map-icon-bowling-alley"></i> <span style="left: -10.95px;">Playing Bowling</span> </li>
                                <li> <i class="map-icon map-icon-swimming"></i> <span style="left: 2.4px;">Swimming</span> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="contact" class="section section-contact">
                    <div class="animate-up animated">
                        <h2 class="section-title">Contact Us</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="section-box" style="min-height: 587px;">
                                    <h3>Feel free to contact me</h3>
                                    <form class="contactForm" action="#" method="post">
                                        <div class="input-field"> <input class="contact-name" type="text" name="name"> <span class="line"></span> <label>Name</label> </div>
                                        <div class="input-field"> <input class="contact-email" type="email" name="email"> <span class="line"></span> <label>Email</label> </div>
                                        <div class="input-field"> <input class="contact-subject" type="text" name="subject"> <span class="line"></span> <label>Subject</label> </div>
                                        <div class="input-field"> <textarea class="contact-message" rows="4" name="message"></textarea> <span class="line"></span> <label>Message</label> </div>
                                        <div class="g-recaptcha" data-theme="light" data-sitekey="" id="recaptcha1"></div>
                                        <div class="check-field"> <input type="checkbox" name="rsPivacyPolicy" id="rsPivacyPolicy"> <label for="rsPivacyPolicy">I have read the Privacy Policy note.</label> </div><span class="btn-outer btn-primary-outer ripple"> <input class="contact-submit btn btn-lg btn-primary" type="submit" value="Send"> </span>
                                        <div class="contact-response"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="section-box contact-info has-map" style="min-height: 587px;">
                                    <ul class="contact-list">
                                        <li class="clearfix"> <strong>E-mail </strong> <span><a href="/cdn-cgi/l/email-protection#36445954534442455b5f425e7655595b4657584f1855595b"><span class="__cf_email__" data-cfemail="9ceef3fef9eee8eff1f5e8f4dcfff3f1ecfdf2e5b2fff3f1">[email&nbsp;protected]</span></a></span> </li>
                                        <li class="clearfix"> <strong>Phone</strong> <span>+1 256 254 84 56</span> </li>
                                        <li class="clearfix"> <strong>Viber</strong> <span>+1 256 254 84 56</span> </li>
                                        <li class="clearfix"> <strong>Skype</strong> <span>robsmithcompany</span> </li>
                                        <li class="clearfix"> <strong>Address</strong> <span>24058, Belgium, Brussels, Liutte 27, BE</span> </li>
                                    </ul>
                                    <div id="map" data-latitude="50.84592" data-longitude="4.366859999999974" style="overflow: hidden;">
                                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                            <div style="overflow: hidden;"></div>
                                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style">
                                                <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;" tabindex="0" aria-label="Carte" aria-roledescription="carte" role="region">
                                                    <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px);">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -190, -31);">
                                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -190, -31);">
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                                </div>
                                                            </div>
                                                            <div style="width: 44px; height: 48px; position: absolute; left: -22px; top: -48px; z-index: 0;"><canvas style="width: 44px; height: 48px; position: absolute; left: 0px; top: 0px; user-select: none;" draggable="false" width="44" height="48"></canvas></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                    </div>
                                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                                <div class="map-icon-label" style="display: block; left: -0.393429px; top: -0.498887px;"><span class="map-icon map-icon-postal-code"></span></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="6E0DF5D2-8E42-4339-85E0-5624AA4D3E51" style="display: none;">Pour naviguer, appuyez sur les touches fléchées.</span>
                                                                <div style="width: 44px; height: 48px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -22px; top: -48px; z-index: 0;" title="" tabindex="-1"><img style="width: 44px; height: 48px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-moc">
                                                        <p class="gm-style-mot"></p>
                                                    </div>
                                                </div><iframe aria-hidden="true" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: medium none;" frameborder="0"></iframe>
                                                <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="text_section" class="section section-text">
                    <div class="animate-up animated">
                        <h2 class="section-title">Transparent Text Section</h2>
                        <div class="section-box-transparent">
                            <p>Hello! I’m Robert Smith and this is custom editor section. You can add here any text or <del>“Strikethrough” text </del> and even you can add bulleted or numbered text and even you will be able to add blockquot text. You can align this text to left/right/center.</p>
                        </div>
                    </div>
                </section>
                <section id="portfolio" class="section section-portfolio">
                    <div class="animate-up animated">
                        <h2 class="section-title">Portfolio</h2>
                        <div class="section-box-transparent">
                            <div class="filter">
                                <div class="filter-inner">
                                    <div class="filter-btn-group"> <button data-filter="*" class="active">All</button> <button data-filter=".pf-19" class="">Photography</button> <button data-filter=".pf-20" class="active">UX design</button> </div>
                                    <div class="filter-bar"> <span class="filter-bar-line" style="left: 0px; width: 34.7333px;"></span> </div>
                                </div>
                            </div>
                            <div class="pf-grid pf-container" data-popup="type1" data-view="grid" style="position: relative; height: 295.467px;">
                                <div class="pf-grid-sizer"></div>
                                <div class="pf-grid-item size22 pf-19 animated" style="position: absolute; left: 0%; top: 0px; display: none;">
                                    <article class="pf-item" style="background-image: url('https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/photo-1422480041422-130238c67fe2-1-2-2-1-1-607x576.jpg')">
                                        <div class="pf-item-cont text-left clear-mrg"> <img class="pf-item-logo" src="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/11/logo-jquery-1-2-2-1-1.png" alt="">
                                            <h2 class="pf-item-title">Dreams visualization</h2>
                                            <div class="pf-item-cat"> <span>Photography </span> </div>
                                        </div>
                                        <div class="pf-btn-group text-left"> <a class="pf-btn pf-btn-zoom" href="#"><i class="rsicon rsicon-zoom_in"></i></a> <a class="pf-btn pf-btn-eye" href="https://rscard.px-lab.com/startuper/portfolio/street-photography/"><i class="rsicon rsicon-eye"></i></a> <a target="_blank" class="pf-btn pf-btn-link" href="https://photodune.net/?osr=tn&amp;_ga=1.93421085.1097235765.1428662395"><i class="rsicon rsicon-link"></i></a> </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-media">
                                                    <div class="pf-embed" data-type="image" data-width="670" data-height="470" data-url="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/portfolio-thumb-09-610x600-1-2-2-1-1-610x452.jpg"></div>
                                                </div>
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h2 class="pf-popup-title">Street Photography</h2>
                                                        <h3 class="pf-popup-cat"><span>Photography </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg">
                                                            <p>The methods for creating poetic rhythm vary across languages and between poetic traditions. Languages are often described as having timing set primarily by accents, syllables, or moras, depending on how rhythm is established, though a language can be influenced by multiple approaches.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-media">
                                                    <div class="pf-embed" data-type="image" data-width="670" data-height="470" data-url="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/portfolio-thumb-08-610x600-1-2-2-1-1-610x452.jpg"></div>
                                                </div>
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h3 class="pf-popup-cat"><span>Photography </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg">
                                                            <p>The methods for creating poetic rhythm vary across languages and between poetic traditions. Languages are often described as having timing set primarily by accents, syllables, or moras, depending on how rhythm is established, though a language can be influenced by multiple approaches.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h2 class="pf-popup-title">Project Title</h2>
                                                        <h3 class="pf-popup-cat"><span>Photography </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg">
                                                            <p>The methods for creating poetic rhythm vary across languages and between poetic traditions. Languages are often described as having timing set primarily by accents, syllables, or moras, depending on how rhythm is established, though a language can be influenced by multiple approaches.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="pf-grid-item size11 pf-19 pf-20 animated" style="position: absolute; left: 0%; top: 0px;">
                                    <article class="pf-item" style="background-image: url('https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/kaboompics-1-2-1-1-294x278.jpg')">
                                        <div class="pf-item-cont text-left clear-mrg">
                                            <h2 class="pf-item-title">Time is Chronos</h2>
                                            <div class="pf-item-cat"> <span>Photography </span><span>UX design </span> </div>
                                        </div>
                                        <div class="pf-btn-group text-left"> <a class="pf-btn pf-btn-zoom" href="#"><i class="rsicon rsicon-zoom_in"></i></a> <a target="_blank" class="pf-btn pf-btn-link" href="https://photodune.net/?osr=tn&amp;_ga=1.93421085.1097235765.1428662395"><i class="rsicon rsicon-link"></i></a> </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-media">
                                                    <div class="pf-embed" data-type="image" data-width="670" data-height="470" data-url="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/portfolio-thumb-02-610x6001-1-2-2-1-1-610x452.jpg"></div>
                                                </div>
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h3 class="pf-popup-cat"><span>Photography </span><span>UX design </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h3 class="pf-popup-cat"><span>Photography </span><span>UX design </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg">
                                                            <p>In the broadest sense, is the natural, physical, or material world or universe. “Nature” can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="pf-grid-item size11 pf-20 animated" style="position: absolute; left: 33.2258%; top: 0px;">
                                    <article class="pf-item" style="background-image: url('https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/photo-1421757295538-9c80958e75b0-2-2-1-1-294x278.jpg')">
                                        <div class="pf-item-cont text-left clear-mrg">
                                            <h2 class="pf-item-title">Office selection</h2>
                                            <div class="pf-item-cat"> <span>UX design </span> </div>
                                        </div>
                                        <div class="pf-btn-group text-left"> <a class="pf-btn pf-btn-zoom" href="#"><i class="rsicon rsicon-zoom_in"></i></a> <a target="_blank" class="pf-btn pf-btn-link" href="https://photodune.net/?osr=tn&amp;_ga=1.93421085.1097235765.1428662395"><i class="rsicon rsicon-link"></i></a> </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-media">
                                                    <div class="pf-embed" data-type="image" data-width="670" data-height="470" data-url="https://rscard.px-lab.com/startuper/wp-content/uploads/sites/2/2015/12/portfolio-thumb-03-610x600-1-2-2-1-1-610x452.jpg"></div>
                                                </div>
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h3 class="pf-popup-cat"><span>UX design </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pf-popup-slide">
                                            <div class="pf-popup-item">
                                                <div class="pf-popup-media">
                                                    <div class="pf-embed" data-type="iframe" data-width="670" data-height="470" data-url="https://www.youtube.com/embed/mZb_gat5YCY"></div>
                                                </div>
                                                <div class="pf-popup-info">
                                                    <header class="pf-popup-head clear-mrg">
                                                        <h2 class="pf-popup-title">Beautiful Nature</h2>
                                                        <h3 class="pf-popup-cat"><span>UX design </span></h3>
                                                    </header>
                                                    <div class="pf-popup-cont">
                                                        <dl class="pf-popup-def-list">
                                                            <dt>Client</dt>
                                                            <dd>Client name</dd>
                                                            <dt>Project</dt>
                                                            <dd>Project name</dd>
                                                            <dt>Other title</dt>
                                                            <dd>Description</dd>
                                                        </dl>
                                                        <div class="pf-popup-text clear-mrg">
                                                            <p>Human society and forests influence each other in both positive and negative ways. Forests provide ecosystem services to humans and serve as tourist attractions. Forests can also impose costs, affect people’s health, and interfere with tourist enjoyment. Human activities, including harvesting forest resources, can negatively affect forest ecosystems.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="pf-grid-more text-center" data-cat="[19,20]" data-tax="1" data-path="/home/pxlab/domains/rscard.px-lab.com/public_html/wp-content/themes/rs-card/inc/components/portfolio.php" data-count="3" data-more-count="3" data-offset="3" data-popup_style="single_popup" data-display_type="grid" data-loaded-count="0" style="display: none;"> <span class="ajax-loader"></span> <button class="btn btn-border ripple"><i class="rsicon rsicon-add"></i></button> </div>
                        </div>
                    </div>
                </section>
                <section id="statistics" class="section section-statistics text-left">
                    <div class="animate-up animated">
                        <h2 class="section-title">Any Statistics</h2>
                        <div class="section-box-transparent">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="statistic">
                                        <div class="statistic-value animated">1300</div>
                                        <h3 class="statistic-title"> <i class="rsicon rsicon-smile-o"></i> Happy Clients </h3>
                                        <div class="statistic-cont">
                                            <p>keep clients happy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="statistic">
                                        <div class="statistic-value animated">203</div>
                                        <h3 class="statistic-title"> <i class="rsicon rsicon-folder-open"></i> Projects </h3>
                                        <div class="statistic-cont">
                                            <p>for 4 years</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="statistic">
                                        <div class="statistic-value animated">145</div>
                                        <h3 class="statistic-title"> <i class="rsicon rsicon-code"></i> Code Rows </h3>
                                        <div class="statistic-cont">
                                            <p>per hour</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="statistic">
                                        <div class="statistic-value animated">15000</div>
                                        <h3 class="statistic-title"> <i class="rsicon rsicon-share"></i> Followers </h3>
                                        <div class="statistic-cont">
                                            <p>per month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-social">
                <ul class="social">
                    <li><a href="https://twitter.com/_pxlab" target="_blank"><i class="rsicon rsicon-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/pxlaboratory/" target="_blank"><i class="rsicon rsicon-facebook"></i></a></li>
                    <li><a href="https://dribbble.com/Px-Lab" target="_blank"><i class="rsicon rsicon-dribbble"></i></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="rsicon rsicon-linkedin"></i></a></li>
                    <li><a href="https://instagram.com/" target="_blank"><i class="rsicon rsicon-instagram"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="rsicon rsicon-google-plus"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="rsicon rsicon-telegram"></i></a></li>
                </ul>
            </div>
        </footer>
    </div> <a href="#" class="btn-scroll-top" style="display: inline;"><i class="rsicon rsicon-arrow-up"></i></a>
    <div id="overlay"></div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        (function () {
        	var c = document.body.className;
        	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        	document.body.className = c;
        })();
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/rs-card-contact-form/js/contact-form.js?ver=5.8.4" id="contact-form-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.1.2" id="jquery-blockui-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {"ajax_url":"\/startuper\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/startuper\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/rscard.px-lab.com\/startuper\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.1.2" id="wc-add-to-cart-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.1.2" id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {"ajax_url":"\/startuper\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/startuper\/?wc-ajax=%%endpoint%%"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.1.2" id="woocommerce-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {"ajax_url":"\/startuper\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/startuper\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_cacc13f2ae3c736c81d167a01ee0407b","fragment_name":"wc_fragments_cacc13f2ae3c736c81d167a01ee0407b","request_timeout":"5000"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.1.2" id="wc-cart-fragments-js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKjR4TkjH_DXHAP8p618UZVyRMytS41Ew&amp;ver=5.8.4" id="maps-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/fonts/map-icons/js/map-icons.min.js?ver=5.8.4" id="map-icons-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-includes/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/isotope.pkgd.min.js?ver=5.8.4" id="isotope-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.appear.js?ver=5.8.4" id="appear-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.onepagenav.min.js?ver=5.8.4" id="onepagenav-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.bxslider/jquery.bxslider.min.js?ver=5.8.4" id="bxslider-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.concat.min.js?ver=5.8.4" id="mCustomScrollbar-js"></script>
    <script type="text/javascript" id="mediaelement-core-js-before">
        var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.16" id="mediaelement-core-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.8.4" id="mediaelement-migrate-js"></script>
    <script type="text/javascript" id="mediaelement-js-extra">
        /* <![CDATA[ */
        var _wpmejsSettings = {"pluginPath":"\/startuper\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.owlcarousel/owl.carousel.js?ver=5.8.4" id="owl-carousel-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.slick/slick.min.js?ver=5.8.4" id="slick-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-content/themes/rs-card/js/plugins/jquery.smartsticky.js?ver=5.8.4" id="smartsticky-js"></script>
    <script type="text/javascript" src="https://rscard.px-lab.com/startuper/wp-includes/js/wp-embed.min.js?ver=5.8.4" id="wp-embed-js"></script>
    <div style="position: absolute; left: 0px; top: -2px; height: 1px; overflow: hidden; visibility: hidden; width: 1px;"><span style="position: absolute; font-size: 300px; width: auto; height: auto; margin: 0px; padding: 0px; font-family: Roboto, Arial, sans-serif;">BESbswy</span></div>
    <div style="position: absolute; left: 0px; top: -2px; height: 1px; overflow: hidden; visibility: hidden; width: 1px;"><span style="position: absolute; font-size: 300px; width: auto; height: auto; margin: 0px; padding: 0px; font-family: Roboto, Arial, sans-serif;">BESbswy</span></div>
</body>

</html>