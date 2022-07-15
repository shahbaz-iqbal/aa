<?php
$foot = \App\Models\Setting::first();
$contact_foot = \App\Models\Contact::first();
?>

<footer class="mkdf-page-footer ">

	<div class="mkdf-footer-top-holder">

		<div class="mkdf-footer-top-inner mkdf-full-width">

			<div class="mkdf-grid-row mkdf-footer-top-alignment-left">

				<div class="mkdf-column-content mkdf-grid-col-3">

					<div id="media_image-4" class="widget mkdf-footer-column-1 widget_media_image"><img width="141" height="29" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->footer_image) ?>" class="image wp-image-3317  attachment-full size-full" alt="i" loading="lazy" style="max-width: 100%; height: auto;" /></div>

					<div class="widget mkdf-separator-widget">

						<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal" style="margin-bottom: -7px">

							<div class="mkdf-separator" style="border-style: solid"></div>

						</div>

					</div>

					<div id="text-4" class="widget mkdf-footer-column-1 widget_text">

						<div class="textwidget">

							<div class="mkdf-footer-text-first">

								Lloyds PR Solicitors is authorised and regulated by the Solicitors Regulation Authority. Our registration number is 598313

							</div>

						</div>

					</div>

					<div class="widget mkdf-separator-widget">

						<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal" style="margin-bottom: -7px">

							<div class="mkdf-separator" style="border-style: solid"></div>

						</div>

					</div>

					<div id="text-14" class="widget mkdf-footer-column-1 widget_text">

						<div class="textwidget">

							<div class="vc_row wpb_row vc_row-fluid">

								<div class="wpb_column vc_column_container vc_col-sm-12">

									<div class="vc_column-inner">

										<div class="wpb_wrapper">

											<div class="mkdf-iwt clearfix mkdf-iwt-icon-left-from-title mkdf-iwt-icon-medium">

												<div class="mkdf-iwt-content">

													<div class="mkdf-iwt-title" style="color: #eae6e4">

														<a itemprop="url" href="tel:167712444227" target="_self" rel="noopener">

															<span class="mkdf-iwt-icon">

																<span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium" data-hover-color="#6c5835" data-color="#5095cc">

																	<span class="mkdf-icon-bckg-holder"></span>

																	<i class="mkdf-icon-ion-icon ion-android-call mkdf-icon-element" style="color: #5095cc;font-size:21px"></i>

																</span>

															</span>

															<p class="mkdf-iwt-title-text">@if($contact_foot) {{$contact_foot->telephone}} @endif</p>

														</a>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="widget mkdf-separator-widget">

						<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal" style="margin-bottom: -30px">

							<div class="mkdf-separator" style="border-style: solid"></div>

						</div>

					</div>

					<div id="text-15" class="widget mkdf-footer-column-1 widget_text">

						<div class="textwidget">

							<div class="vc_row wpb_row vc_row-fluid vc_custom_1522672246424">

								<div class="wpb_column vc_column_container vc_col-sm-12">

									<div class="vc_column-inner">

										<div class="wpb_wrapper">

											<div class="mkdf-iwt clearfix  mkdf-iwt-icon-left-from-title mkdf-iwt-icon-medium ">

												<div class="mkdf-iwt-content">

													<div class="mkdf-iwt-title" style="color: #eae6e4">

														<a itemprop="url" href="https://www.google.rs/maps/place/Bistrot+d'Orsay/@-37.8161618,144.9649775,15.75z/data=!4m5!3m4!1s0x6ad642b612697eaf:0xaa5fe42531eca385!8m2!3d-37.815038!4d144.967359" target="_blank" rel="noopener">

															<span class="mkdf-iwt-icon">

																<span class="mkdf-icon-shortcode mkdf-normal mkdf-icon-medium" data-hover-color="#6c5835" data-color="#5095cc">

																	<span class="mkdf-icon-bckg-holder"></span>

																	<i class="mkdf-icon-ion-icon ion-android-pin mkdf-icon-element" style="color: #5095cc;font-size:21px"></i>

																</span>

															</span>

															<p class="mkdf-iwt-title-text">@if($contact_foot) {{$contact_foot->address }} @endif</p>

														</a>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="widget mkdf-separator-widget">

						<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal" style="margin-bottom: -30px">

							<div class="mkdf-separator" style="border-style: solid"></div>

						</div>

					</div>

					<div id="text-16" class="widget mkdf-footer-column-1 widget_text">

						<div class="textwidget">

							<div class="vc_row wpb_row vc_row-fluid">

								<div class="wpb_column vc_column_container vc_col-sm-12">

									<div class="vc_column-inner">

										<div class="wpb_wrapper">

											<div class="mkdf-iwt clearfix  mkdf-iwt-icon-left-from-title mkdf-iwt-icon-medium ">

												<div class="mkdf-iwt-content">

													<div class="mkdf-iwt-title" style="color: #eae6e4">

														<a itemprop="url" href="javascript:void(0)" target="_self" rel="noopener">

															<span class="mkdf-iwt-icon">

																<span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium" data-hover-color="#6c5835" data-color="#5095cc">

																	<span class="mkdf-icon-bckg-holder"></span>

																	<i class="mkdf-icon-ion-icon ion-ios-time mkdf-icon-element" style="color: #5095cc;font-size:21px"></i>

																</span>

															</span>

															<p class="mkdf-iwt-title-text"><?php echo "Today is " . date("l"); ?></p>

														</a>

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

				<div class="mkdf-column-content mkdf-grid-col-3">

					<div id="nav_menu-2" class="widget mkdf-footer-column-3 widget_nav_menu">

						<div class="mkdf-widget-title-holder">

							<h5 class="mkdf-widget-title">Privacy Policy</h5>

						</div>

						<div class="menu-footer-menu-navigation-container">

							<ul id="menu-footer-menu-navigation" class="menu">

								<li id="menu-item-1045" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1045">

									<a href="{{url('/complaint-procedure')}}">Complaint Procedure</a>

								</li>

								<li id="menu-item-1048" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1048">

									<a href="{{url('/terms-of-use')}}">Terms of Use</a>

								</li>

								<li id="menu-item-1049" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1049">

									<a href="{{url('/privacy-policy')}}"> Data Privacy Policy Notice</a>

								</li>

								<li id="menu-item-1052" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1052">

									<a href="{{url('/cookie-policy')}}"> Cookie Policy</a>

								</li>

								<li id="menu-item-1054" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1054">

									<a href="{{url('/accessibility_link')}}"> Accessibility</a>

								</li>

								<li id="menu-item-1055" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1055">

									<a href="{{url('/legal-notice')}}"> Legal Notice</a>

								</li>

								<li id="menu-item-1055" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1055">

									<a href="{{url('/eu-online-dispute')}}"> EU online dispute resolution</a>

								</li>

								<li id="menu-item-1055" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1055">

									<a href="{{url('/disclaimer_link')}}"> Disclaimer</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

				<div class="mkdf-column-content mkdf-grid-col-3">

					<div id="nav_menu-2" class="widget mkdf-footer-column-3 widget_nav_menu">

						<div class="mkdf-widget-title-holder">

							<h5 class="mkdf-widget-title">Quick Links</h5>

						</div>

						<div class="menu-footer-menu-navigation-container">

							<ul id="menu-footer-menu-navigation" class="menu">

								<li id="menu-item-1045" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1045">

									<a href="{{url('/')}}">Home</a>

								</li>

								<li id="menu-item-1048" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1048">

									<a href="{{url('/team')}}">Our Team</a>

								</li>

								<!-- <li id="menu-item-1049" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1049">

									<a href="{{url('/expertise')}}">Expertise</a>

								</li> -->

								<li id="menu-item-1052" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1052">

									<a href="{{url('/funding')}}">Funding</a>

								</li>

								<li id="menu-item-1054" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1054">

									<a href="{{url('/career')}}">Career</a>

								</li>

								<li id="menu-item-1055" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1055">

									<a href="{{url('/blog')}}">Blog</a>

								</li>

								<li id="menu-item-1055" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1055">

									<a href="{{url('/contact')}}">Contact</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

				<div class="mkdf-column-content mkdf-grid-col-3">

					<div class="widget mkdf-contact-form-7-widget ">

						<div class="mkdf-widget-title-holder">

							<h5 class="mkdf-widget-title">Emergency Contact</h5>

						</div>

						<div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

							<div class="screen-reader-response">

								<p role="status" aria-live="polite" aria-atomic="true"></p>

								<ul></ul>

							</div>

							<form action="{{url('/emergency_contact')}}" method="post" class="wpcf7-form init cf7_custom_style_1">
								<div style="display: none;">
									@csrf
									<input type="hidden" name="_wpcf7" value="4" />
									<input type="hidden" name="_wpcf7_version" value="5.5.3" />
									<input type="hidden" name="_wpcf7_locale" value="en_US" />
									<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-o1" />
									<input type="hidden" name="_wpcf7_container_post" value="0" />
									<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
								</div>
								<div style="padding: 10px 15px 0px;">
									<div class="mkdf-grid-row">
										<span class="wpcf7-form-control-wrap email"><input type="email" name="email" placeholder="E-mail" required /></span>
									</div>
									<div class="mkdf-grid-row">
										<span class="wpcf7-form-control-wrap textarea"><textarea name="textarea" required cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span>
									</div>
									<div class="mkdf-grid-row">
										<input type="SUBMIT" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit" style="background-color:#5095cc;" />
									</div>
								</div>
								<div class="wpcf7-response-output" aria-hidden="true"></div>
							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="mkdf-footer-bottom-holder" style="background-color: #5095cc;">

		<div class="mkdf-footer-bottom-inner mkdf-full-width">

			<div class="mkdf-grid-row ">

				<div class="mkdf-grid-col-6">

					<div class="mkdf-footer-btm-widget-holder">

						<div id="text-6" class="widget mkdf-footer-bottom-column-1 widget_text">

							<div class="textwidget">

								<p style="padding-top: 4px; font-size: 11px; letter-spacing: 0.2em; font-weight: 400;">

									<a href="javascript:void(0)" target="_blank" rel="noopener">© 2021 Qode Interactive, All Rights Reserved</a>

								</p>

							</div>

						</div>

					</div>

				</div>

				<div class="mkdf-grid-col-6">

					<div class="mkdf-footer-btm-widget-holder">

						<div class="widget mkdf-vertical-separator-widget "><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:34px;border-left-style:solid"></span>

						</div>

						<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{$foot->facebook}}" target="_blank">
							<span class="mkdf-social-icon-widget ion-social-facebook"></span></a>

						<div class="widget mkdf-vertical-separator-widget "><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:34px;border-left-style:solid;margin-left:30px"></span>

						</div>

						<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{$foot->twitter}}" target="_blank">

							<span class="mkdf-social-icon-widget ion-social-instagram"></span></a>

						<div class="widget mkdf-vertical-separator-widget "><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:34px;border-left-style:solid;margin-left:30px"></span>

						</div>

						<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{$foot->linkdin}}" target="_blank">

							<span class="mkdf-social-icon-widget ion-social-linkedin"></span></a>

						<div class="widget mkdf-vertical-separator-widget"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:34px;border-left-style:solid;margin-left:30px"></span>

						</div>

						<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{$foot->trustpilot}}" target="_blank">

							<span class="mkdf-social-icon-widget   ion-social-pinterest"></span></a>

						<div class="widget mkdf-vertical-separator-widget "><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:34px;border-left-style:solid;margin-left:30px"></span>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</footer>

</div>

</div>

<div class="rbt-toolbar" data-theme="Anwalt" data-featured="" data-button-position="60%" data-button-horizontal="right" data-button-alt="no"></div>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTQ2BTD" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>

<script type="text/html" id="wpb-modifications"></script>

<script type="text/javascript">
	if (typeof revslider_showDoubleJqueryError === "undefined") {

		function revslider_showDoubleJqueryError(sliderID) {

			var err = "<div class='rs_error_message_box'>";

			err += "<div class='rs_error_message_oops'>Oops...</div>";

			err += "<div class='rs_error_message_content'>";

			err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";

			err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";

			err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";

			err += "</div>";

			err += "</div>";

			var slider = document.getElementById(sliderID);

			slider.innerHTML = err;

			slider.style.display = "block";

		}

	}
</script>

<link href="https://fonts.googleapis.com/css?family=Lustria:400%7COpen+Sans:300" rel="stylesheet" property="stylesheet" media="all" type="text/css">

<script type="text/javascript">
	(function() {

		var c = document.body.className;

		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');

		document.body.className = c;

	})();
</script>

<script type="text/javascript">
	if (typeof revslider_showDoubleJqueryError === "undefined") {

		function revslider_showDoubleJqueryError(sliderID) {

			var err = "<div class='rs_error_message_box'>";

			err += "<div class='rs_error_message_oops'>Oops...</div>";

			err += "<div class='rs_error_message_content'>";

			err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";

			err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";

			err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";

			err += "</div>";

			err += "</div>";

			var slider = document.getElementById(sliderID);

			slider.innerHTML = err;

			slider.style.display = "block";

		}

	}
</script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minaec2.js?ver=6.4.1') ?>' id='wpb_composer_front_js-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7') ?>' id='regenerator-runtime-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0') ?>' id='wp-polyfill-js'></script>

<script type='text/javascript' id='contact-form-7-js-extra'>



</script>



<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1') ?>' id='jquery-ui-core-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/jquery/ui/tabs.min35d0.js?ver=1.12.1') ?>' id='jquery-ui-tabs-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/jquery/ui/accordion.min35d0.js?ver=1.12.1') ?>' id='jquery-ui-accordion-js'></script>

<script type='text/javascript' id='mediaelement-core-js-before'>
	var mejsL10n = {

		"language": "en",

		"strings": {

			"mejs.download-file": "Download File",

			"mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",

			"mejs.fullscreen": "Fullscreen",

			"mejs.play": "Play",

			"mejs.pause": "Pause",

			"mejs.time-slider": "Time Slider",

			"mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",

			"mejs.live-broadcast": "Live Broadcast",

			"mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",

			"mejs.unmute": "Unmute",

			"mejs.mute": "Mute",

			"mejs.volume-slider": "Volume Slider",

			"mejs.video-player": "Video Player",

			"mejs.audio-player": "Audio Player",

			"mejs.captions-subtitles": "Captions\/Subtitles",

			"mejs.captions-chapters": "Chapters",

			"mejs.none": "None",

			"mejs.afrikaans": "Afrikaans",

			"mejs.albanian": "Albanian",

			"mejs.arabic": "Arabic",

			"mejs.belarusian": "Belarusian",

			"mejs.bulgarian": "Bulgarian",

			"mejs.catalan": "Catalan",

			"mejs.chinese": "Chinese",

			"mejs.chinese-simplified": "Chinese (Simplified)",

			"mejs.chinese-traditional": "Chinese (Traditional)",

			"mejs.croatian": "Croatian",

			"mejs.czech": "Czech",

			"mejs.danish": "Danish",

			"mejs.dutch": "Dutch",

			"mejs.english": "English",

			"mejs.estonian": "Estonian",

			"mejs.filipino": "Filipino",

			"mejs.finnish": "Finnish",

			"mejs.french": "French",

			"mejs.galician": "Galician",

			"mejs.german": "German",

			"mejs.greek": "Greek",

			"mejs.haitian-creole": "Haitian Creole",

			"mejs.hebrew": "Hebrew",

			"mejs.hindi": "Hindi",

			"mejs.hungarian": "Hungarian",

			"mejs.icelandic": "Icelandic",

			"mejs.indonesian": "Indonesian",

			"mejs.irish": "Irish",

			"mejs.italian": "Italian",

			"mejs.japanese": "Japanese",

			"mejs.korean": "Korean",

			"mejs.latvian": "Latvian",

			"mejs.lithuanian": "Lithuanian",

			"mejs.macedonian": "Macedonian",

			"mejs.malay": "Malay",

			"mejs.maltese": "Maltese",

			"mejs.norwegian": "Norwegian",

			"mejs.persian": "Persian",

			"mejs.polish": "Polish",

			"mejs.portuguese": "Portuguese",

			"mejs.romanian": "Romanian",

			"mejs.russian": "Russian",

			"mejs.serbian": "Serbian",

			"mejs.slovak": "Slovak",

			"mejs.slovenian": "Slovenian",

			"mejs.spanish": "Spanish",

			"mejs.swahili": "Swahili",

			"mejs.swedish": "Swedish",

			"mejs.tagalog": "Tagalog",

			"mejs.thai": "Thai",

			"mejs.turkish": "Turkish",

			"mejs.ukrainian": "Ukrainian",

			"mejs.vietnamese": "Vietnamese",

			"mejs.welsh": "Welsh",

			"mejs.yiddish": "Yiddish"

		}

	};
</script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/mediaelement/mediaelement-and-player.min08e1.js?ver=4.2.16') ?>' id='mediaelement-core-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/mediaelement/mediaelement-migrate.min69c8.js?ver=5.8.4') ?>' id='mediaelement-migrate-js'></script>

<script type='text/javascript' id='mediaelement-js-extra'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/mediaelement/wp-mediaelement.min69c8.js?ver=5.8.4') ?>' id='wp-mediaelement-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/jquery.appear69c8.js?ver=5.8.4') ?>' id='appear-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/modernizr.min69c8.js?ver=5.8.4') ?>' id='modernizr-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/hoverIntent.min73b9.js?ver=1.10.1') ?>' id='hoverIntent-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/jquery.plugin69c8.js?ver=5.8.4') ?>' id='jquery-plugin-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/owl.carousel.min69c8.js?ver=5.8.4') ?>' id='owl-carousel-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/jquery.waypoints.min69c8.js?ver=5.8.4') ?>' id='waypoints-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/fluidvids.min69c8.js?ver=5.8.4') ?>' id='fluidvids-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.minaec2.js?ver=6.4.1') ?>' id='prettyphoto-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/perfect-scrollbar.jquery.min69c8.js?ver=5.8.4') ?>' id='perfect-scrollbar-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/ScrollToPlugin.min69c8.js?ver=5.8.4') ?>' id='ScrollToPlugin-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/parallax.min69c8.js?ver=5.8.4') ?>' id='parallax-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/jquery.waitforimages69c8.js?ver=5.8.4') ?>' id='waitforimages-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/jquery.easing.1.369c8.js?ver=5.8.4') ?>' id='jquery-easing-1.3-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.minaec2.js?ver=6.4.1') ?>' id='isotope-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules/plugins/packery-mode.pkgd.min69c8.js?ver=5.8.4') ?>' id='packery-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/countdown/assets/js/plugins/jquery.countdown.min69c8.js?ver=5.8.4') ?>' id='countdown-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/counter/assets/js/plugins/counter69c8.js?ver=5.8.4') ?>' id='counter-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/counter/assets/js/plugins/absoluteCounter.min69c8.js?ver=5.8.4') ?>' id='absoluteCounter-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/custom-font/assets/js/plugins/typed69c8.js?ver=5.8.4') ?>' id='typed-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/full-screen-sections/assets/js/plugins/jquery.fullPage.min69c8.js?ver=5.8.4') ?>' id='fullPage-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/pie-chart/assets/js/plugins/easypiechart69c8.js?ver=5.8.4') ?>' id='easypiechart-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/uncovering-sections/assets/js/plugins/curtain69c8.js?ver=5.8.4') ?>' id='curtain-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/plugins/anwalt-core/shortcodes/vertical-split-slider/assets/js/plugins/jquery.multiscroll.min69c8.js?ver=5.8.4') ?>' id='multiscroll-js'></script>



<script type='text/javascript' id='anwalt-mikado-modules-js-extra'>
	var mkdfGlobalVars = {

		"vars": {

			"mkdfAddForAdminBar": 0,

			"mkdfElementAppearAmount": -100,

			"mkdfAjaxUrl": "https:\/\/anwalt.qodeinteractive.com\/wp-admin\/admin-ajax.php",

			"mkdfStickyHeaderHeight": 0,

			"mkdfStickyHeaderTransparencyHeight": 70,

			"mkdfTopBarHeight": 46,

			"mkdfLogoAreaHeight": 0,

			"mkdfMenuAreaHeight": 116,

			"mkdfMobileHeaderHeight": 70

		}

	};

	var mkdfPerPageVars = {

		"vars": {

			"mkdfMobileHeaderHeight": 70,

			"mkdfStickyScrollAmount": 890,

			"mkdfHeaderTransparencyHeight": 0,

			"mkdfHeaderVerticalWidth": 0

		}

	};
</script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-content/themes/anwalt/assets/js/modules.min69c8.js?ver=5.8.4') ?>' id='anwalt-mikado-modules-js'></script>

<script type='text/javascript' src='<?php echo asset('/public/website/assets/wp-includes/js/wp-embed.min69c8.js?ver=5.8.4') ?>' id='wp-embed-js'></script>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "unset";
  } else {
    x.style.display = "none";
  }
}
</script>