<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <meta name="description" content="">
 <meta name="author" content="">   
 <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

 <title>SS TB Racers - {{ $title or '' }}</title>
 @include('includes.css')
</head>

<body>
 @include('includes.nav') 
 <div id="bg"><img src="{{ asset('img/background.png') }}"></div>
 <div id="main" class="container">
  @yield('content')
</div><!--end container-->

@include('includes.js')
{{-- @include('modals.form') --}}

</body>
</html>


