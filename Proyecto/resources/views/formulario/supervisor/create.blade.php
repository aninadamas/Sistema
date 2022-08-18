@extends('layouts.app', ['activePage' => 'Supervisor', 'titlePage' => __('Solicitud')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">



                        <div class="card ">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">{{ __('Solicitud de permiso de ') }}</h4>
                                <p class="card-category">{{ __('Leer atentamente antes de completar') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">Guardar</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-10">


                                        <div class="row border">
                                            <div class="col-sm-2 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Legajo</label>
                                                    <input type="number"  placeholder="{{ $p->id_funcionario }}"value="{{ old('name', $p->nombre) }} aria-label="Disabled input example" disabled  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Nombre y Apellido</label>
                                                    <input type="text" placeholder="{{  $p->nombre }}"  aria-label="Disabled input example" disabled class="form-control">
                                                </div>
                                            </div>



                                            <div class="col-sm-4 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Dependencia</label>
                                                    <input type="text" placeholder="{{  $p->dependencia }}" aria-label="Disabled input example" disabled class="form-control" />

                                                </div>
                                            </div>

                                            <div class="col-sm-2 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Sede</label>
                                                    <input type="text" placeholder="{{  $p->sede }}" aria-label="Disabled input example" disabled class="form-control" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                        <div class="row  ">
                                            <div class="col-sm-6 py-5">

                                                    <div class="form-group label-floating has-success">
                                                        <label class="control-label-floating has-success">Seleccione el Motivo</label>

                                                        <select class="form-control " name="motivos">
                                                            <option selected disabled name="" >{{  $p->motivo}}</option>


                                                            <option></option>


                                                        </select>
                                                    </div>

                                            </div>
                                        </div>

                                        <div class="row py-2">
                                            <div class="col-sm-6 top-right  py-2">

                                                    <div class="form-group label-floating has-success col-md-6 py-2 ">

                                                        <label class="control-label">Desde fecha:</label>
                                                        <input placeholder="{{  $p->fecha_inicio }}" class="form-control" name="fecha_inicio">
                                                    </div>

                                            </div>

                                            <div class="col-sm-6 top-left  py-2">

                                                    <div class="form-group label-floating has-success col-md-6 py-2 ">

                                                        <label class="control-label">Hasta fecha:</label>
                                                        <input placeholder="{{  $p->fecha_fin }}" class="form-control" name="fecha_fin">
                                                    </div>

                                            </div>
                                        </div>
                                        <div class="row  py-2">
                                            <div class="col-sm-6 top-right  py-2 ">

                                                    <div class="form-group label-floating has-success col-md-6 py-2 ">

                                                        <label class="control-label">Desde Hora:</label>
                                                        <input placeholder="{{  $p->hora_inicio }}" class="form-control" name="hora_inicio">
                                                    </div>

                                            </div>

                                            <div class="col-sm-6 top-left  py-2">

                                                    <div class="form-group label-floating has-success col-md-6 py-2 ">

                                                        <label class="control-label">Hasta Hora:</label>
                                                        <input placeholder="{{  $p->hora_fin}}" class="form-control" name="hora_fin">
                                                    </div>

                                            </div>
                                            <br>
                                            <div class="col-sm-6  py-5">

                                                <div class=" form-group  label-floating has-success col-md-10 ">
                                                    <label for="obs" class="form-label" name="obs">Observacion</label>
                                                    <textarea class="form-control" name="obs" ></textarea>
                                                </div>
                                            </div>

                                        </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-2 top-right  py-2 ">
                                        <a href="{{route('supervisor.confirmar',$p->id)}}" class="btn btn-success" role="button" aria-disabled="true">Aprobar</a>
                                </div>

                                <div class="col-sm-2 top-left  py-2">
                                    <a href="{{route('supervisor.archivar',$p->id)}}" class="btn btn-warning" role="button" aria-disabled="true">Archivar</a>
                                </div>

                                <div class="col-sm-2 top-left  py-2">
                                    <a href="{{route('supervisor.rechazar',$p->id)}}" class="btn btn-danger" role="button" aria-disabled="true">Rechazar</a>
                                </div>
                            </div>
                            </div>


                        </div>

                </div>

            </div>

        </div>
    </div>
@endsection
