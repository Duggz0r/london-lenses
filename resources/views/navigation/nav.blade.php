<div class="container-fluid navigation">
    <div class="container p-3">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav mr-auto">
                <li><img src="images/logo.svg" class=""></li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span><img src="images/menu.svg"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                
                    @foreach($navigationLinks as $navigationLink)
                        <li class="links links-main"><a href="/{{ $navigationLink['route'] }}">{{ $navigationLink['name'] }}</a></li>
                    @endforeach
            
                    <li>
                    
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>