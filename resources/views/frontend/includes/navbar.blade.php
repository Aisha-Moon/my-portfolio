  <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{'/'}}"><img style="height:50px;width:260px;" src="{{url($main->logo_img)}}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('portfolio/service')}}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('portfolio/project')}}">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('portfolio/about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('portfolio/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>