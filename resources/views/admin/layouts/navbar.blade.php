 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="javascript:void(0)">
             <img src="{{ URL::asset('images/logo.svg') }}" alt="avatar">
          </a>

          <a class="navbar-brand brand-logo-mini" href="javascript:void(0)"> <img src="{{ URL::asset('images/logo-mini.svg') }}" alt="avatar"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stallar dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
                 
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="font-weight-normal">{{\Auth::guard('admin')->user()->name}} </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                	<img src="{{ URL::asset('images/faces/face8.jpg') }}" alt="avatar">
                  <p class="font-weight-light text-muted mb-0">{{\Auth::guard('admin')->user()->email}}</p>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
        @csrf

        <x-dropdown-link :href="route('admin.logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>

    