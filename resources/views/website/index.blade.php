<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Home</title>

	<?php echo view('website/layout/header'); ?>

</head>

<body class="home page-template page-template-full-width page-template-full-width-php page page-id-13 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-smooth-page-transitions mkdf-smooth-page-transitions-preloader mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
	<!-- <div class="mkdf-smooth-transition-loader mkdf-mimic-ajax">
		<div class="mkdf-st-loader">
			<div class="mkdf-st-loader1">
				<div class="mkdf-reveal-image"><img src="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/04/preloader-img.png"
						alt="spinner" />
					<div class="mkdf-spinner-revealer"></div>
				</div>
			</div>
		</div>
	</div> -->
	<?php echo view('website/layout/sidebar'); ?>
	<div class="mkdf-wrapper">
		<div class="mkdf-wrapper-inner">
			<div class="mkdf-top-bar" style="background-color:#5095cc;">
				<div class="mkdf-vertical-align-containers">
					<div class="mkdf-position-left">
						<div class="mkdf-position-left-inner">
							<div id="text-2" class="widget widget_text mkdf-top-bar-widget">
								<div class="textwidget">
									<p>Opening hours / Monday &#8211; Friday / 08:00 &#8211; 18:00</p>
								</div>
							</div>
						</div>
					</div>
					<div class="mkdf-position-center">
						<div class="mkdf-position-center-inner">
						</div>
					</div>
					<div class="mkdf-position-right">
						<div class="mkdf-position-right-inner">

							<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
							</div>
							<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->facebook}}" target="_blank">
								<span class="mkdf-social-icon-widget   ion-social-facebook   "></span> </a>
							<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;border-color:#ffffff;margin-left:30px"></span>
							</div>
							<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->twitter}}" target="_blank">
								<span class="mkdf-social-icon-widget   ion-social-instagram   "></span> </a>
							<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
							</div>
							<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->linkdin}}" target="_blank">
								<span class="mkdf-social-icon-widget   ion-social-linkedin   "></span> </a>
							<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
							</div>
							<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->trustpilot}}" target="_blank">
								<span class="mkdf-social-icon-widget   ion-social-pinterest   "></span> </a>

						</div>
					</div>
				</div>
			</div>
			<?php echo view('website/layout/nav'); ?>
			<?php echo view('website/layout/nav-mobile'); ?>

			<a id='mkdf-back-to-top' href='#'>
				<span class="mkdf-icon-stack" style="background-color:#5095cc; border:#5095cc;">
					<span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> </span>
			</a>
			<div class="mkdf-content" style="margin-top: -70px">
				<div class="mkdf-content-inner">
					<div class="mkdf-full-width">
						<div class="mkdf-full-width-inner">
							<div class="mkdf-grid-row">
								<div class="mkdf-page-content-holder mkdf-grid-col-12">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_revslider_element wpb_content_element">
														<p class="rs-p-wp-fix"></p>
														<rs-module-wrap id="rev_slider_2_2_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
															<rs-module id="rev_slider_2_2" data-version="6.2.23">
																<rs-slides>
																	@if($slider)
																	@foreach($slider as $slider_key => $slider_val)
																	<rs-slide data-key="rs-{{$slider_key}}" data-title="Slide" data-thumb="//anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-slider1-background-img-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slideremoveleft;sl:d;" data-firstanim="t:fade;s:300;sl:7;">
																		<img src="{{asset('/public/images') .'/'. $slider_val->image}}" title="Main Home" data-parallax="8" class="rev-slidebg" data-no-retina>
																		<rs-layer id="slider-2-slide-2-layer-3" data-type="image" data-xy="xo:300px,120px,75px,40px;y:m;yo:-143px,-131px,-127px,-203px;" data-text="l:22;a:inherit;" data-dim="w:216px,191px,191px,216px;h:51px,45px,45px,51px;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:700;sp:800;sR:700;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2000;" style="z-index:5;"></rs-layer>
																		<rs-layer id="slider-2-slide-2-layer-1" data-type="text" data-color="#aa9166" data-xy="xo:300px,120px,75px,40px;y:m;yo:-52px,-51px,-48px,-111px;" data-text="w:nowrap,nowrap,nowrap,normal;s:80,70,60,45;l:110,90,80,55;a:inherit;" data-dim="w:auto,auto,auto,303px;h:auto,auto,auto,111px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:900;sp:800;sR:900;" data-frame_999="o:0;tp:600;st:w;sR:1800;" style="z-index:6;font-family:Lustria; line-height: 70px; padding: 12px;">
																			<h3>
																				{{$slider_val->title}}
																			</h3>
																			<h3>
																				{{$slider_val->sub_title}}
																			</h3>
																		</rs-layer>
																		<rs-layer id="slider-2-slide-2-layer-4" data-type="text" data-color="#000000" data-xy="xo:300px,120px,75px,40px;y:m;yo:142px,128px,122px,123px;" data-text="l:22;a:inherit;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:8;">
																			<a itemprop="url" href="{{url('/contact')}}" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
																				<span class="mkdf-btn-text">Contact Us</span>
																			</a>
																		</rs-layer>
																		<rs-layer id="slider-2-slide-2-layer-5" data-type="text" data-color="#000000" data-xy="xo:500px,320px,275px,40px;y:m;yo:142px,128px,122px,180px;" data-text="l:22;a:inherit;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:9;">

																		</rs-layer>
																	</rs-slide>
																	@endforeach
																	@endif
																	<!-- <rs-slide data-key="rs-14" data-title="Slide" data-thumb="//anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-slider1-background-img-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slideremoveleft;sl:d;" data-firstanim="t:fade;s:300;sl:7;">
																		<img src="{{asset('/public/website/assets/wp-content/uploads/2018/03/port-img-2-1100x550.jpg')}}" title="Main Home" data-parallax="8" class="rev-slidebg" data-no-retina>
																		<rs-layer id="slider-2-slide-14-layer-3" data-type="image" data-xy="xo:300px,120px,75px,40px;y:m;yo:-143px,-131px,-127px,-203px;" data-text="l:22;a:inherit;" data-dim="w:216px,191px,191px,216px;h:51px,45px,45px,51px;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:700;sp:800;sR:700;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2000;" style="z-index:5;">
																		</rs-layer>
																		<rs-layer id="slider-2-slide-14-layer-1" data-type="text" data-color="#aa9166" data-xy="xo:300px,120px,75px,40px;y:m;yo:-52px,-51px,-48px,-111px;" data-text="w:nowrap,nowrap,nowrap,normal;s:80,70,60,45;l:110,90,80,55;a:inherit;" data-dim="w:auto,auto,auto,303px;h:auto,auto,auto,111px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:900;sp:800;sR:900;" data-frame_999="o:0;tp:600;st:w;sR:1800;" style="z-index:6;font-family:Lustria; line-height: 70px; padding: 12px;">
																			<h3>
																				Aa firm Described as ‘Remarkable’ and
																				one
																				that <br>
																				‘Genuinely Impresses’ – Legal 500
																			</h3>
																		</rs-layer>
																		<rs-layer id="slider-2-slide-14-layer-4" data-type="text" data-color="#000000" data-xy="xo:300px,120px,75px,40px;y:m;yo:142px,128px,122px,123px;" data-text="l:22;a:inherit;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:8;">
																			<a itemprop="url" href="javascript:void(0)" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid" style="background-color:#5095cc ;">
																				<span class="mkdf-btn-text">Contact Us</span>
																			</a>
																		</rs-layer>
																		<rs-layer id="slider-2-slide-14-layer-5" data-type="text" data-color="#000000" data-xy="xo:500px,320px,275px,40px;y:m;yo:142px,128px,122px,180px;" data-text="l:22;a:inherit;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:9;">

																		</rs-layer>
																	</rs-slide> -->

																	<!-- <rs-slide data-key="rs-5" data-title="Slide" data-thumb="//anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-slider2-background-img-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slideremoveleft;sl:d;">
																		<img src="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-slider2-background-img.jpg" title="Main Home" data-parallax="8" class="rev-slidebg" data-no-retina>
																		<rs-layer id="slider-2-slide-5-layer-1" data-type="image" data-xy="xo:300px,120px,75px,40px;y:m;yo:-143px,-131px,-127px,-203px;" data-text="l:22;a:inherit;" data-dim="w:216px,191px,191px,216px;h:51px,45px,45px,51px;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:700;sp:800;sR:700;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2000;" style="z-index:5;">

																		</rs-layer>
																		<rs-layer id="slider-2-slide-5-layer-2" data-type="text" data-color="#aa9166" data-xy="xo:300px,120px,75px,40px;y:m;yo:-52px,-51px,-48px,-112px;" data-text="w:nowrap,nowrap,nowrap,normal;s:80,70,60,45;l:110,90,80,55;a:inherit;" data-dim="w:auto,auto,auto,303px;h:auto,auto,auto,111px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:900;sp:800;sR:900;" data-frame_999="o:0;tp:600;st:w;sR:1800;" style="z-index:6;font-family:Lustria;  line-height: 70px; padding: 12px;">
																			<h3> Leading Law Firm <br>Specialising in
																				Criminal Defence </h3>
																		</rs-layer>

																		<rs-layer id="slider-2-slide-5-layer-4" data-type="text" data-color="#000000" data-xy="xo:300px,120px,75px,40px;y:m;yo:142px,128px,122px,122px;" data-text="l:22;a:inherit;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:8;"><a itemprop="url" href="#" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid" style="background-color:#5095cc ;">
																				<span class="mkdf-btn-text">Contact
																					Us</span>
																			</a>
																		</rs-layer>
																		<rs-layer id="slider-2-slide-5-layer-5" data-type="text" data-color="#000000" data-xy="xo:500px,320px,275px,40px;y:m;yo:142px,128px,122px,180px;" data-text="l:22;a:inherit;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:9;">

																		</rs-layer>
																	</rs-slide> -->

																	</rs-layer>

																	</rs-layer>
																	</rs-slide>
																</rs-slides>
															</rs-module>
															<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
															<script type="text/javascript">
																setREVStartSize({
																	c: 'rev_slider_2_2',
																	rl: [1920, 1720, 1025, 480],
																	el: [],
																	gw: [1300, 1100, 600, 300],
																	gh: [760, 500, 550, 450],
																	type: 'standard',
																	justify: '',
																	layout: 'fullwidth',
																	mh: "0"
																});
																var revapi2,
																	tpj;

																function revinit_revslider22() {
																	jQuery(function() {
																		tpj = jQuery;
																		revapi2 = tpj("#rev_slider_2_2");
																		if (revapi2 == undefined || revapi2.revolution == undefined) {
																			revslider_showDoubleJqueryError("rev_slider_2_2");
																		} else {
																			revapi2.revolution({
																				sliderLayout: "fullwidth",
																				duration: 3500,
																				visibilityLevels: "1920,1720,1025,480",
																				gridwidth: "1300,1100,600,300",
																				gridheight: "760,500,550,450",
																				perspectiveType: "local",
																				responsiveLevels: "1920,1720,1025,480",
																				progressBar: {
																					disableProgressBar: true
																				},
																				navigation: {
																					keyboardNavigation: true,
																					mouseScrollNavigation: false,
																					onHoverStop: false,
																					arrows: {
																						enable: true,
																						style: "anwalt-navigation",
																						hide_onmobile: true,
																						hide_under: 1025,
																						left: {

																						},
																						right: {

																						}
																					},
																					bullets: {
																						enable: true,
																						tmp: "",
																						style: "anwalt-navigation",
																						hide_over: 1024,
																						space: 15
																					}
																				},
																				parallax: {
																					levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
																					type: "mouse"
																				},
																				viewPort: {
																					enable: true,
																					visible_area: "1%"
																				},
																				fallbacks: {
																					allowHTML5AutoPlayOnAndroid: true
																				},
																			});
																		}

																	});
																} // End of RevInitScript
																var once_revslider22 = false;
																if (document.readyState === "loading") {
																	document.addEventListener('readystatechange', function() {
																		if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider22) {
																			once_revslider22 = true;
																			revinit_revslider22();
																		}
																	});
																} else {
																	once_revslider22 = true;
																	revinit_revslider22();
																}
															</script>
															<script>
																var htmlDivCss = unescape("%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows%20%7B%0A%20%20width%3A%2040px%3B%0A%20%20height%3A%2040px%3B%0A%20%20line-height%3A%2040px%3B%0A%20%20background%3A%20transparent%3B%0A%20%7D%0A%20%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows%3Abefore%20%7B%0A%20color%3A%20%23000%3B%0A%20font-size%3A36px%3B%0A%20font-family%3A%20%22Linearicons-Free%22%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows%3Ahover%3Abefore%20%7B%0A%20%20color%3A%20%23aa9166%3B%0A%7D%0A%20%20%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows.tp-leftarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce875%22%3B%0A%7D%0A%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows.tp-rightarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce876%22%3B%0A%7D%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20width%3A%2010px%3B%0A%20%20height%3A%2010px%3B%0A%20%20margin%3A%200%204px%3B%0A%20%20border-radius%3A%203em%3B%0A%20%20background-color%3A%20transparent%3B%0A%20%20border%3A%202px%20solid%20%23c2aa80%3B%0A%20%20box-sizing%3A%20border-box%3B%0A%20%20-webkit-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20-moz-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%7D%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation%20.tp-bullet.selected%2C%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation%20.tp-bullet%3Ahover%20%7B%0A%20%20background-color%3A%20%23c2aa80%3B%0A%7D%0A");
																var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
																if (htmlDiv) {
																	htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
																} else {
																	var htmlDiv = document.createElement('div');
																	htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
																	document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
																}
															</script>
															<script>
																var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A");
																var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
																if (htmlDiv) {
																	htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
																} else {
																	var htmlDiv = document.createElement('div');
																	htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
																	document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
																}
															</script>
														</rs-module-wrap>

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper ">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1520428609185">


												@if($expertise)
												@foreach($expertise as $expertise_val)
												<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
																<div class="mkdf-iwt-icon">
																	<a itemprop="url" href="{{url('/expertise').'/'.$expertise_val->id}}" target="_self">
																		<span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
																			<span class="mkdf-icon-bckg-holder"></span>
																			<i class="mkdf-icon-linea-icon icon-basic-message-multiple mkdf-icon-element" style="font-size:55px"></i> </span>
																	</a>
																</div>
																<div class="mkdf-iwt-content">
																	<h5 class="mkdf-iwt-title" style="margin-top: 9px">
																		<a itemprop="url" href="{{url('/expertise').'/'.$expertise_val->id}}" target="_self">
																			<span class="mkdf-iwt-title-text">{{$expertise_val->title}}</span>
																		</a>
																	</h5>
																	<p class="mkdf-iwt-text">
																		{{$expertise_val->short_description}}
																	</p>
																	<!-- <a itemprop="url" href="expertise.html" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate"> -->
																	<a itemprop="url" href="{{url('/expertise').'/'.$expertise_val->id}}" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
																		<span class="mkdf-btn-text">Read More</span>
																		<span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-arrow-right "></span>
																	</a>
																</div>
															</div>
															<div class="vc_empty_space" style="height: 58px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												@endforeach
												@endif

											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_row-fluid call-us vc_custom_1522659030108 mkdf-content-aligment-center" style="background-color:#aa9166">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element ">
														<div class="wpb_wrapper">
															<h4><span style="color: #ffffff;">Emergency? Call us
																	now</span> <a href="tel:+02089631050">+02089631050</a></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper ">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">
																<div class="mkdf-eh-item     " data-item-class="mkdf-eh-custom-7575" data-1024-1366="0% 7% 4.4% 8% " data-768-1024="103px 133px 0px" data-680-768="103px 53px 0px" data-680="101px 0% 0px">
																	<div class="mkdf-eh-item-inner">
																		<div class="mkdf-eh-item-content mkdf-eh-custom-7575" style="padding: 0 12% 4% 12%">
																			<div class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<h4>About Us</h4>
																				</div>
																			</div>
																			<div class="vc_empty_space" style="height: 7px"><span class="vc_empty_space_inner"></span>
																			</div>
																			<div class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<p style="text-align: justify;">
																						<?php echo $about->discription; ?>
																					</p>
																				</div>
																			</div>
																			<div class="vc_empty_space" style="height: 23px"><span class="vc_empty_space_inner"></span>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="mkdf-eh-item" data-item-class="mkdf-eh-custom-4679" data-1024-1366="140px 8%" data-768-1024="70px 133px 140px" data-680-768="70px 53px 140px" data-680="70px 0% 140px">
																	<div class="mkdf-eh-item-inner">
																		<div class="mkdf-eh-item-content mkdf-eh-custom-4679" style="padding: 140px 12%">
																			<div class="mkdf-single-image-holder   ">
																				<div class="mkdf-si-inner">
																					<img width="800" height="534" src="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-1.jpg" class="attachment-full size-full" alt="g" loading="lazy" srcset="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-1.jpg 800w, https://anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-img-1-300x200.jpg 300w, https://anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-img-1-768x513.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center" style="background-color:rgba(194,170,128,0.08)">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1522405812816">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-section-title-holder  " style="text-align: center">
																<div class="mkdf-st-inner">
																	<h3 class="mkdf-st-title">
																		Why we are different </h3>
																	<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
																		<div class="mkdf-separator" style="width: 143px;border-bottom-width: 2px">
																		</div>
																	</div>
																	<h6 class="mkdf-st-text">
																		Best law practices. Expertise in various law
																		fields. Great results.
																	</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center" style="background-color:rgba(194,170,128,0.08)">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1521814924146">
												<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-single-image-holder   ">
																<div class="mkdf-si-inner">
																	<img width="800" height="492" src="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-2.jpg" class="attachment-full size-full" alt="i" loading="lazy" srcset="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-2.jpg 800w, assets/wp-content/uploads/2018/03/h1-img-2-300x185.jpg 300w, assets/wp-content/uploads/2018/03/h1-img-2-768x472.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
																</div>
															</div>
															<div class="vc_empty_space" style="height: 37px"><span class="vc_empty_space_inner"></span></div>
															<div class="mkdf-section-title-holder  " style="padding: 0 6%;text-align: center">
																<div class="mkdf-st-inner">
																	<h5 class="mkdf-st-title">
																		Best law practices </h5>
																	<p class="mkdf-st-text" style="margin-top: 9px">
																		Lorem ipsum dolor sit amet, consectetur adi
																		piscing sed do eiusmod tempor icididu </p>
																</div>
															</div>
															<div class="mkdf-separator-holder clearfix  mkdf-separator-center " style="margin-top: 23px">
																<div class="mkdf-separator" style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px">
																</div>
															</div>
															<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-single-image-holder   ">
																<div class="mkdf-si-inner">
																	<img width="800" height="492" src="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-3.jpg" class="attachment-full size-full" alt="i" loading="lazy" srcset="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-3.jpg 800w, assets/wp-content/uploads/2018/03/h1-img-3-300x185.jpg 300w, assets/wp-content/uploads/2018/03/h1-img-3-768x472.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
																</div>
															</div>
															<div class="vc_empty_space" style="height: 37px"><span class="vc_empty_space_inner"></span></div>
															<div class="mkdf-section-title-holder  " style="padding: 0 6%;text-align: center">
																<div class="mkdf-st-inner">
																	<h5 class="mkdf-st-title">
																		Efficiency &amp; Trust </h5>
																	<p class="mkdf-st-text" style="margin-top: 9px">
																		Lorem ipsum dolor sit amet, consectetur adi
																		piscing sed do eiusmod tempor icididu </p>
																</div>
															</div>
															<div class="mkdf-separator-holder clearfix  mkdf-separator-center " style="margin-top: 23px">
																<div class="mkdf-separator" style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px">
																</div>
															</div>
															<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-single-image-holder   ">
																<div class="mkdf-si-inner">
																	<img width="800" height="492" src="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-4.jpg" class="attachment-full size-full" alt="i" loading="lazy" srcset="<?php echo asset('/public/website') ?>/assets/wp-content/uploads/2018/03/h1-img-4.jpg 800w, assets/wp-content/uploads/2018/03/h1-img-4-300x185.jpg 300w, assets/wp-content/uploads/2018/03/h1-img-4-768x472.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
																</div>
															</div>
															<div class="vc_empty_space" style="height: 37px"><span class="vc_empty_space_inner"></span></div>
															<div class="mkdf-section-title-holder  " style="padding: 0 6%;text-align: center">
																<div class="mkdf-st-inner">
																	<h5 class="mkdf-st-title">
																		Results you deserve </h5>
																	<p class="mkdf-st-text" style="margin-top: 9px">
																		Lorem ipsum dolor sit amet, consectetur adi
																		piscing sed do eiusmod tempor icididu </p>
																</div>
															</div>
															<div class="mkdf-separator-holder clearfix  mkdf-separator-center " style="margin-top: 23px">
																<div class="mkdf-separator" style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px">
																</div>
															</div>
															<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper ">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1520421283539">
												<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-counter-holder ">
																<div class="mkdf-counter-inner">
																	<span class="mkdf-counter mkdf-zero-counter">117</span>
																	<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">
																		<div class="mkdf-separator" style="width: 100px"></div>
																	</div>
																	<p class="mkdf-counter-text">Team Members</p>
																</div>
															</div>
															<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-0 vc_col-md-5">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-counter-holder ">
																<div class="mkdf-counter-inner">
																	<span class="mkdf-counter mkdf-zero-counter">2</span>
																	<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">
																		<div class="mkdf-separator" style="width: 100px"></div>
																	</div>
																	<p class="mkdf-counter-text">Number of Offices</p>
																</div>
															</div>
															<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-counter-holder ">
																<div class="mkdf-counter-inner">
																	<span class="mkdf-counter mkdf-zero-counter">18</span>
																	<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">
																		<div class="mkdf-separator" style="width: 100px"></div>
																	</div>
																	<p class="mkdf-counter-text">Total Cases</p>
																</div>
															</div>
															<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-5">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-counter-holder ">
																<div class="mkdf-counter-inner">
																	<span class="mkdf-counter mkdf-zero-counter">93</span>
																	<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">
																		<div class="mkdf-separator" style="width: 100px"></div>
																	</div>
																	<p class="mkdf-counter-text">Total Services</p>
																</div>
															</div>
															<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper mkdf-parallax-row-holder mkdf-content-aligment-center" data-parallax-bg-image=<?php echo asset('/public/website/assets/wp-content/uploads/2018/03/h1-parallax-1.jpg') ?> data-parallax-bg-speed=1>
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1521548298854">
												<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-12 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-testimonials-holder mkdf-testimonials-standard  clearfix">
																<div class="mkdf-testimonials mkdf-owl-slider" data-number-of-items="1" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="600" data-enable-navigation="no" data-enable-pagination="yes">
																	<div class="mkdf-testimonial-content" id="mkdf-testimonials-485">
																		<div class="mkdf-testimonial-text-holder">
																			<h3 itemprop="name" class="mkdf-testimonial-title entry-title">
																				Reviews from clients</h3>
																			<div class="mkdf-separator-holder clearfix mkdf-separator-center">
																				<div class="mkdf-separator"></div>
																			</div>
																			<h6 class="mkdf-testimonial-text">“Maecenas
																				temepus, telu eget condimen rhoncrus,
																				sem qua semper libero, sit amet quam
																				adipiscin sem neqe.&#039;&#039;</h6>
																			<span class="mkdf-testimonial-author">
																				<span class="mkdf-testimonials-author-name">Jason
																					Munoz</span>
																			</span>
																		</div>
																	</div>
																	<div class="mkdf-testimonial-content" id="mkdf-testimonials-174">
																		<div class="mkdf-testimonial-text-holder">
																			<h3 itemprop="name" class="mkdf-testimonial-title entry-title">
																				Reviews from clients</h3>
																			<div class="mkdf-separator-holder clearfix mkdf-separator-center">
																				<div class="mkdf-separator"></div>
																			</div>
																			<h6 class="mkdf-testimonial-text">
																				&quot;Aliquam lorem ant, dapibus in,
																				viverra, feugi, tellus. Phasellus viver
																				metus varius laoreet. Quisue rutrum
																				imperdiet. &quot;</h6>
																			<span class="mkdf-testimonial-author">
																				<span class="mkdf-testimonials-author-name">Daniel
																					George</span>
																			</span>
																		</div>
																	</div>
																	<div class="mkdf-testimonial-content" id="mkdf-testimonials-173">
																		<div class="mkdf-testimonial-text-holder">
																			<h3 itemprop="name" class="mkdf-testimonial-title entry-title">
																				Reviews from clients</h3>
																			<div class="mkdf-separator-holder clearfix mkdf-separator-center">
																				<div class="mkdf-separator"></div>
																			</div>
																			<h6 class="mkdf-testimonial-text">“Lorem
																				ipsum dolore si amet, consectetura
																				adipiscing elit, sed eiusmo tempor
																				incididut ut labore dolore
																				mana.&#039;&#039;</h6>
																			<span class="mkdf-testimonial-author">
																				<span class="mkdf-testimonials-author-name">Jesica
																					Thompson</span>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>



									<div class="mkdf-row-grid-section-wrapper ">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1521709462158">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-section-title-holder  " style="text-align: center">
																<div class="mkdf-st-inner">
																	<h3 class="mkdf-st-title">
																		Find out about activities on our blog </h3>
																	<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
																		<div class="mkdf-separator" style="width: 143px;border-bottom-width: 2px">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mkdf-row-grid-section-wrapper ">
										<div class="mkdf-row-grid-section">
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1520610634047">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="mkdf-blog-list-holder mkdf-bl-standard mkdf-bl-four-columns mkdf-normal-space mkdf-bl-pag-no-pagination   " data-type=standard data-number-of-posts=-1 data-number-of-columns=4 data-space-between-items=normal data-category=interview data-orderby=date data-order=DESC data-image-size=full data-title-tag=h5 data-excerpt-length=10 data-post-info-section=yes data-post-info-image=yes data-post-info-image-zoom=no data-post-info-image-shader=no data-post-info-author=no data-post-info-date=yes data-post-info-category=no data-post-info-comments=no data-post-info-like=no data-post-info-share=no data-pagination-type=no-pagination data-max-num-pages=0 data-next-page=2>
																<div class="mkdf-bl-wrapper mkdf-outer-space">
																	<ul class="mkdf-blog-list">
																		@if($posts)
																		@foreach($posts as $post_val)
																		<li class="mkdf-bl-item mkdf-item-space clearfix">
																			<div class="mkdf-bli-inner">
																				<div class="mkdf-bli-image-holder">
																					<div class="mkdf-post-image">
																						<a itemprop="url" href="{{url('blog_detail' . '/' . $post_val['id'])}}" title="Law and order">
																							<img width="1300" height="940" src="{{asset('/public/images') .'/'. $post_val->image}}" class="attachment-full size-full wp-post-image" alt="i" loading="lazy" />
																						</a>
																					</div>
																				</div>
																				<div class="mkdf-bli-content">
																					<!-- <div class="mkdf-bli-info">
																						<div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
																							<a itemprop="url" href="2018/03/index.html">
																								March 9, 2018 </a>
																							<meta itemprop="interactionCount" content="UserComments: 0" />
																						</div>
																					</div> -->
																					<h5 itemprop="name" class="entry-title mkdf-post-title">
																						<a itemprop="url" href="{{url('/blog_detail').'/'.$post_val->id}}" title="Law and order">
																							{{$post_val->category['title']}} </a>
																					</h5>
																					<div class="mkdf-bli-excerpt">
																						<div class="mkdf-post-excerpt-holder">
																							<p itemprop="description" class="mkdf-post-excerpt">
																								{{$post_val->title}}
																							</p>
																						</div>
																						<div class="mkdf-separator-holder clearfix   ">
																							<div class="mkdf-separator" style="width: 100px">
																							</div>
																						</div>
																						<div class="mkdf-post-read-more-button">
																							<a itemprop="url" href="{{url('/blog_detail').'/'.$post_val->id}}" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-blog-list-button mkdf-btn-icon-animate">
																								<span class="mkdf-btn-text">Read
																									More</span> <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-arrow-right "></span></a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																		@endforeach
																		@endif
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php echo view('website/layout/footer'); ?>
</body>


</html>