@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Inicio')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_paste_search</i>
              </div>
              <p class="card-category">Permisos</p>
              <h3 class="card-title">
                <small>PENDIENTES</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="{{route('supervisor.pendiente')}}" class="btn btn-outline-warning "> Ver solicitudes</a>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_paste_off</i>
              </div>
              <p class="card-category">Permisos</p>
              <h3 class="card-title">
                <small>RECHAZADAS</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons"></i>

                <a href="{{route('supervisor.permiso_rechazado')}}" class="btn btn-outline-danger">Ver  solicitudes</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">done</i>
                </div>
                <p class="card-category">Permisos</p>
                <h3 class="card-title">
                  <small>APROBADAS</small>
                </h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons"></i>

                  <a href="{{route('supervisor.aprobadas')}}" class="btn btn-outline-danger">Ver Aprobadas</a>
              </div>
              </div>
            </div>
          </div>


      </div>

                <div class="row">
                    <div class="col-lg-10 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">NUEVAS SOLICITUD DE PERMISOS</h4>
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Click en "ver mas.. " para tener mas detalle de la solicitud</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                            </ul>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <table class="table">
                                <thead class=" text-success">

                                    <th>
                                        <h4> y Apellido</h4>
                                    </th>
                                    <th>
                                       <h4> Legajo</h4>
                                    </th>
                                    <th>
                                       <h4>Dependencia</h4>
                                    </th>

                                </thead>
                                    <tbody>
                                        @foreach ( $planillas as $p)

                                            @if($p->estado == null)

                                        <tr>
                                            <td>{{$p->nombre}}</td>
                                            <td>{{$p->id_funcionario}}</td>
                                            <td>{{$p->dependencia}}</td>

                                            <td class="td-actions text-right">
                                                <a href="{{route('supervisor.create',$p->id)}}" class="btn btn-outline-success">Ver Solicitud</button>

                                            </td>
                                        </tr>


                                        @endif
                                        @endforeach

                                    </tbody>
                            </table>
                        </div>





                        </div>
                        </div>
                    </div>
                    </div>


                </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
