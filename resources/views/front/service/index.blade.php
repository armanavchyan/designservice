@extends('front.layout.main')
@section('content')
    <div class="clearfix">
        <div class="row margin-top-70">
            <div class="column column-1-4">
                <ul class="vertical-menu">
                @foreach($service as $key => $value)
                    <li class="{{($value->title == $serviceI->title) ? 'selected' : '' }}">
                        <a href="?title={{$value->title}}" title="{{$value->title}}">
                            {{$value->title}}
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                @endforeach
                    
                </ul>
            </div>
            <div class="column column-3-4">
                <div class="row">
                    <div class="tp-caption" data-start="500"
                        data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;"
                        data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                        >
                        <div class="slider-content-box" style="padding-bottom: 0px;width: 100%;max-width: 100%;margin-left: 0;   background: rgb(244, 188, 22);">
                            <h2 style="background: #fff8f800;"><a href="#" title="{{$value->title}}" style="">{{$serviceI->title}}</a></h2>
                        </div>
                    </div>
                    <div class="revolution-slider-container">
                        <div class="revolution-slider" data-version="5.4.8" style="display: none;">
                            <ul style="display: none;">
                                @foreach($serviceI->getServiceImages() as $key => $value)
                                <!-- SLIDE {{$key}} -->
                                    <li data-transition="fade" data-masterspeed="500" data-slotamount="{{$key}}" data-delay="6000">
                                        <!-- MAIN IMAGE -->
                                        <img src="/uploads/{{$value->image}}" style="height: 600px" alt="slidebg{{$key}}" data-bgfit="cover">
                                        <!-- LAYERS -->
                                        <!-- LAYER {{$key}} -->
                                  <!--       <div class="tp-caption" data-start="500"
                                            data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;"
                                            data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                                            >
                                            <div class="slider-content-box" style="padding-bottom: 0px;">
                                                <h2 style="background: #fff8f800;"><a href="#" title="{{$value->title}}" style="">{{$serviceI->title}}</a></h2>
                                            </div>
                                        </div> -->
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
             <!--    @foreach($serviceI->getServiceImages() as $key => $value)
                    <div class="column column-1-4" style="margin-left: 0">
                        <a href="/uploads/{{$value->image}}" class="prettyPhoto re-preload" title="{{$serviceI->title}} - {{$key+1}}">
                            <img src='/uploads/thumb_{{$value->image}}' alt='{{$serviceI->title}} - {{$key+1}}'>
                        </a>
                    </div>
                @endforeach -->
                </div>
                <div class="row page-margin-top">
                    <div class="column-1-1">
                        <div class="col-md-12">
                            {!! $serviceI->description
                            !!}</div>
                    </div>
                </div>
                <div class="row page-margin-top padding-bottom-70">
                    
                    <div class="column column-1-2">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
@endsection