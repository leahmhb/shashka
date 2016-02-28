<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Shashka Stables - @yield('title')</title>

    <!--Journal theme-->
    <link href="{{ asset('css/lumen.css') }}" rel="stylesheet">

    <!--Plugin styling-->
    <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker3.css') }}" rel="stylesheet">


<!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

 <!-- Optional theme 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">-->

 <!--CUSTOM STYLES-->
 <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>

 <nav id="nav" class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Shashka Stables</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">  
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stallions<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GI</li>
                            <li><a href="#">Horse</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GII</li>
                            <li><a href="#">Horse</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GIII</li>
                            <li><a href="#">Horse</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Open Class</li>
                            <li><a href="#">Horse</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mares<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GI</li>
                            <li><a href="#">Horse</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GII</li>
                            <li><a href="#">Horse</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GIII</li>
                            <li><a href="#">Horse</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Open Class</li>
                            <li><a href="#">Horse</a></li>
                        </ul>
                    </li>
                    <li><a href="add-horse">Add Horse</a></li>   
                    <li><a href="add-race">Add Race</a></li> 
                    <li><a href="stall">Stall Page</a></li>  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>    

    <!-- Plugins -->
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.jquery.min.js') }}"></script>


    <script>
     $(document).ready(function () {
       $(".chosen-select").chosen({
        width: "95%",
        placeholder_text_single: "Select.."
      });//end chosen 

       $('.datepicker').datepicker({
        format = "dd/mm/yyyy",
        todayHightlight = true,
        todayBtn = true
    });
   });//end ready
</script> 
</body>
</html>


