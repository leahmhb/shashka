 <nav id="nav" class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Shashka Racers</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">  
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stallions<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li class="dropdown-header">GI</li>
                        @forelse ($stallions['gi_stallions'] as $stallion)
                        <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>      
                        @endforelse
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">GII</li>
                        @forelse ($stallions['gii_stallions'] as $stallion)
                        <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">GIII</li>
                        @forelse ($stallions['giii_stallions'] as $stallion)
                        <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Open Level</li>
                        @forelse ($stallions['ol_stallions'] as $stallion)
                        <li><a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mares<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">GI</li>
                        @forelse ($mares['gi_mares'] as $mare)
                        <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">GII</li>
                        @forelse ($mares['gii_mares'] as $mare)
                        <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">GIII</li>
                        @forelse ($mares['giii_mares'] as $mare)
                        <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Open Level</li>
                        @forelse ($mares['ol_mares'] as $mare)
                        <li><a href="/stall/{{$mare['id']}}">{{$mare['call_name']}}</a></li>                        
                        @empty
                        <li><a href="#">Horse</a></li>
                        @endforelse
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Manage</li>     
                        <li><a href="/add-horse">Add Horse</a></li> 
                        <li><a href="/add-ancestory">Add Ancestory</a></li>
                        <li><a href="/add-person">Add Person</a></li>         
                        <li><a href="/add-race">Add Race</a></li>      
                        <li><a href="/add-race-entrant">Add Race Entrant</a></li>      
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Overview</li>  
                        <li><a href="/horse-list">Horse List</a></li> 
                        <li><a href="/race-list">Race List</a></li> 
                        <li><a href="/person-list">Person List</a></li>          
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/theme">Theme</a></li>
                <li><a href="/credits">Credits</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>