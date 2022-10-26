@extends('front.layout.main')
@section('content')
<div class="revolution-slider-container">
    <div class="revolution-slider" data-version="5.4.8" style="display: none;">
        <ul style="display: none;">
            @foreach($service as $key => $value)
            <!-- SLIDE {{$key}} -->
            <li data-transition="fade" data-masterspeed="500" data-slotamount="{{$key}}" data-delay="6000">
                <!-- MAIN IMAGE -->
                <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" style="height: 600px" alt="slidebg{{$key}}" data-bgfit="cover">
                <!-- LAYERS -->
                <!-- LAYER {{$key}} -->
            <li data-index="rs-70" data-transition="fade" data-slotamount="{{$key}}" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->

                <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" data-bgcolor='rgba(255,255,255,0)' style="height: 600px" alt="slidebg{{$key}}" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina>

                <div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
                    <div class="tp-caption" data-start="500" data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;" data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;" id="layer-597158573" style="visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 14px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px; white-space: normal; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                        <div class="slider-content-box">
                            <h2><a href="/services?id=14" title="Flooring" style="">Flooring</a></h2>
                            <p>We strive to create interior spaces that enhance your style and drive creativity and inspiration. By illustrating your decor with different types of materials and elements, our flooring options give you the choice to express yourself to the fullest. </p>
                        </div>
                    </div>
                </div>



                <!-- LAYER 6  Read More-->

            </li>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="theme-page">
    <div class="clearfix">
        <div class="row full-width gray page-padding-top-section">
            <div class="row">
                <h2 class="box-header">OUR SERVICES</h2>
                <p class="description align-center">
                    ARMBuild LTD is a professional construction company now more than 15 years in the industry.<br>
                    All aspects of work are carried out by a friendly and understanding team. <br>
                    We offer a full range of services
                </p>
                <ul class="services-list clearfix page-margin-top ">
                    @foreach($service as $key => $value)
                    <li>
                        <a href="/services?id={{$value->id}}" title="{{$value->title}}">
                            <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" style="height: 260px;width: 100%;" alt="">
                        </a>
                        <h4 class="box-header"><a href="/services?id={{$value->id}}" title="{{$value->title}}">{{$value->title}}</a></h4>
                        <p style="    height: 190px;">{{$value->min_description}}</p>
                    </li>
                    @endforeach
                </ul>
                <div class="align-center margin-top-67 padding-bottom-87">
                    <a class="more" href="/services" title="VIEW ALL SERVICES">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>

        @if(!empty($projects->toArray()))
        <div class="row full-width page-margin-top-section">
            <div class="row">
                <h2 class="box-header">RECENT PROJECTS</h2>
                <p class="description align-center">Here are a few of many projects we have completed for our customers. We provide a professional service<br>which includes consultation, free estimate, design, supply of materials and installation.</p>
            </div>
            <ul class="projects-list clearfix page-margin-top">
                @foreach($projects as $key => $value)
                <li>
                    <a href="/project_design_build" title="Design and Build">
                        <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" alt="">
                    </a>
                    <div class="view align-center">
                        <div class="vertical-align-table">
                            <div class="vertical-align-cell">
                                <p class="description">{{$value->title}}</p>
                                <a class="more simple" href="/projects/{{$value->id}}" title="VIEW PROJECT">VIEW PROJECT</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <div class="row gray full-width padding-top-54 padding-bottom-61 align-center">
            <h3><span class="button-label">EXPLORE OUR PROJECTS</span> <a class="more" href="/projects" title="VIEW ALL PROJECTS">VIEW ALL PROJECTS</a></h3>
        </div>
        @endif

        <div class="row gray full-width page-margin-top-section page-padding-top-section padding-bottom-66">
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
</div>
@endsection