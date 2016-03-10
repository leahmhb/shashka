<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
  <style>
body {
  background:rgba(0, 0, 0, .8);
}
  </style>


</head>

<body>

  @yield('content')
  
  @include('includes.foot')
</body>
</html>


