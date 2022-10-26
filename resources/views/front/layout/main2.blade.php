<!DOCTYPE html>
<html>
    <head>
        <title>Renovate - Construction Renovation Template</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="keywords" content="Construction, Renovation" />
        <meta name="description" content="Responsive Construction Renovation Template" />
        <!--slider revolution-->

        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/icons/css/ionicons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/css/st.css')}}" >
        

        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/rs-plugin/css/settings.css')}}">
        <!--style-->
        <link href='//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/reset.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/superfish.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/prettyPhoto.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/jquery.qtip.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/animations.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/style/odometer-theme-default.css')}}">
        <!--fonts-->
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/fonts/streamline-small/styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/fonts/streamline-large/styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/fonts/template/styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/front/fonts/social/styles.css')}}">
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>

<body class="">
  <div class="site-container">
    <div class="header-top-bar-container clearfix">
      <div class="header-top-bar">
        <ul class="contact-details clearfix">
          <li class="template-phone">
            <a href="tel:+149752322235">{{Layout::getSeting()->phone}}</a>
          </li>
          <li class="template-mail">
            <a href="mailto:{{Layout::getSeting()->email}}">{{Layout::getSeting()->email}}</a>
          </li>
          <li class="template-clock">
            Mon - Fri: 08.00 - 17.00
          </li>
        </ul>
        <ul class="social-icons">
          <li>
            <a target="_blank" href="{{Layout::getSeting()->fb_link}}" class="social-facebook" title="facebook"></a>
          </li>
        </ul>
      </div>
      <a href="#" class="header-toggle template-arrow-up"></a>
    </div>
    <div class="header-container">
      <div class="vertical-align-table column-1-1">
        <div class="header clearfix">
          <div class="logo vertical-align-cell">
            <h1><a href="/" title="Renovate">ARMBUILD</a></h1>
          </div>
          <a href="#" class="mobile-menu-switch vertical-align-cell">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </a>
          <div class="menu-container clearfix vertical-align-cell">
            <nav>
              <ul class="sf-menu">
                <li class='selected'>
                  <a href="/" title="Home">
                    HOME
                  </a>
                </li>
                <li >
                  <a href="/services" title="Services">
                    SERVICES
                  </a>
                </li>
                <li class="left-flyout">
                  <a href="/contact" title="Contact">
                    CONTACT
                  </a>
                </li>
                @foreach(Layout::getMenuTop() as $value)
                  <li class="">
                    <a href="/pages/{{$value->getpages->slug}}" >
                       {{ $value->getpages->title}}
                    </a>
                  </li> 
                @endforeach
              </ul>
            </nav>
            <div class="mobile-menu-container">
              <div class="mobile-menu-divider"></div>
              <nav>
                <ul class="mobile-menu collapsible-mobile-submenus">
                  <li class='selected'>
                    <a href="/" title="Home">
                      HOME
                    </a>
                  </li>
                  <li >
                    <a href="/services" title="Services">
                      SERVICES
                    </a>
                  </li>
                  <li class="left-flyout">
                    <a href="/contact" title="Contact">
                      CONTACT
                    </a>
                  </li>
                  @foreach(Layout::getMenuTop() as $value)
                    <li class="">
                      <a href="/pages/{{$value->getpages->slug}}" style="color: #f9f9f9;">
                         {{ $value->getpages->title}}
                      </a>
                    </li> 
                  @endforeach
                </ul>
              </nav>
            </div>            
          </div>
        </div>
      </div>
    </div>
    @yield('content')
   
    <div class="row align-center padding-top-bottom-30">
      <span class="copyright">© Copyright {{date('Y')}}  </span>
    </div>
  </div>
@include('front.layout.main_scripts')
</body>
