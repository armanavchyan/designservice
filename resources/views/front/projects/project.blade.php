<!DOCTYPE html>
<html lang="en">


@include('front.layout.main_head1')



<body class="royal_preloader">
    <div id="page" class="site">
        @include('front.layout.main_header1')

        <section id="about" class="about-company">
            <div class="container">
                <div class="row" style="flex-wrap:nowrap">
                    <div class="col-lg-6 col-md-12 ">
                        <div id="rev_slider_one" class="rev_slider" style="height:450px; max-width: 100% ; left: 0px; margin:auto" data-version="5.4.1">
                            <ul>
                                @foreach($project->getServiceImages() as $key => $value)
                                <li>
                                    <img src="/uploads/{{$value->image}}" alt="slidebg{{$key}}" data-bgfit="cover">

                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="about-detail">
                            <div class="ot-heading is-dots">
                                <h2 class="main-heading">{{$project->title}}</h2>
                            </div>
                            <p>{{$project->description}}</p>
                            <table class="table table-striped margin-top-40">
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
        </section>



        @include('front.layout.main_footer')
    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->
    @include('front.layout.jQuery')
</body>

</html>