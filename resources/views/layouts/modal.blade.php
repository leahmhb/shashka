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

	<title>Shashka Stables - @yield('title')</title>

	<!--Journal theme-->
	<link href="{{ asset('css/lumen.css') }}" rel="stylesheet">

	<!--CUSTOM STYLES-->
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Label</h4>
      </div>
      <div class="modal-body">
        @yield('content')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><!--end modal-->

</body>
</html>
<script>

</script>