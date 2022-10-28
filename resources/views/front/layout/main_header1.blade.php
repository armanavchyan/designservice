<header id="site-header" class="site-header ">
    <!-- Main Header start -->
    <div class="octf-main-header is-fixed" style="padding-top:20px; padding-bottom:20px ;
     background-color:#1a1a1a">

        <div class="octf-area-wrap">
            <div class="container-fluid octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col no-padding">
                            <div id="site-logo" class="site-logo">
                                <a href="/" style="color:#fff ; font-size: 24px">
                                    ARMBUILD
                                </a>

                            </div>
                        </div>
                        <div class="octf-col menu-col no-padding">
                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li class="has-submenu">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="/services">SERVICE</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="/contact">CONTACT</a>
                                    </li>
                                    @foreach(Layout::getMenuTop() as $value)

                                    <li class="has-submenu"><a href="/pages/{{$value->getpages->slug}}">{{trans('About As'.$value->getpages->titleCode)}}</a></li>

                                    </li>
                                    @endforeach

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile">
        <div class="container-fluid">
            <div class="octf-mainbar-row octf-row">
                <div class="octf-col">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">

                            <a href="/" style="color:#fff">
                                ARMBUILD
                            </a>

                        </div>
                    </div>
                </div>
                <div class="octf-col justify-content-end">
                    <div class="octf-search octf-cta-header">
                        <div class="toggle_search octf-cta-icons">
                            <i class="ot-flaticon-search"></i>
                        </div>
                        <!-- Form Search on Header -->
                        <div class="h-search-form-field collapse">
                            <div class="h-search-form-inner">
                                <form role="search" method="get" class="search-form">
                                    <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                    <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="octf-menu-mobile octf-cta-header">
                        <div id="mmenu-toggle" class="mmenu-toggle">
                            <button><i class="ot-flaticon-menu"></i></button>
                        </div>
                        <div class="site-overlay mmenu-overlay"></div>
                        <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                            <div class="mmenu-inner">
                                <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                <div class="mobile-nav">
                                    <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                        <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                            <a href="/services">SERVICE</a>
                                        </li>
                                        <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                            <a href="/contact">CONTACT</a>
                                        </li>
                                        @foreach(Layout::getMenuTop() as $value)

                                        <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                            <a href="/pages/{{$value->getpages->slug}}">{{trans('About As'.$value->getpages->titleCode)}}</a>
                                        </li>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>