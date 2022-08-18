<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo " >
     <span class="simple-text logo-normal">
      <img src="{{ asset('material/img/logoyacy.png') }}" alt="">
     </span>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">

@if (auth()->user()->rol== 'supervisor' )


      <li class="nav-item{{ $activePage == 'Supervisor' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('supervisor') }}">
            <i class="material-icons">person_outline</i>
          <span class="sidebar-normal">{{ __('Supervisor') }} </span>
        </a>
    </li>
    <li class="nav-item{{ $activePage == 'Supervisor','rechazadas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('supervisor.permiso_rechazado') }}">
            <i class="material-icons">content_paste_off</i>
          <span class="sidebar-normal">{{ __('Permisos Rechazados') }} </span>
        </a>
    </li>

    <li class="nav-item{{ $activePage == 'Supervisor', 'pendientes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('supervisor.pendiente') }}">
            <i class="material-icons">content_paste_search</i>
            <span class="sidebar-normal">{{ __('Permisos Pendientes') }} </span>
        </a>
    </li>
    <li class="nav-item{{ $activePage == 'Supervisor', 'aprobadas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('supervisor.aprobadas') }}">
            <i class="material-icons">done</i>
            <span class="sidebar-normal">{{ __('Permisos Aprobadas') }} </span>
        </a>
    </li>
    @endif
    @if (auth()->user()->rol== null )


      <li class="nav-item{{ $activePage == 'formulario' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('form-permiso.form-permiso') }}">
          <span class="sidebar-mini"> UP </span>
          <span clss="sidebar-normal">{{ __('Solicitar Permiso') }} </span>
        </a>
      </li>
      {{--<li class="nav-item{{ $activePage == '' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('estado') }}">
          <span class="sidebar-mini"> UP </span>
          <span clss="sidebar-normal">{{ __('Mi Solicitud') }} </span>
        </a>
      </li>--}}
    @endif

    @if (auth()->user()->rol== 'rrhh')

    <li class="nav-item{{ $activePage == 'rrhh' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('rrhh') }}">
            <i class="material-icons">supervised_user_circle</i>

          <span clss="sidebar-normal">{{ __('Recursos Humanos') }} </span>
        </a>
      </li>
    @endif



      {{--<li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>--}}
    </ul>
  </div>
</div>
