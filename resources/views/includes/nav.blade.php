 <nav id="nav" class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Shashka Stables</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">  
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stallions<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GI</li>
                            @foreach ($stallions as $stallion)
                            @if ($stallion['grade'] == 'GI')
                            <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GII</li>
                            @foreach ($stallions as $stallion)
                            @if ($stallion['grade'] == 'GII')
                            <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GIII</li>
                            @foreach ($stallions as $stallion)
                            @if ($stallion['grade'] == 'GIII')
                            <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Open Level</li>
                            @foreach ($stallions as $stallion)
                            @if ($stallion['grade'] == 'Open Level')
                            <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mares<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GI</li>
                            @foreach ($mares as $mare)
                            @if ($mare['grade'] == 'GI')
                            <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GII</li>
                            @foreach ($mares as $mare)
                            @if ($mare['grade'] == 'GII')
                            <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">GIII</li>
                            @foreach ($mares as $mare)
                            @if ($mare['grade'] == 'GIII')
                            <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Open Level</li>
                            @foreach ($mares as $mare)
                            @if ($mare['grade'] == 'Open Level')
                            <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                            @endif                            
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forms<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Horse Records</li>
                            <li><a href="/add-horse">Add Horse</a></li>  
                            <li><a href="/add-lineage">Add Lineage</a></li>  
                             <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Race Records</li> 
                            <li><a href="/add-race">Add Race</a></li>                       
                        </ul>
                    </li>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>