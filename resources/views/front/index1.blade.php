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
                        <h1>
                            <a href="/" style="color:#f4bc16">
                                ARMBUILD
                            </a>
                        </h1>
                    </div>
                    <div class="ot-heading">
                        <h2 class="main-heading">Our Gallery</h2>
                    </div>
                    <div class="image-gallery">
                        <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery1.jpg">
                                        <img src="{{asset('/assets/images/gallery-small-1.jpg')}}" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery2.jpg">
                                        <img src="{{asset('/assets/images/gallery-small-2.jpg')}}" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery3.jpg">
                                        <img src="{{asset('/assets/images/gallery-small-3.jpg')}}" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery4.jpg">
                                        <img src="{{asset('/assets/images/gallery-small-4.jpg')}}" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery5.jpg">
                                        <img src="{{asset('/assets/images/gallery-small-5.jpg')}}" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery6.jpg">
                                        <img src="{{asset('/assets/images/gallery-small-6.jpg')}}" class="" alt="">
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

        <div id="content" class="site-content">

            @include('front.layout.slider-content')

            <section class="services-1">
                <div class="grid-lines grid-lines-vertical">
                    <span class="g-line-vertical line-left color-line-default"></span>
                    <span class="g-line-vertical line-center color-line-default"></span>
                    <span class="g-line-vertical line-right color-line-default"></span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center theratio-align-center">
                            <div class="ot-heading is-dots">
                                <h2 class="box-header">OUR SERVICES</h2>
                            </div>
                            <p class="description align-center">
                                ARMBuild LTD is a professional construction company now more than 15 years in the industry.<br>
                                All aspects of work are carried out by a friendly and understanding team. <br>
                                We offer a full range of services
                            </p>


                            <div class="space-50"></div>
                        </div>
                    </div>
                    <div class="row ">
                        @foreach($service as $key => $value)
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center hover-for-h4">
                                <div class="icon-main"><img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" style="height:150px"></div>
                                <div class="content-box ">
                                    <h4 class="box-header"><a href="/services?id={{$value->id}}" title="{{$value->title}}">{{$value->title}}</a></h4>
                                    <div class=" ot-heading is-dots" style="left:35%; padding-bottom: 0 "></div>
                                    <p style="height: 400px; font-family: Raleway, sans-serif; line-height: 1.875; font-weight:400">{{$value->min_description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="ot-button" style="margin:auto ; margin-top:10%">
                            <a href="/services" class="octf-btn octf-btn-dark">VIEW ALL SERVICES</a>
                        </div>

                    </div>

                </div>
            </section>


            <section class="section-team-list team-1">
                <div class="container">
                    <div class="row">
                        @if(!empty($projects->toArray()))
                        <div class="col-lg-12 text-center theratio-align-center">
                            <div class="ot-heading is-dots">
                                <h2 class="box-header">RECENT PROJECTS</h2>
                            </div>
                            <p class="description align-center">Here are a few of many projects we have completed for our customers. We provide a professional service<br>which includes consultation, free estimate, design, supply of materials and installation.</p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        @foreach($projects as $key => $value)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-box masonry-post post-item">
                                <div class="post-inner">
                                    <div class="entry-media post-cat-abs">

                                        <a href="/project_design_build">
                                            <p class="description">{{$value->title}}</p>
                                        </a>
                                        <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" alt="">
                                        <div class="post-cat">
                                            <div class="posted-in"><a href="/projects/{{$value->id}}">VIEW PROJECT</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <h4 style="margin:auto">
                        <div class="ot-button" style="margin:auto ; margin-top:10%">
                            <span class="button-label">EXPLORE OUR PROJECTS</span>
                            <a href="/services" class="octf-btn octf-btn-dark">VIEW ALL PROJECTS</a>
                        </div>
                    </h4>
                </div>
                @endif
            </section>
            <section class="process-step">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <div class="ot-process" data-tab="true">
                                <ul class="process_nav unstyle">
                                    <li class="">
                                        <div class="icon-main">
                                            <span class="dcell"><span class="icon-chat-left"></span></span>
                                        </div>
                                        <h5> We Offer</h5>
                                    </li>
                                    <li class="">
                                        <div class="icon-main">
                                            <span class="dcell"><span class="icon-shield-check"></span></span>

                                        </div>
                                        <h5>We Guarantee</h5>
                                    </li>
                                    <li class="">
                                        <div class="icon-main">
                                            <span class="dcell"><span class="icon-truck"></span></span>
                                        </div>
                                        <h5>We Provide</h5>
                                    </li>

                                </ul>


                                <div class="process-des">

                                    <div class="process-des-item" style="display: none;">
                                        <h1>OUR OFFER</h1>
                                        <p> Paetos dignissim at cursus elefeind norma arcu.
                                            Pellentesque accumsan est in tempus etos ullamcorper,
                                            sem quam suscipit lacus maecenas tortor. Erates vitae
                                            node metus. Suspendisse gravida ornare non mattis velit
                                            rutrum modest. Morbi suspendisse a tortor velim pellentesque
                                            uter justo magna gravida.</p>
                                    </div>


                                    <div class="process-des-item" style="display: none;">
                                        <h1>We Guarantee</h1>
                                        <p>Paetos dignissim at cursus elefeind norma arcu.
                                            Pellentesque accumsan est in tempus etos ullamcorper,
                                            sem quam suscipit lacus maecenas tortor. Erates vitae
                                            node metus. Suspendisse gravida ornare non mattis velit
                                            rutrum modest. Morbi suspendisse a tortor velim pellentesque
                                            uter justo magna gravida.</p>

                                    </div>


                                    <div class="process-des-item" style="display: block;">
                                        <h1>We Provide</h1>
                                        <p>Paetos dignissim at cursus elefeind norma arcu.
                                            Pellentesque accumsan est in tempus etos ullamcorper,
                                            sem quam suscipit lacus maecenas tortor. Erates vitae
                                            node metus. Suspendisse gravida ornare non mattis velit
                                            rutrum modest. Morbi suspendisse a tortor velim pellentesque
                                            uter justo magna gravida.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section>
                <div class="container">
                    <div class="row  full-width page-margin-top-section page-padding-top-section padding-bottom-66">
                        <div class="row">
                            <div class="tabs no-scroll clearfix">
                                <ul class="tabs-navigation clearfix">
                                    <li>
                                        <a href="#we-offer" title="We Offer" class="sl-small-bubble-check">
                                            We Offer
                                        </a>
                                        <span></span>
                                    </li>
                                    <li>
                                        <a href="#we-guarantee" title="We Guarantee" class="sl-small-shield">
                                            We Guarantee
                                        </a>
                                        <span></span>
                                    </li>
                                    <li>
                                        <a href="#we-provide" title="We Provide" class="sl-small-truck">
                                            We Provide
                                        </a>
                                        <span></span>
                                    </li>
                                </ul>
                                <div id="we-offer">
                                    <h4 class="box-header">OUR OFFER</h4>
                                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
                                </div>
                                <div id="we-guarantee">
                                    <h4 class="box-header">OUR WARRANTY COVERS</h4>
                                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>

                                </div>
                                <div id="we-provide">
                                    <h4 class="box-header">OUR SERVICES</h4>
                                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section> -->
        </div>
        @include('front.layout.main_footer')


    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->
    @include('front.layout.jQuery')
</body>

</html>