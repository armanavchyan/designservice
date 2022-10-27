<!DOCTYPE html>
<html lang="en">


@include('front.layout.main_head1')



<body class="royal_preloader">
    <div id="page" class="site">
        @include('front.layout.main_header1')

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

                    <div class="widget-area  col-lg-9 col-md-12">
                        <div class="widget_nav_menu ">
                            <h3>
                                <a href="#" title="{{$value->title}}">{{$serviceI->title}}</a>
                            </h3>
                        </div>
                        <div class="simple-slide  owl-carousel">


                            <div id="rev_slider_one" class="rev_slider" data-version="5.4.1">
                                <ul>
                                    @foreach($serviceI->getServiceImages() as $key => $value)
                                    <li>
                                        <img src="/uploads/{{$value->image}}" alt="slidebg{{$key}}">

                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="row ">
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