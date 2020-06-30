
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Malda District" />

    <link href="./front/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/jquery-confirm.min.css') }}">
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
    <script src="{{ asset('./front/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-confirm.min.js') }}"></script>

    @yield('script')
</body>

</html>
