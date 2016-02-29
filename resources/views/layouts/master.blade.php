<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    @include('includes.nav')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @yield('content')
                </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    @include('includes.footer')
</body>
</html>


