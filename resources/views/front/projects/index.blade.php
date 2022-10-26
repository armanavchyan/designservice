@extends('front.layout.main')
@section('content')
<div class="theme-page padding-bottom-70">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>OUR PROJECTS</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>You Are Here:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="Home" href="/">
                                    HOME
                                </a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                OUR PROJECTS
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="row">
            <ul class="projects-list isotope">
                @foreach($projects as $key => $value)
                    <li class="renovation">
                        <a href="projects/{{$value->id}}" title="Interior Renovation">
                            <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" alt="">
                        </a>
                        <div class="view align-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">{{$value->title}}</p>
                                    <a class="more simple" href="projects/{{$value->id}}" title="VIEW PROJECT">VIEW PROJECT</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>

</div>
    
@endsection