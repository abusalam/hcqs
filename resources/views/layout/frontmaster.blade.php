
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Malda District" />
    
    <link href="./front/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./front/css/bootstrap.min.css">
    <link rel='stylesheet' href='./front/css/sliderhelper.css' media='all' />
    <link rel="stylesheet" type="text/css" href="front/css/menumaker.css">
    <link rel='stylesheet' href='./front/css/base.css' media='all' />
    <link rel='stylesheet' href='./front/css/extra.css' media='all' />
    <link rel='stylesheet' href='./front/css/flexslider.min.css' media='all' />
    <link rel='stylesheet' href='./front/css/custom-flexslider.css' media='all' />
    <link rel='stylesheet' href='./front/css/footer-logo-carousel.css' media='all' />
    <link rel="stylesheet" href="{{ asset('/css/bootstrapValidator.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-confirm.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/lib/fontawesome/css/font-awesome.css') }}">
    <link rel='stylesheet' href='./front/css/design.css' media='all' />
    <link href="{{ asset('/lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-datepicker.css') }}" rel="stylesheet">
   
</head>

<body>
    <div class="main-body">
        <a href="#" title="sroll" class="scrollToTop" style="display: inline;"><i class="fa fa-angle-up"></i></a>
        <header>
    
        </header>
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0 top-banner">
                    
                </div>
                <div class="col-sm-12">
                    <div class="wrapper bodyWrapper " role="main">
                        <div class="container ">
                            <div class="row breadcrumb-outer">
                                <div class="col-sm-8">
                                    <div class="left-content pull-left">
                                        <div id="breadcam" role="navigation" aria-label="breadcrumb">
                                            <ul class="breadcrumbs">
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       
    </div>
    <script src="{{ asset('./front/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('./front/js/menumaker.js') }}"></script>
    <script src="{{ asset('./front/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src='{{ asset('./front/js/themescript.js') }}'></script>
    <script src='{{ asset('./front/js/jquery.flexslider.js') }}'></script>
    <script src='{{ asset('./front/js/jquery.flexslider-min.js') }}'></script>
    <script src="{{ asset('/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-confirm.min.js') }}"></script>
    <script src="{{asset('lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap-datepicker.js')}}"></script>
    
    
    @yield('script')
   
</body>

</html>
