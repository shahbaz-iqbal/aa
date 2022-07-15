<!doctype html>
<html lang="en-GB" class="no-js">

<head>

    <?php echo view('website.layout.header'); ?>

    <title>Team</title>
    <link rel='stylesheet' id='wp-block-library-css' href='assets/style.css' media='all' />
    <!-- <link rel='stylesheet' id='wp-law-css'
		href='https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/plugins/wp-law/public/dist/css/wp-law-public.min.css?ver=2.0.0'
		media='all' /> -->
    <link rel='stylesheet' id='fa-styles-css' href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.0' media='screen' />
    <link rel='stylesheet' id='main-styles-css' href='{{asset("assets/style1.css")}}' media='screen' />
    <script src='{{asset("assets/jquery.min.js")}}' id='jquery-core-js'></script>
    <script src='{{asset("assets/jquery-migrate.min.js")}}' id='jquery-migrate-js'></script>

    <style>
        .no-js img.lazyload {
            display: none;
        }

        figure.wp-block-image img.lazyloading {
            min-width: 150px;
        }

        .lazyload,
        .lazyloading {
            opacity: 0;
        }

        .lazyloaded {
            opacity: 1;
            transition: opacity 400ms;
            transition-delay: 0ms;
        }
    </style>
</head>


<body class="barristers-template-default single single-barristers postid-632 home page-template page-template-full-width page-template-full-width-php page page-id-13 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-smooth-page-transitions mkdf-smooth-page-transitions-preloader mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
<?php echo view('website/layout/sidebar'); ?>
    <div class="container-fluid">
        <div class="mkdf-top-bar" style="background-color:#5095cc;">
            <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left">
                    <div class="mkdf-position-left-inner">
                        <div id="text-2" class="widget widget_text mkdf-top-bar-widget">
                            <div class="textwidget">
                               <p>Opening hours / Monday &#8211; Friday / 09:30 &#8211; 5:00</p>
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
        <div style="background-color:white;">
            <?php echo view('website.layout.nav'); ?>
            <?php echo view('website.layout.nav-mobile'); ?>
        </div>
        <!-- <div class="mobile_brand mobileonly">
			<a href="https://www.2bedfordrow.co.uk/"><img alt="Pump Court"
					data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
					class="lazyload"
					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
						src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
						alt="Pump Court"></noscript></a>
		</div> -->
        <!-- <div class="section banner bg-dark screenonly"></div> -->
        <div class="section bg-grad">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="panel">
                        <img src="{{asset('/public/images' . '/' .$cv->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <h1 style="color:white">{{$cv->name}}</h1>

                        <div class="seniority">
                            <div class="date call">
                                <span>{{$team}}</span>
                            </div>
                            <!-- <div class="date silk">
                                <span>{{$cv->email}}</span>
                            </div> -->
                        </div>
                        <div class="swiper-container buttons-left">
                            <div class="swiper-wrapper">
                                @if($cv_desc)
                                @foreach($cv_desc as $cv_desc_val)
                                <div class="swiper-slide">
                                    <blockquote style="color:white;">
                                        <p style="color:white;"><?php echo $cv_desc_val->description; ?></p>
                                    </blockquote>
                                </div>
                                @endforeach
                                @endif
                                <!-- <div class="swiper-slide">
                                    <blockquote style="color:white;">
                                        <p style="color:white;">"A devastating cross-examiner with a lovely manner." <br></p>
                                        <p class="sm" style="color:white;">Legal 500 2020</p>
                                    </blockquote>
                                </div> -->

                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-white">
            <div class="row">

                <div class="col-md-4 bg-gradient">

                    <ul class="barrister-links">
                        <!-- <li><a title="Portfolio" class="addtoport-icon addlinkbutton "
								href="https://www.2bedfordrow.co.uk/barrister/kieran-vaughan-qc/"
								onclick="javascript: wp_law_gaClicks('Profile Links', 'Add to portfolio', 'Kieran Vaughan QC', '', true );"
								data-id="632" data-name="Kieran Vaughan QC"
								data-areas="[&quot;547&quot;,&quot;543&quot;,&quot;539&quot;]"
								data-titles="[&quot;Fraud&quot;,&quot;Crime&quot;,&quot;Appeals&quot;]"
								data-type="barristers" data-typename="Barrister"
								data-iconstate="&lt;span class=&quot;icon fa fa-list-alt&quot;&gt;&lt;/span&gt;&lt;span class=&quot;label&quot;&gt;Added&lt;/span&gt;"
								data-isadded="0"><span class="icon fa fa-list-alt"></span><span class="label">Add to
									shortlist</span></a></li> -->
                        <!-- <li><a href="mailto:&#99;&#108;&#101;&#114;k&#115;&#64;2&#98;&#101;&#100;&#102;&#111;&#114;d&#114;ow.&#99;&#111;.&#117;k" onclick="javascript: tela_gaClicks( 'profile_email', 'kieran-vaughan-qc', 'Kieran Vaughan QC' );"><span class="icon fa fa-envelope"></span><span class="label">Click to email</span></a> -->
                        <li><a href="mailto:{{$cv->email}}"><span class="icon fa fa-envelope"></span><span class="label">Click to email</span></a>
                        </li>
                        <!-- <li><a href="tel:+442074408888" onclick="javascript: tela_gaClicks( 'profile_tel', 'kieran-vaughan-qc', 'Kieran Vaughan QC' );"><span class="icon fa fa-phone"></span><span class="label">+44 (0)20 7440 8888</span></a> -->
                        <li><a href="tel:{{$cv->phone}}"><span class="icon fa fa-phone"></span><span class="label">Click to phone</span></a>
                        </li>
                        <li><a href="{{asset('/public/images' . '/' .$cv->pdf) }}" target="_blank"><span class="icon fa fa-file"></span><span class="label">CV (PDF)</span></a></li>

                         <li><a href="javascript:void(0)"><span class="icon fa fa-id-card"></span><span class="label">vCard</span></a></li> 

                    </ul>


                    <div id="side-accordion" role="tablist" class="panel lg rm accordions">

                        <div class="card bg-shadow">
                            <a data-toggle="collapse" href="#bcollapseExtra-lawyer_publications" role="button" aria-expanded="true" aria-controls="bcollapseExtra-lawyer_publications" class="btn btn-light btn-block">
                            Language <span class="fa fa-chevron-down"></span>
                            </a>

                            <div id="bcollapseExtra-lawyer_publications" class="collapse" role="tabpanel" data-parent="#side-accordion">
                                <div class="card-body">
                                    <?php echo $cv->publication; ?>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-shadow">
                            <a data-toggle="collapse" href="#bcollapseExtra-lawyer_memberships" role="button" aria-expanded="true" aria-controls="bcollapseExtra-lawyer_memberships" class="btn btn-light btn-block">
                                Memberships <span class="fa fa-chevron-down"></span>
                            </a>

                            <div id="bcollapseExtra-lawyer_memberships" class="collapse" role="tabpanel" data-parent="#side-accordion">
                                <div class="card-body">
                                    <?php echo $cv->membership; ?>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-shadow">
                            <a data-toggle="collapse" href="#bcollapseExtra-lawyer_directory_quotes" role="button" aria-expanded="true" aria-controls="bcollapseExtra-lawyer_directory_quotes" class="btn btn-light btn-block">
                            Education  <span class="fa fa-chevron-down"></span>
                            </a>

                            <div id="bcollapseExtra-lawyer_directory_quotes" class="collapse" role="tabpanel" data-parent="#side-accordion">
                                <div class="card-body">
                                    <?php echo $cv->quotes; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="panel lg rp-top rm-top">
						<div class="panel bg-darkgreen rm">
							<p class="h4">Instructing Kieran Vaughan QC</p>
							<p>To instruct Kieran or for any further information please contact our clerks.</p>
						</div>
						<div class="panel bg-secondary rm" style="display:flex; justify-content:flex-start;">
							<img src="http://localhost/llords-front1/assets/wp-content/uploads/2019/04/profile-medium.jpg" alt="profile" width="85" height="85">
							<p style="margin-top:0px; margin-left:10px;"><b>Clerk: John Grimmer</b><br>
								Telephone: <a href="tel:+447776154664">+44 (0)7776 154 664</a><br>
								Email: <a
									href="mailto:&#106;&#103;rimmer&#64;2&#98;e&#100;fo&#114;&#100;r&#111;&#119;&#46;c&#111;.&#117;k?subject=Website%20Enquiry">Click
									here</a></p>
						</div>
					</div> -->
                </div>

                <div class="col-md-8 bg-gray-100 order-first">

                    <div class="panel lg rm-top">
                        <div class="panel bg-white bg-shadow rm-top">
                            <p>
                                <?php echo $cv->description; ?>
                            </p>
                        </div>

                        <div id="accordion" role="tablist" class="accordions">
                            <h2>Practice Areas</h2>
                            <div class="expertise-listings">

                                @if($cv_practice)
                                @foreach($cv_practice as $cv_practice_val)
                                <div class="card bg-shadow accordion_fraud">
                                    <a data-toggle="collapse" href="#colpase_id_{{$cv_practice_val->category['id']}}" role="button" aria-expanded="true" aria-controls="accordion_fraud" class="btn btn-white btn-block">
                                        {{$cv_practice_val->category['name']}}<span class="fa fa-chevron-down"></span>
                                    </a>
                                    <a title="Portfolio" class="addtoport-icon addlinkbutton position-absolute single-add" href="https://www.2bedfordrow.co.uk/barrister/kieran-vaughan-qc/" onclick="javascript: wp_law_gaClicks('Profile Links', 'Add to portfolio', 'Fraud', '', true );" data-id="632" data-name="Fraud" data-areas="[&quot;547-0&quot;]" data-titles="[]" data-type="barristers" data-typename="Barrister" data-iconstate="&lt;span class=&quot;fa fa-star text-primary&quot;&gt;&lt;/span&gt;" data-isadded="0"><span class="fa fa-star-o text-primary"></span></a>
                                    <div id="colpase_id_{{$cv_practice_val->category['id']}}" class="collapse accordion-item" role="tabpanel" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                <?php echo $cv_practice_val->description; ?>
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

                                <!-- <div class="card bg-shadow accordion_crime">
                                    <a data-toggle="collapse" href="#accordion_crime" role="button" aria-expanded="true" aria-controls="accordion_crime" class="btn btn-white btn-block">
                                        Crime<span class="fa fa-chevron-down"></span>
                                    </a>
                                    <a title="Portfolio" class="addtoport-icon addlinkbutton position-absolute single-add" href="https://www.2bedfordrow.co.uk/barrister/kieran-vaughan-qc/" onclick="javascript: wp_law_gaClicks('Profile Links', 'Add to portfolio', 'Crime', '', true );" data-id="632" data-name="Crime" data-areas="[&quot;543-1&quot;]" data-titles="[]" data-type="barristers" data-typename="Barrister" data-iconstate="&lt;span class=&quot;fa fa-star text-primary&quot;&gt;&lt;/span&gt;" data-isadded="0"><span class="fa fa-star-o text-primary"></span></a>
                                    <div id="accordion_crime" class="collapse accordion-item" role="tabpanel" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Over many years Kieran has gained vast experience in representing those
                                                accused of the most serious of crimes including murder, terrorism, armed
                                                robbery and the importation of drugs. He has defended in some of the
                                                most high profile, complex and grave cases in the UK and N Ireland, see
                                                a selection of those below.</p>
                                            <p>In addition to representing individuals at trial he regularly reviews the
                                                convictions and sentence of those who have been convicted and represents
                                                such individuals in the Court of Appeal, <a href="https://www.theguardian.com/uk-news/2016/apr/21/ched-evans-wins-appeal-against-conviction?CMP=share_btn_link">Ched
                                                    Evans</a> is but one such example.</p>
                                            <p>Throughout his career Kieran has developed extensive experience in
                                                dealing with many areas of expert evidence and was asked to write the
                                                forward for the only comprehensive text on DNA evidence in criminal
                                                courts (<a href="https://www.wiley.com/en-us/A+Guide+to+Forensic+DNA+Profiling-p-9781118751527">A
                                                    Guide to DNA Forensic Profiling</a>).</p>
                                            <h3>Notable crime cases</h3>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.bbc.co.uk/news/uk-wales-36099522" target="_blank" class="font-weight-bold">R v Ched Evans</a></p>
                                            <p>At the time of his original trial (at which he was not represented by
                                                Kieran Vaughan QC) Mr Evans was a professional footballer. Subsequent to
                                                his conviction Kieran Vaughan led the case for Mr Evans in the Court of
                                                Appeal. Having heard legal argument for two days the Court quashed Mr
                                                Evans’ conviction.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.theguardian.com/uk-news/2016/apr/21/ched-evans-wins-appeal-against-conviction" target="_blank" class="font-weight-bold">R v Okigbo</a></p>
                                            <p>Represented Jonathon Okigbo who was accused of murdering Harry Uzoka, one
                                                of the UK’s most successful male models. Mr Okigbo was acquitted of
                                                murder.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Foster</p>
                                            <p>Successfully defended Patrick Foster who, along with three others, was
                                                accused of raping a fellow student at the Royal Agricultural University.
                                                Following legal arguments relating to disclosure the prosecution offered
                                                no evidence against all defendants on all counts.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.theguardian.com/uk-news/2018/jun/15/all-female-terror-cell-rizlaine-boular-mina-dich-jailed-over-london-knife-plot?CMP=share_btn_link" target="_blank" class="font-weight-bold">R v Dich</a></p>
                                            <p>Represented Mina Dich who was accused of plotting with her two daughters
                                                to carry out a terrorist attack in Westminster. The three defendants
                                                were widely reported as being the first ever female terrorist cell in
                                                the UK</p>
                                            <hr>
                                            <p class="font-weight-bold">R v B</p>
                                            <p>Successfully represented Mr B in the Court of Appeal. Mr B and two others
                                                (DS and RP) had been convicted in 2010 of conspiracy to murder. A covert
                                                police operation apparently recorded the three men plotting to shoot a
                                                local business rival involved in the supply of drugs. The appeal lasted
                                                three days and largely concerned the attempt to introduce fresh expert
                                                voice analysis evidence (Bat Vox system) that has never been used before
                                                in this jurisdiction. The original convictions were quashed and Mr
                                                Baxter was subsequently acquitted in a re-trial.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Adams</p>
                                            <p>Represented a defendant in the case involving Terry Adams in relation to
                                                a number of allegations of money laundering in what has been described
                                                as one of the largest and most detailed cases in British history. It was
                                                alleged that Adams was the head of one of the most successful criminal
                                                families the country has ever known.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Nicolas</p>
                                            <p>Successfully defended a defendant who was accused of being party to steal
                                                £1,000,000 worth of gold bullion in Belgium. The case involved, amongst
                                                other matters, the use of foreign intercept telephone evidence.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Hoey</p>
                                            <p>Kieran successfully defended Sean Hoey who was accused, amongst other
                                                offences, of 29 murders following the Omagh Bombing.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.theguardian.com/uk/2008/jan/30/terrorism.world" target="_blank" class="font-weight-bold">R v Iqbal</a></p>
                                            <p>Defending in a case that achieved enormous national media attention due
                                                to the lurid details of the plot to kidnap and behead a British soldier.
                                            </p>
                                            <hr>
                                            <p class="font-weight-bold">R v Naseer</p>
                                            <p>According to the prosecution opening, the planned bombing campaign would
                                                have been more devastating than 7/7.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.mirror.co.uk/news/uk-news/woman-got-ex-boyfriend-murder-7250295" target="_blank" class="font-weight-bold">R v Burns</a></p>
                                            <p>Successfully represented Leigh Burns who was accused of murder. The
                                                victim was stabbed 14 times in the middle of High Wycombe High Street.
                                            </p>
                                            <hr>
                                            <p class="font-weight-bold">R v Monteith</p>
                                            <p>Successfully represented Samuel Monteith who was accused of murder. Three
                                                men broke into the victim’s house and fatally stabbed him with samurai
                                                swords in what was alleged to be a gang revenge attack.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Allen</p>
                                            <p>Successfully represented Gavin Allen who was accused of murder. The
                                                victim was shot five times when he was in a nightclub in Leicester
                                                Square on Christmas Day.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Hansen</p>
                                            <p>Successfully represented Ata Hansen who was accused of murder. The
                                                prosecution’s case was that he was a part of a gang of youths who
                                                murdered a young man at a party.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Ta</p>
                                            <p>Successfully represented Peter Ta who was accused of murder. Mr Ta had
                                                supposedly orchestrated the murder of a man in south-east London. The
                                                victim was shot to death with a sawn off shotgun.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Gutierez Cortez</p>
                                            <p>Successfully represented Felix Gutierez Cortez who was accused of
                                                murdering his landlady by strangling her to death. Mr Guteriez Cortez
                                                was acquitted of murder and convicted of manslaughter.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Wellington</p>
                                            <p>Successfully represented a defendant accused of organising the murder of
                                                a drugs rival. The case involved audio surveillance and complex
                                                scientific evidence such as cell site and firearms evidence.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.standard.co.uk/news/crime/four-cleared-of-gangland-murder-after-id-parade-with-virtual-twins-8277319.html" target="_blank" class="font-weight-bold">R v Russell</a></p>
                                            <p>Successfully defended one of two twins charged with a double murder. The
                                                two victims were shot in the head with a shotgun in their flat.
                                                Following legal argument, the identification evidence was excluded. The
                                                prosecution appealed to the Court of Appeal failed and all four
                                                defendants were acquitted of all counts.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Shamlian</p>
                                            <p>Successfully represented Zareh Shamlian who was accused of money
                                                laundering the proceeds of a sophisticated fraud.</p>
                                            <hr>
                                            <p class="font-weight-bold">R v Mohammed</p>
                                            <p>The defendant pleaded guilty to killing his partner by stabbing her over
                                                57 times.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-shadow accordion_appeals">
                                    <a data-toggle="collapse" href="#accordion_appeals" role="button" aria-expanded="true" aria-controls="accordion_appeals" class="btn btn-white btn-block">
                                        Appeals<span class="fa fa-chevron-down"></span>
                                    </a>
                                    <a title="Portfolio" class="addtoport-icon addlinkbutton position-absolute single-add" href="https://www.2bedfordrow.co.uk/barrister/kieran-vaughan-qc/" onclick="javascript: wp_law_gaClicks('Profile Links', 'Add to portfolio', 'Appeals', '', true );" data-id="632" data-name="Appeals" data-areas="[&quot;539-2&quot;]" data-titles="[]" data-type="barristers" data-typename="Barrister" data-iconstate="&lt;span class=&quot;fa fa-star text-primary&quot;&gt;&lt;/span&gt;" data-isadded="0"><span class="fa fa-star-o text-primary"></span></a>
                                    <div id="accordion_appeals" class="collapse accordion-item" role="tabpanel" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Kieran is frequently instructed to represent individuals on appeal, where
                                                he did not act in the original trial, both in this jurisdiction and in
                                                Northern Ireland. This often includes advising upon whether there are
                                                grounds to refer a conviction to the Criminal Cases Review Commission.
                                                Once there has been an unsuccessful appeal this is the only way in which
                                                an appeal can be referred to the Court of Appeal.</p>
                                            <p>Kieran advised and represented Ched Evans, the international footballer,
                                                whose conviction was referred to the Court of Appeal by the Criminal
                                                Cases Review Commission. After a lengthy appeal, which involved calling
                                                fresh evidence, Ched Evans’s conviction was successfully overturned.</p>
                                            <h3>Notable appeals cases</h3>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.theguardian.com/football/2016/oct/14/footballer-ched-evans-cleared-of-in-retrial?CMP=share_btn_link" target="_blank" class="font-weight-bold">Ched Evans</a></p>
                                            <p>A professional footballer who was originally convicted of rape. Kieran
                                                did not appear at the original trial but was instructed to lead the
                                                appeal on behalf of Mr Evans. As Mr Evans had already had his appeal
                                                against conviction refused by the Court of Appeal the only route to
                                                appeal was via the CCRC. Having considered submissions, the CCRC
                                                referred the case to the Court of Appeal who heard a lengthy appeal
                                                against conviction involving fresh evidence from a number of witnesses.
                                                The Court of Appeal quashed his conviction.</p>
                                            <hr>
                                            <p class="mb-1"><a href="http://news.bbc.co.uk/1/hi/england/west_yorkshire/8513040.stm" target="_blank" class="font-weight-bold">Michael Baxter</a></p>
                                            <p>Kieran represented Michael in the Court of Appeal, not having represented
                                                him at trial. Mr Baxter and two others (Denis Slade and Richard Pearman)
                                                had been convicted in 2010 of conspiracy to murder. The entire appeal
                                                process lasted three years. The appeal largely concerned the use of
                                                forensic voice evidence and involved the Court of Appeal hearing
                                                evidence from a number of expert witnesses. The original convictions
                                                were quashed and Mr Baxter was subsequently acquitted in a re-trial.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.bbc.co.uk/news/uk-northern-ireland-46602189" target="_blank" class="font-weight-bold">Christine Connor</a></p>
                                            <p>Not having represented Christine at her original trial Kieran was
                                                instructed to advise and represent CC on an appeal against conviction in
                                                the Court of Appeal, Northern Ireland. CC had been convicted of a number
                                                of terrorist related offences including attempting to murder a number of
                                                police officers. After a lengthy three day appeal involving live
                                                evidence all of CC’s convictions were quashed.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.bbc.co.uk/news/uk-england-hampshire-48228087" target="_blank" class="font-weight-bold">Edward Austin</a></p>
                                            <p>Kieran, not having represented Mr Austin at trial, is presently advising
                                                Edward on an appeal. Mr Austin was convicted of being involved in the
                                                multi million pound importation of cocaine on the Isle of Wight. The
                                                case has achieved a significant amount of national and international
                                                press coverage.</p>
                                            <hr>
                                            <p class="mb-1"><a href="https://www.bbc.co.uk/news/uk-northern-ireland-21858904" target="_blank" class="font-weight-bold">Michael McKevit</a></p>
                                            <p>Kieran advised and represented Michael in an appeal against the findings
                                                of the High Court in N Ireland that he was responsible for the Omagh
                                                Bombing. Mr McKevitt had been convicted in Dublin of leading and
                                                directing the Real IRA. The mainstay of the evidence against him came
                                                from a FBI and Mi5 agent David Rupert, who has subsequently written a
                                                book about his involvement with the organization.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div> -->
                            </div>


                            <!-- <div class="card bg-shadow">
								<a class="collapsed btn btn-secondary btn-block" data-toggle="collapse"
									href="#acc_related_news" role="button" aria-expanded="false"
									aria-controls="acc_related_news">
									Related News <span class="fa fa-chevron-down"></span>
								</a>
								<div id="acc_related_news" class="collapse show" role="tabpanel"
									data-parent="#accordion">
									<div class="card-body">
										<div class="articles related-article">
											<div class="article">
												<div class="bg">
													<div class="wrap">
														<span class="category"><a
																href="https://www.2bedfordrow.co.uk/category/news/"
																rel="category tag">News</a></span>
														<span class="date">3rd June 2021</span>
														<div class="bottom">
															<h3><a
																	href="https://www.2bedfordrow.co.uk/jim-sturman-qc-and-kieran-vaughan-qc-defend-in-the-metropolitan-polices-largest-ever-cash-seizure/">Jim
																	Sturman QC and Kieran Vaughan QC defend in the
																	Metropolitan...</a></h3>
															<p>Jim Sturman QC and Kieran Vaughan QC, instructed by Amjid
																Jabbar at Stokoe Partnership, acted for S&#8230;</p>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php echo view('website.layout.footer'); ?>
    </div>
    <div class="overlay" id="overlay-expertise">
        <div class="panel  text-center">
            <!-- <a href="#">
				<img alt=""
					data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
					class="lazyload"
					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
						alt=""
						data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
						class="lazyload"
						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
							alt=""
							data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
							class="lazyload"
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
								src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
								alt=""></noscript></noscript></noscript>
			</a> -->
        </div>
        <div class="panel text-center">
            <p><a href="#overlay-expertise" class="h2 text-white toggle"><span class="fa fa-close"></span></a></p>
            <p class="h2">Practice Areas</p>
            <div class="panel xl ">
                <div class="row">
                    <div class="col-md-12">
                        <p class="h4">
                            Committed to all aspects of Criminal and Regulatory law, 2 Bedford Row advises and
                            represents clients in a wide variety of proceedings and investigations, from high profile
                            Fraud and Murder, to Health &amp; Safety and Professional proceedings.
                        </p>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <ul class="overlay-menu bordered">
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/advisory/">Advisory</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/appeals/">Appeals</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/business-crime/">Business Crime</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/civil-asset-recovery-and-forfeiture/">Civil
                                    Asset Recovery &#038; Forfeiture</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/confiscation/">Confiscation</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/coroners-inquests/">Coroner&#8217;s
                                    Inquests</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/crime/">Crime</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/cyber-security/">Cyber Security</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/defence/">Defence</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/environmental/">Environmental</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="overlay-menu bordered">
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/financial-crime/">Financial
                                    Crime</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/financial-services/">Financial
                                    Services</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/fraud/">Fraud</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/health-and-safety/">Health &#038;
                                    Safety</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/international/">International</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/judicial-review/">Judicial
                                    Review</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/media/">Media</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/military-law/">Military Law</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/murder-and-manslaughter/">Murder
                                    &#038; Manslaughter</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/police-law/">Police Law</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="overlay-menu bordered">
                            <li>
                                <a href="https://www.2bedfordrow.co.uk/practice-area/private-prosecution/">Private
                                    Prosecution
                                </a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/professional-discipline/">Professional
                                    Discipline</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/prosecution/">Prosecution</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/public-inquiries/">Public
                                    Inquiries</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/regulatory/">Regulatory</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/road-traffic/">Road Traffic</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/serious-sexual-offences/">Serious
                                    Sexual Offences</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/special-advocacy/">Special
                                    Advocacy</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/sports-law/">Sports Law</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/tribunals/">Tribunals</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay-search">
        <div class="panel  text-center">
            <!-- <a href="#">
				<img alt=""
					data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
					class="lazyload"
					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
						alt=""
						data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
						class="lazyload"
						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
							alt=""
							data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
							class="lazyload"
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
								src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
								alt=""></noscript></noscript></noscript>
			</a> -->
        </div>
        <div class="panel  text-center">
            <p><a href="#overlay-search" class="h2 text-white toggle"><span class="fa fa-close"></span></a></p>
            <p class="h2">Search Site</p>
            <div class="searchblock light">
                <form class="searcharea" action="https://www.2bedfordrow.co.uk/" method="get" accept-charset="utf-8" style="width:100%;">
                    <input type="text" class="searchfield" placeholder="Search..." name="s" autocomplete="off">
                    <button class="searchbutton"><span class="fa fa-search"></span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay-menu">
        <div class="panel  text-center">
            <!-- <a href="#">
				<img alt=""
					data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
					class="lazyload"
					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
						alt=""
						data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
						class="lazyload"
						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
							alt=""
							data-src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
							class="lazyload"
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
								src="https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/themes/2br-v2/assets/img/logo.svg"
								alt=""></noscript></noscript></noscript>
			</a> -->
        </div>
        <div class="panel  text-center">
            <p><a href="#overlay-menu" class="h2 text-white toggle"><span class="fa fa-close"></span></a></p>
            <p class="h2">Menu</p>
            <div class="panel rp-top text-left">
                <div class="row">

                    <div class="col-md-3">
                        <h2 class="h5">Practice Areas</h2>
                        <hr class="light" />
                        <ul class="bordered">
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/advisory/">Advisory</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/appeals/">Appeals</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/business-crime/">Business Crime</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/civil-asset-recovery-and-forfeiture/">Civil
                                    Asset Recovery &amp; Forfeiture</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/confiscation/">Confiscation</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/construction-adjudication/">Construction
                                    Adjudication</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/coroners-inquests/">Coroner&#8217;s
                                    Inquests</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/crime/">Crime</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/cyber-security/">Cyber Security</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/defence/">Defence</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/environmental/">Environmental</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/financial-crime/">Financial
                                    Crime</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/financial-services/">Financial
                                    Services</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/fraud/">Fraud</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/health-and-safety/">Health &amp;
                                    Safety</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/international/">International</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h2 class="h5">Practice Areas</h2>
                        <hr class="light" />
                        <ul class="bordered">
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/judicial-review/">Judicial
                                    Review</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/media/">Media</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/military-law/">Military Law</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/modern-slavery/">Modern Slavery</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/murder-and-manslaughter/">Murder
                                    &amp; Manslaughter</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/police-law/">Police Law</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/private-prosecution/">Private
                                    Prosecution</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/professional-discipline/">Professional
                                    Discipline</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/prosecution/">Prosecution</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/public-inquiries/">Public
                                    Inquiries</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/regulatory/">Regulatory</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/road-traffic/">Road Traffic</a>
                            </li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/serious-sexual-offences/">Serious
                                    Sexual Offences</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/special-advocacy/">Special
                                    Advocacy</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/sports-law/">Sports Law</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/practice-area/tribunals/">Tribunals</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h2 class="h5">People</h2>
                        <hr class="light" />
                        <ul class="bordered">
                            <li><a href="https://www.2bedfordrow.co.uk/barristers/">Barristers</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/clerks/">Clerks</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/clerks/">Staff</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h2 class="h5">2 Bedford Row</h2>
                        <hr class="light" />
                        <ul class="bordered">
                            <li><a href="https://www.2bedfordrow.co.uk/">Home</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/about-us/">About Us</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/direct-access/">Direct Access</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/insights/">Insights</a></li>
                            <li><a href="https://www.2bedfordrow.co.uk/contact-us/">Contact Us</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <header class="mobile_header mobileonly bg-gray-700" id="mobileheader">
        <div id="mobile_search" class="mobile-panel">
            <div class="searcharea">
                <form action="get">
                    <div class="searchwrap">
                        <div class="col-field"><input type="text" name="s" value="" placeholder="Search..."></div>
                        <div class="col-btn">
                            <button><span class="fa fa-search"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="nav" class="mobile-panel">
            <ul id="menu-mobile-menu" class="nav_mobile">
                <li id="menu-item-1185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1185"><a href="https://www.2bedfordrow.co.uk/">Home</a></li>
                <li id="menu-item-1200" class="menu-item menu-item-type-post_type_archive menu-item-object-practice-areas menu-item-1200"><a href="https://www.2bedfordrow.co.uk/practice-areas/">Practice Areas</a></li>
                <li id="menu-item-1191" class="menu-item menu-item-type-post_type_archive menu-item-object-barristers menu-item-1191"><a href="https://www.2bedfordrow.co.uk/barristers/">Barristers</a></li>
                <li id="menu-item-1192" class="menu-item menu-item-type-post_type_archive menu-item-object-clerks menu-item-1192"><a href="https://www.2bedfordrow.co.uk/clerks/">Clerks</a></li>
                <li id="menu-item-1187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1187">
                    <a href="https://www.2bedfordrow.co.uk/about-us/">About Us</a>
                </li>
                <li id="menu-item-1189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1189">
                    <a href="https://www.2bedfordrow.co.uk/direct-access/">Direct Access</a>
                </li>
                <li id="menu-item-1190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1190">
                    <a href="https://www.2bedfordrow.co.uk/pupillage/">Pupillage / Mini Pupillage</a>
                </li>
                <li id="menu-item-1186" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-1186">
                    <a href="https://www.2bedfordrow.co.uk/insights/">Insights</a>
                </li>
                <li id="menu-item-1188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1188">
                    <a href="https://www.2bedfordrow.co.uk/contact-us/">Contact Us</a>
                </li>
            </ul>
        </div>

        <nav class="tools">
            <ul>
                <li><a href="/"><span class="fa fa-home"></span></a></li>
                <li><a href="#mobile_search" class="mp"><span class="fa fa-search"></span></a></li>
                <li><a href="#nav" class="mp"><span class="fa fa-navicon"></span></a></li>
            </ul>
        </nav>
    </header>

    <!-- <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
	<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>

	<div class="builder-overlay">
		<div class="builder-wrapper">
			<div class="builder-title-bar">
				<p class="h3 builder-title">Portfolio Builder</p>
				<a href="#" class="builder-close" title="close"><span class="icon-close"></span></a>
			</div>
			<div class="builder-meta">
				<p>Select the practice areas that you would like to download or add to the portfolio</p>
				<ul>
				</ul>
				<a href="#" class="button btn download">Download&nbsp;&nbsp;&nbsp;<span
						class="icon-download"></span></a> <a href="#" class="button btn add">Add to
					portfolio&nbsp;&nbsp;&nbsp;<span class="icon-plus"></span></a>
			</div>
		</div>
	</div>
	<div id="portfolio">
		<div class="barristerportfolio">
			<div class="portfoliowrap">
				<div class="portfolio">
					<div class="portfolio-header">
						Portfolio <a href="#portfolio" class="sl-close"><span class="icon-close"></span></a>
					</div>
					<div class="portfoliocontent">
						<div id="sl-table-wrapper">
							<table id="sl-table" class="sl-table">
								<thead>
									<tr>
										<th class="screenonly-inline"></th>
										<th>Title</th>
										<th>Type</th>
										<th class="sl-centre">CV</th>
										<th class="sl-centre screenonly-inline">Email</th>
										<th class="email-remove"></th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
						<p class="text-right"><a href="#" class="remove-all">Remove All</a></p>
						<p class="text-center"><a href="#" class="button btn download">Download <span
									class="icon-download"></span></a></p>

						<hr>
						<p><a href="#portfolioshare" class="portfolioshare">Click here</a> to share this
							shortlist.<br><em><small>(It will expire after 30 days.)</small></em></p>
						<div class="pdf-share-link">
							<input type="text" value="" id="pdfsharelink" class="form-control" readonly>
							<button id="pdf_share_link" class="btn btn-primary" onclick="wp_law_share_link()">Copy
								link</button>
						</div>
						<hr>
						<div id="sl-footer">
							<p>Need more information about the above Barristers and Practice Areas?<br>Talk to one of
								our clerks: +44 (0)20 7440 8888</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- <link rel='stylesheet' id='cookie-law-info-table-css'
		href='https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-table.css?ver=2.1.2'
		media='all' />
	<script
		src='https://2oq5cg28288838bmfu32g94v-wpengine.netdna-ssl.com/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js?ver=3.9.11'
		id='smush-lazy-load-js'></script> -->
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js?ver=1.0' id='bootstrap-js-js'></script>

    <script src='{{asset("assets/scripts.min.js")}}' id='main-js-js'></script>



</body>

</html>