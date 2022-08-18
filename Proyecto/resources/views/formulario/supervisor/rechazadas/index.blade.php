@extends('layouts.app', ['activePage' => 'Supervisor', 'titlePage' => __('Solicitud Rechazada')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title "> SOLICITUDES RECHAZADAS</h4>
            <p class="card-category"> Click en "ver mas.. " para tener mas detalle de la solicitud</p>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table">
                <thead class=" text-success">

                  <th>
                    Nombre y Apellido
                  </th>
                  <th>
                    Legajo
                  </th>
                  <th>
                    Dependencia
                  </th>

                </thead>
                <tbody>



                    @foreach ( $planillas as $p)


                    @if($p->estado == 'rechazado')

                  <tr>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->id_funcionario}}</td>
                    <td>{{$p->dependencia}}</td>
                    <td><a href="{{route('supervisor.planillarechazado',$p->id)}}" class="btn btn-outline-success">Ver Solicitud</button><td>



                  </tr>
                  @endif
                  @endforeach

                  </tr>
                </tbody>
              </table>
            </div>




          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
