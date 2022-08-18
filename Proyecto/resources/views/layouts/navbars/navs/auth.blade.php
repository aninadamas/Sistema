<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    @if ((auth()->user()->rol=='supervisor' || auth()->user()->rol=='rrhh' ) )

      <div class="dropdown show-dropdown ">

        <ul class="navbar-nav">
        <li class="button-container">
            <a href=""  class="btn btn-success">
          Solicitar Permiso
            </a>
        </li>
        </ul>
    </div>
@endif
<div class="dropdown show-dropdown">

    <ul class="navbar-nav">
    <li class="button-container">
        <a href="{{ route('estado') }}" class="btn btn-success">
      Mi Solicitud
        </a>
    </li>
    </ul>
</div>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">

      </form>

      <ul class="navbar-nav">


        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>Bienvenido {{ Auth::user()->name }}  <i class="material-icons">waving_hand</i></h5>


          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">

            <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
