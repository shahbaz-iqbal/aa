<header class="mkdf-page-header">
    <div class="mkdf-menu-area mkdf-menu-left" style="border-bottom: 1px solid #5095cc !important;">
        <div class="mkdf-vertical-align-containers">
            <div class="mkdf-position-left">
                <div class="mkdf-position-left-inner">
                    <div class="mkdf-logo-wrapper">
                        <a itemprop="url" href="{{url('/')}}" style="height: 50px;">
                            <img itemprop="image" class="mkdf-normal-logo" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->image) ?>" alt="logo" />
                            <img itemprop="image" class="mkdf-dark-logo" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->image) ?>" alt="dark logo" />
                            <img itemprop="image" class="mkdf-light-logo" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->image) ?>" alt="light logo" />
                        </a>
                    </div>
                    <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">
                        <ul id="menu-main-menu-navigation" class="clearfix">
                            <li id="nav-menu-item-58" class="{{ (request()->route()->uri == '/') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children has_sub wide mkdf-wide-menu-centered">
                                <a href="{{url('/')}}" class=" current "><span class="item_outer"><span class="item_text">Home</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li>
                            <li id="nav-menu-item-59" class="{{ (request()->route()->uri == 'team') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="{{url('/team')}}" class=""><span class="item_outer"><span class="item_text">Our
                                            Team</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li>



                            <!-- <li id="nav-menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="{{url('/expertise')}}" class=""><span class="item_outer"><span class="item_text">Expertise</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li> -->

                            <li id="nav-menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="javascript:void(0)" class=""><span class="item_outer"><span class="item_text">Expertise</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">
                                        <ul style="background: #5095cc !important;">
                                            @foreach(App\Models\Expertise::all() as $expert_val)
                                            <li id="nav-menu-item-1420" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{url('/expertise/' . $expert_val->id)}}" class=""><span class="item_outer"><span class="item_text drop">{{$expert_val->title}}</span></span></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li id="nav-menu-item-60" class="{{ (request()->route()->uri == 'funding') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="{{url('/funding')}}" class=""><span class="item_outer"><span class="item_text">Funding</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li>

                            <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'career') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="{{url('/career')}}" class=""><span class="item_outer"><span class="item_text">Career</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li>

                            <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'blog') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="{{url('/blog')}}" class=""><span class="item_outer"><span class="item_text">Blog</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li>

                            <li id="nav-menu-item-63" class="{{ (request()->route()->uri == 'contact') ? 'active' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">
                                <a href="{{url('/contact')}}" class=""><span class="item_outer"><span class="item_text">Contact Us</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </nav>

                </div>
            </div>
            <div class="mkdf-position-right">
                <div class="mkdf-position-right-inner">
                    <a style="margin: -2px 30px 0px; color:rgb(0, 0, 0)" class="mkdf-search-opener mkdf-icon-has-hover mkdf-search-opener-icon-pack" href="javascript:void(0)">
                        <span class="mkdf-search-opener-wrapper">
                            <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-magnifier "></span> </span>
                    </a>
                    <a style="color:rgb(0, 0, 0);" class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack" href="javascript:void(0)">
                        <span class="mkdf-side-menu-icon">
                            <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-menu "></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mkdf-sticky-header">
        <div style="border-bottom:1px solid #5095cc ;" class="mkdf-sticky-holder mkdf-menu-left">
            <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left">
                    <div class="mkdf-position-left-inner">
                        <div class="mkdf-logo-wrapper">
                            <a itemprop="url" href="{{url('/')}}" style="height: 50px;">
                                <img itemprop="image" class="mkdf-normal-logo" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->image) ?>" alt="logo" />
                                <img itemprop="image" class="mkdf-dark-logo" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->image) ?>" alt="dark logo" />
                                <img itemprop="image" class="mkdf-light-logo" src="<?php echo asset('public/images' . '/' . \App\Models\Setting::first()->image) ?>" alt="light logo" /> </a>
                        </div>
                        <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">
                            <ul id="menu-main-menu-navigation" class="clearfix">
                                <li id="nav-menu-item-58" class="{{ (request()->route()->uri == '/') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children has_sub wide mkdf-wide-menu-centered">
                                    <a href="{{url('/')}}" class=" current "><span class="item_outer"><span class="item_text">Home</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-59" class="{{ (request()->route()->uri == 'team') ? 'mkdf-active-item' : '' }}menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="{{url('/team')}}" class=""><span class="item_outer"><span class="item_text">Our Team</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-61" class="{{ (request()->route()->uri == 'expertise') ? 'mkdf-active-item' : '' }}menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="{{url('/expertise')}}" class=""><span class="item_outer"><span class="item_text">Expertise</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>

                                <li id="nav-menu-item-60" class="{{ (request()->route()->uri == 'funding') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="{{url('/funding')}}" class=""><span class="item_outer"><span class="item_text">Funding</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'career') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="{{url('/career')}}" class=""><span class="item_outer"><span class="item_text">Career</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>

                                <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'blog') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="{{url('/blog')}}" class=""><span class="item_outer"><span class="item_text">Blog</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>

                                <li id="nav-menu-item-63" class="{{ (request()->route()->uri == 'career') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">
                                    <a href="{{url('/contact')}}" class=""><span class="item_outer"><span class="item_text">Contact Us</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="mkdf-position-right">
                    <div class="mkdf-position-right-inner">
                        <a style="margin: -2px 30px 0px;" class="mkdf-search-opener mkdf-icon-has-hover mkdf-search-opener-icon-pack" href="javascript:void(0)">
                            <span class="mkdf-search-opener-wrapper">
                                <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-magnifier "></span> </span>
                        </a>
                        <a class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack" href="javascript:void(0)">
                            <span class="mkdf-side-menu-icon">
                                <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-menu "></span> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="https://anwalt.qodeinteractive.com/" class="mkdf-search-cover" method="get">
        <div class="mkdf-container">
            <div class="mkdf-container-inner clearfix">
                <div class="mkdf-form-holder-outer">
                    <div class="mkdf-form-holder">
                        <div class="mkdf-form-holder-inner">
                            <input type="text" placeholder="Search" name="s" class="mkdf_search_field" autocomplete="off" />
                            <a class="mkdf-search-close mkdf-search-close-icon-pack" href="#">
                                <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-cross "></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</header>