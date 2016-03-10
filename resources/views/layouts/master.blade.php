<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    @include('includes.nav')
    <div id="bg"><img src="{{ asset('img/background.png') }}"></div>
    <div id="main" class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @yield('content')
            </div><!--end col-->
        </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->
    @include('includes.foot')
</body>
</html>


