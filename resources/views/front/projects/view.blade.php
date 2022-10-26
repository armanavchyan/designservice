@extends('front.layout.main')
@section('content')
<div class="theme-page padding-bottom-66">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>{{$project->title}}</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>You Are Here:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="Our Projects" href="/projects">
                                    OUR PROJECTS
                                </a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                {{$project->title}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix">
        <div class="row margin-top-70">
            <div class="column column-1-2">

                <div class="">

                    <div class="revolution-slider-container">
                        <div class="revolution-slider" data-version="5.4.8" style="display: none;">
                            <ul style="display: none;">
                                @foreach($project->getServiceImages() as $key => $value)
                                <!-- SLIDE {{$key}} -->
                                    <li data-transition="fade" data-masterspeed="500" data-slotamount="{{$key}}" data-delay="6000">
                                        <!-- MAIN IMAGE -->
                                        <img src="/uploads/{{$value->image}}"  alt="slidebg{{$key}}" data-bgfit="cover">
                                        <!-- LAYERS -->
                                        <!-- LAYER {{$key}} -->
                                  <!--       <div class="tp-caption" data-start="500"
                                            data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;"
                                            data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                                            >
                                            <div class="slider-content-box" style="padding-bottom: 0px;">
                                                <h2 style="background: #fff8f800;"><a href="#" title="{{$project->title}}" style="">{{$project->title}}</a></h2>
                                            </div>
                                        </div> -->
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="column column-1-2">
                <h3 class="box-header">BRIEF DESCRIPTION</h3>
                <p class="description t1">{{$project->description}}</p>
                <h4 class="box-header page-margin-top">AT A GLANCE</h4>
                <table class="margin-top-40">
                    <tbody>
                        <tr>
                            <td>Project Type</td>
                            <td>{{$project->project_type}}</td>
                        </tr>
                        <tr>
                            <td>Client</td>
                            <td>{{$project->client}}</td>
                        </tr>
                        <tr>
                            <td>Completion Date</td>
                            <td>{{$project->completion_date}}</td>
                        </tr>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>  
@endsection