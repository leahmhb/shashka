<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    @include('includes.nav')
    <div id="bg"><img src="{{ asset('img/background.png') }}"></div>
    <div id="main" class="container">
    <div class="row">
    <div class="col-md-12 col-lg-offset-1 col-lg-10">
        @yield('content')

        </div>
        </div>
    </div><!--end container-->
    @include('includes.modal')
    @include('includes.foot')
</body>
</html>


