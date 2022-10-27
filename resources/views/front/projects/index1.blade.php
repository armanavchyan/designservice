<!DOCTYPE html>
<html lang="en">


@include('front.layout.main_head1')

<body class="royal_preloader">
    <div id="page" class="site">
        @include('front.layout.main_header1')

        <section class="section-team-list team-1">
            <div class="container">
                <div class="row">
                    @if(!empty($projects->toArray()))
                    <div class="col-lg-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <h2 class="box-header">OUR PROJECTS</h2>
                        </div>
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
            @endif
        </section>

        @include('front.layout.main_footer')
    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->
    @include('front.layout.jQuery')
</body>

</html>