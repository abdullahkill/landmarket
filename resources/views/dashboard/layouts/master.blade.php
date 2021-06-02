<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Land-E-Market | Welcome @yield('title')</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

        <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/summernote/summernote-bs4.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/pnotify/pnotify.custom.css')}}" />

        <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />

        <!--(remove-empty-lines-end)-->

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('css/theme.css')}}" />


        <!--(remove-empty-lines-end)-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{asset('css/skins/default.css')}}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('css/chosen.css')}}">
        <link rel="stylesheet" href="{{asset('css/fileinput.css')}}">

        <!-- Head Libs -->
        <script src="{{asset('vendor/modernizr/modernizr.js')}}"></script>

        <script src="{{asset('vendor/jquery/jquery.js')}}"></script>

        <link rel="stylesheet"  href="{{asset('assets/css/dataTables.min.css')}}">

    </head>
    <body>
        <section class="body">
            @include('dashboard.layouts.header')
            <div class="inner-wrapper">
                @include('dashboard.layouts.sidebar')
                <section role="main" class="content-body">
                    @yield('content')
                    @yield('limit')
                  
                </section>
            </div>
        </section>

        <!-- Vendor -->
        <script src="{{asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
        <script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('vendor/common/common.js')}}"></script>
        <script src="{{asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
        <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
        <script src="{{asset('vendor/summernote/summernote-bs4.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>

        <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
        <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
        <script src="{{asset('js/examples/examples.datatables.editable.js')}}"></script>

        <!-- Specific Page Vendor -->
         

        <!--(remove-empty-lines-end)-->

        <!-- Theme Base, Components and Settings -->
        <script src="{{asset('js/theme.js')}}"></script>

        <!-- Theme Custom -->

        <!-- Theme Initialization Files -->
        <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
        <script src="{{asset('js/theme.init.js')}}"></script>
        <script src="{{asset('js/examples/examples.wizard.js')}}"></script>
        <script src="{{asset('js/chosen.jquery.js')}}"></script>
        <script src="{{asset('js/fileinput.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('.sidebar-toggle').click(function() {


                    if($(this).children('i').hasClass('fa-chevron-left'))
                    {
                        $(this).children('i').addClass('fa-chevron-right').removeClass('fa-chevron-left');
                    }
                    else
                    {
                        $(this).children('i').addClass('fa-chevron-left').removeClass('fa-chevron-right');
                    }
                });

                $(".chosen-select").chosen();
                $("#input-b6").fileinput({
                    showUpload: false,
                    dropZoneEnabled: false,
                    maxFileCount: 10,
                    mainClass: "input-group-lg"
                });
            });
        </script>
        <script>

        </script>
        <script>
                            $(document).ready( function () {
                            $('#datatable').DataTable();
                              });
                        </script>

        @stack('scripts')

    </body>
</html>
