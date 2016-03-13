<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    @include('includes.nav')
    <div id="bg"><img src="{{ asset('img/background.png') }}"></div>
    <div id="main" class="container">
        @yield('content')
    </div><!--end container-->
    @include('includes.modal')
    @include('includes.foot')
</body>
</html>


