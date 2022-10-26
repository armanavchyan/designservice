<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/back/css/bootsrtap-form-helpers/dist/css/bootstrap-formhelpers.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/icons/css/ionicons.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/font-awesome-4.5.0/css/font-awesome.min.css')}}" />

        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/dist/css/keditor-1.1.5.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/dist/css/keditor-components-1.1.5.css')}}" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/css/examples.css')}}" />
        <script type="text/javascript" src="{{asset('/assets/back/keditor/plugins/jquery-1.11.3/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/back/keditor/examples/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/back/keditor/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/back/keditor/plugins/jquery.nicescroll-3.6.6/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('assets/back/js/plugin/ckeditor/ckeditor.js')}}"></script>
        <script src="{{asset('assets/back/keditor/plugins/ckeditor-4.5.6/config.js')}}"></script>

        <script type="text/javascript" src="{{asset('/assets/back/keditor/plugins/ckeditor-4.5.6/adapters/jquery.js')}}"></script>
        <!-- Start of KEditor scripts -->
        <script type="text/javascript" src="{{asset('/assets/back/keditor/dist/js/keditor-1.1.5.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/back/keditor/dist/js/keditor-components-1.1.5.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/css/st.css')}}">

    </head>

    <body>
        <div class="container">
            <div  id="editor">
                    <section>
                        {!!$html!!}
                    </section>
            </div>
        </div>
        <button id="save" >Save</button>
        <style type="text/css" media="screen">
            #editorcontent{
                display: none
            }
        </style>
        {{ Form::model($pages,array('class'=>'smart-form','id'=>'formhtml'))}}
            {{ Form::textarea('html', $pages->html, $attributes = array('id'=>'editorcontent'))}}
        {{Form::close()}}

        <script type="text/javascript">
            $(function() {
                $( "#save" ).on("click",function( event ) {
                  event.preventDefault();
                  $("#editorcontent").val($('#editor').keditor('getContent'));
                   $( "#formhtml" ).submit();
                });
            

                x = $('#editor').keditor({
                    contentAreasSelector: '#header, #body, #footer'
                    ,filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images', 
                                  filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}', 
                                  filebrowserBrowseUrl: '/laravel-filemanager?type=Files', 
                                  filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
                });


  

                
            });
        </script>
        
    </body>
</html>
