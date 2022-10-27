<!DOCTYPE html>
<html lang="en">

@include('front.layout.main_head1')

<body class="royal_preloader">
    <div id="page" class="site">
        @include('front.layout.main_header1')

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
                <div class="grid-lines grid-lines-vertical">
                    <span class="g-line-vertical line-left color-line-default"></span>
                    <span class="g-line-vertical line-center color-line-default"></span>
                    <span class="g-line-vertical line-right color-line-default"></span>
                </div>
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

                                        <a href="/projects/{{$value->id}}">
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
                            <a href="/projects" class="octf-btn octf-btn-dark">VIEW ALL PROJECTS</a>
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
        </div>
        @include('front.layout.main_footer')

    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->
    @include('front.layout.jQuery')
</body>

</html>