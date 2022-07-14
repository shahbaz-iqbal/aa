<header class="mkdf-mobile-header">
    <div class="mkdf-mobile-header-inner">
        <div class="mkdf-mobile-header-holder">
            <div class="mkdf-grid">
                <div class="mkdf-vertical-align-containers">
                    <div class="mkdf-vertical-align-containers">
                        <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-icon-pack">
                            <a href="javascript:void(0)">
                                <span class="mkdf-mobile-menu-icon">
                                    <span aria-hidden="true" class="mkdf-icon-font-elegant icon_menu "></span> </span>
                            </a>
                        </div>
                        <div class="mkdf-position-center">
                            <div class="mkdf-position-center-inner">
                                <div class="mkdf-mobile-logo-wrapper">
                                    <a itemprop="url" href="{{url('/')}}" style="height: 50px">
                                        <img itemprop="image" src="<?php echo asset('/public/website') ?>/assets/wp-content/themes/anwalt/assets/img/logo.png" alt="Mobile Logo" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mkdf-position-right">
                            <div class="mkdf-position-right-inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mkdf-mobile-nav" role="navigation" aria-label="Mobile Menu">
            <div class="mkdf-grid">
                <ul id="menu-mobile-menu" class="">
                    <li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub">
                        <a href="{{url('/')}}" class="current mkdf-mobile-no-link"><span>Home</span></a>
                    </li>
                    <li id="mobile-menu-item-3096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{url('/team')}}" class=" mkdf-mobile-no-link"><span>Our Team</span></a>
                    </li>

                    <!-- <li id="nav-menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                        <a href="#" class=""><span class="item_outer"><span class="item_text">Expertise</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                        <div class="second">
                            <div class="inner">
                                <ul>
                                    @foreach(App\Models\Expertise::all() as $expert_val)
                                    <li id="nav-menu-item-1420" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                        <a href="{{url('/expertise/' . $expert_val->id)}}" class=""><span class="item_outer"><span class="item_text">{{$expert_val->title}}</span></span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li> -->
                    <li id="mobile-menu-item-3096"  onclick="myFunction()" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub" style="padding: 9px 0px 9px 4px;">
                        <span style="font-family: Lustria; font-size: 16px; line-height: 24px; font-weight: 400;" class="item_text">Expertise</span><i class="mkdf-menu-arrow fa fa-angle-down ml-2 mt-1"></i>
                    </li>
                    <hr style="margin-bottom: 0px; margin-top:0px;" />
                    <div id="myDIV" style="display: none;">
                        @foreach(App\Models\Expertise::all() as $expert_val)
                        <li id="nav-menu-item-1420" class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="{{url('/expertise/' . $expert_val->id)}}" class=""><span class="item_outer"><span class="item_text">{{$expert_val->title}}</span></span></a>
                        </li>
                        @endforeach
                    </div>

                    <li id="mobile-menu-item-3096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{url('/funding')}}" class="mkdf-mobile-no-link"><span>Funding</span></a>
                    </li>

                    <li id="mobile-menu-item-3096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{url('/career')}}" class=" mkdf-mobile-no-link"><span>Career</span></a>
                    </li>

                    <li id="mobile-menu-item-3096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{url('/blog')}}" class=" mkdf-mobile-no-link"><span>Blog</span></a>
                    </li>

                    <li id="mobile-menu-item-3096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{url('/contact')}}" class=" mkdf-mobile-no-link"><span>Contact Us</span></a>
                    </li>
                </ul>
            </div>
        </nav>


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