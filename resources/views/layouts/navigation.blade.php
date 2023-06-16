
<nav class="navbar  navbar-expand-lg navbar-light " aria-label="Offcanvas navbar large">
    <div class="container container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('images/lvl-logo.png')}}" style="max-width: 150px" />
        {{-- LVL Cleaning --}}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">LVL Cleaning</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active text-body-primary" aria-current="page" href="/">Welcome</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-body-primary" href="/about">About us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-body-primary" role="button" data-bs-toggle="dropdown" aria-expanded=false href="#">Our Services</a>
                <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="{{url('services/regular-cleaning')}}">Regular Cleaning</a> </li>
                   <li><a class="dropdown-item" href="{{url('services/afterparty-cleaning')}}">After-Party Cleaning</a> </li>
                   <li><a class="dropdown-item" href="{{url('services/deep-cleaning')}}">Deep Cleaning</a> </li>
                   <li><a class="dropdown-item" href="{{url('services/commercial-cleaning')}}">Commercial Cleaning</a> </li>
                   <li><a class="dropdown-item" href="{{url('services/carpet-cleaning')}}">Carpet Cleaning</a> </li>
                   <li><a class="dropdown-item" href="{{url('services/industrial-cleaning')}}">Industrial Cleaning</a> </li>
                   <li><a class="dropdown-item" href="{{url('services/postconstruction-cleaning')}}">Post-construction Cleaning</a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-primary" href="#">Get in touch</a>
            </li>
           
            @if (auth()->check() )
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name  }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('profile.edit')}} ">{{ __('Profile') }}</a></li>
                    
                    <li>
                        {{-- <a class="dropdown-item" href="#">Action</a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
      
                            <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                        </a>
                            </form>
                    </li>
                </ul>
              </li> 

            @else
                <a href="/login" class="btn btn-primary rounded-pill">Login</a>
            @endif
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
