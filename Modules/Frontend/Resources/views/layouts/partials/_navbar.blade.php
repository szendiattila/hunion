<div class="container">
    <div class="logo-mobil-container">
        <img src="{{ asset('/images/sitebuild/logo.png') }}" alt="hunion" width="25%">
    </div>
    <div class="row front-navbar">

        <div class="col-xs-12 col-sm-9 col-sm-push-3 col-md-10 col-md-push-2 col-lg-10 col-lg-push-2">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            @foreach($menus as $menu)
                                <li><a href="/{{ $menu->url }}">{{ $menu->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-xs-12 col-sm-3 col-sm-pull-9 col-md-2 col-md-pull-10 col-lg-2 col-lg-pull-10">
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/sitebuild/main-logo.png') }}" alt="Hunion R.E. Kft" width="100%">
                </a>
            </div>
        </div>

    </div>


</div>
