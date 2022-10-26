@extends('front.layout.main2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="box-header">{{$page['title']}}</h2>
            </div>
        </div>
    </div>
        <div class="clearfix">
            <div class="margin-top-70">
                 {!! $page['html'] !!}
            </div>
        </div>    
@endsection