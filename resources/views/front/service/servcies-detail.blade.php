<!DOCTYPE html>
<html lang="en">


@include('front.layout.main_head1')



<body class="royal_preloader">
    <div id="page" class="site">
        @include('front.layout.main_header1')

        <!-- <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="images/logo-footer.svg" alt="Theratio">
                        </a>                    
                    </div>
                    <div class="ot-heading">
                        <h2 class="main-heading">Our Gallery</h2>
                    </div>
                    <div class="image-gallery">
                        <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery1.jpg">
                                        <img src="images/gallery-small-1.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery2.jpg">
                                        <img src="images/gallery-small-2.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery3.jpg">
                                        <img src="images/gallery-small-3.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery4.jpg">
                                        <img src="images/gallery-small-4.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery5.jpg">
                                        <img src="images/gallery-small-5.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery6.jpg">
                                        <img src="images/gallery-small-6.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">theratio_interior@mail.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+1 800 456 789 123</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <section class="services-single">
            <div class="container">
                <div class="row">
                    <div class="widget-area col-lg-3 col-md-12">
                        <div class="widget widget_nav_menu">
                            <ul class="services-menu">
                                @foreach($service as $key => $value)
                                <li class="{{($value->title == $serviceI->title) ? 'selected' : '' }}">
                                    <a href="?title={{$value->title}}" title="{{$value->title}}">
                                        {{$value->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class=" widget-area col-lg-9 col-md-12">
                        <div class="widget_nav_menu " style=" padding-bottom: 0px;width: 100%;max-width: 100%;margin-left: 0">
                            <h3><a href="#" title="{{$value->title}}" style="">{{$serviceI->title}}</a></h3>
                        </div>
                        <div style="height: 150px !important" class="simple-slide  owl-carousel">

                            <!-- <div class="owl-stage-outer"> -->

                            <div style="height: 150px !important" id="rev_slider_one" class="rev_slider" data-version="5.4.1">
                                <ul style="height: 150px !important">
                                    @foreach($serviceI->getServiceImages() as $key => $value)
                                    <li style="height: 150px !important"  >
                                        <img style="height: 150px !important" src="/uploads/{{$value->image}}"  alt="slidebg{{$key}}" >

                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="row page-margin-top">
                            <div class="column-1-1">
                                <div class="col-md-12">
                                    {!! $serviceI->description
                                    !!}</div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>

        @include('front.layout.main_footer')
    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->
    @include('front.layout.jQuery')
</body>

</html>