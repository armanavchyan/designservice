<!DOCTYPE html>
<html lang="en">
@include('front.layout.main_head1')

<body class="royal_preloader">
    <div id="page" class="site">
        @include('front.layout.main_header1')

        <section class="about-company">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 text-center">
                        <div class="">
                            <h2 class="is-dots">{{$page['title']}}</h2>
                        </div>
                    </div>
                    <div class="col-md-12 text-center ">
                        {!! $page['html'] !!}
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