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
                       @forelse ($my_stallions as $stallion)
                       <li>
                        <a href="/stall/{{$stallion['id']}}">{{$stallion['call_name']}} 
                            <small class="text-muted">{{$stallion['grade']}}</small>
                        </a>
                    </li>
                    @empty
                    <li><a href="#">Horse - Grade</a></li>
                    @endforelse       
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mares<span class="caret"></span></a>
                <ul class="dropdown-menu">                        
                    @forelse ($my_mares as $mare)
                    <li>
                        <a href="/stall/{{$mare['id']}}">{{$mare['call_name']}} 
                            <small class="text-muted">{{$mare['grade']}}</small>
                        </a>
                    </li>
                    @empty
                    <li><a href="#">Horse - Grade</a></li>
                    @endforelse                       
                </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lists<span class="caret"></span></a>
                <ul class="dropdown-menu">  
                    <li><a href="/horse-list">Horses</a></li> 
                    <li><a href="/race-list">Races</a></li> 
                    <li><a href="/entry-list">Entries</a></li> 
                    <li><a href="/person-list">Person</a></li> 
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                <ul class="dropdown-menu"> 
                   <li><a href="/person">Add Person</a></li>    
                    <li><a href="/horse">Add Horse</a></li> 
                    <li><a href="/ancestory">Add Ancestory</a></li>                 
                    <li><a href="/race">Add Race</a></li>      
                    <li><a href="/race-entrant">Add Race Entrant</a></li>
                    <li><a href="/race-and-entry">Add Race and Entry</a></li>
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