@extends('back.layout.main')
@section('content')
    <h1>admin</h1>

    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
                    <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"
                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>

                        <h2>settings form </h2>

                    </header>

                    <!-- widget div-->
                    <div>
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
                        </div>
                        <!-- end widget edit box -->
                        <!-- widget content -->
                        <div class="widget-body no-padding">

                        {{ Form::model($settings,array('class'=>'smart-form'))}}

                        <div class="col-xs-12">
                          <section class="col col-2">
                            {{ Form::label('phone', 'phone', array('class' => 'input'))}}
                            {{ Form::text('phone', $settings->phone, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('phone') }}
                          </section> 
                          <section class="col col-2">
                            {{ Form::label('email', 'email', array('class' => 'input'))}}
                            {{ Form::text('email', $settings->email, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('email') }}
                          </section>  
                          <section class="col col-2">
                            {{ Form::label('fb_link', 'fb_link', array('class' => 'input'))}}
                            {{ Form::text('fb_link', $settings->fb_link, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('fb_link') }}
                          </section>      
                          <section class="col col-2">
                            {{ Form::label('addres', 'addres', array('class' => 'input'))}}
                            {{ Form::text('addres', $settings->addres, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('addres') }}
                          </section>                           
                        
                        </div>   
                        <div class="col-xs-12" style="padding: 10px">
                        {{ Form::submit('Submit',$attributes = array('class'=>'btn btn-primary') )}}
                        </div>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->
            </article>
            <!-- END COL -->
        </div>
  
    </section>
@stop