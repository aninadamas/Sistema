@extends('layouts.app', ['activePage' => 'formulario', 'titlePage' => __('Formulario')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">



                        <div class="card ">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">{{ __('FORMULARIO DE AUTORIZACIONES') }}</h4>
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
                                    <form method="post" action="{{route('formulario.store')}}"  class="form-horizontal "  enctype= "multipart/form-data">
                                            {{ csrf_field() }}

                                        <div class="row border">
                                            <div class="col-sm-2 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Legajo</label>
                                                    <input type="number" placeholder=  "{{ Auth::user()->username }}" aria-label="Disabled input example" disabled  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Nombre y Apellido</label>
                                                    <input type="email" placeholder="{{ Auth::user()->name }}" aria-label="Disabled input example" disabled class="form-control">
                                                </div>
                                            </div>



                                            <div class="col-sm-2 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Dependencia</label>
                                                    <input type="text" placeholder="{{ Auth::user()->dependencia }}" aria-label="Disabled input example" disabled class="form-control" />

                                                </div>
                                            </div>

                                            <div class="col-sm-4 py-5">
                                                <div class="form-group label-floating has-success">
                                                    <label class="control-label">Sede</label>
                                                    <input type="email" placeholder="{{ Auth::user()->sede }}" aria-label="Disabled input example" disabled class="form-control" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                        <div class="row  ">
                                            <div class="col-sm-6 py-5">

                                                    <div class="form-group label-floating has-success">
                                                        <label class="control-label-floating has-success">Seleccione el Motivo</label>

                                                        <select class="form-control " name="motivos">
                                                            <option selected disabled name="">Motivo:</option>
                                                            @foreach ( $motivo as $motivo)

                                                            <option>{{$motivo->motivos}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>



                                            </div>
                                            {{--<div class="col-sm-6 py-5">
                                                <label class="control-label-floating has-success">Adjuntar Motivo</label>
                                                <div class="col-sm-12 py-3">

                                                <input type="file"    name="foto" class="form-control" />
                                                </div>

                                            </div>--}}

                                        </div>

                                        <div class="row py-2">
                                            <div class="col-sm-6 top-right  py-2">

                                                    <div class="form-group label-floating has-success col-md-8 py-2 ">

                                                        <label class="control-label">Desde fecha:</label>
                                                        <input type="date" class="form-control" name="fecha_inicio">
                                                    </div>

                                            </div>

                                            <div class="col-sm-6 top-left  py-2">

                                                    <div class="form-group label-floating has-success col-md-8 py-2 ">

                                                        <label class="control-label">Hasta fecha:</label>
                                                        <input type="date" class="form-control" name="fecha_fin">
                                                    </div>

                                            </div>
                                        </div>
                                        <div class="row  py-2">
                                            <div class="col-sm-6 top-right  py-2 ">

                                                    <div class="form-group label-floating has-success col-md-6 py-2 ">

                                                        <label class="control-label">Desde Hora:</label>
                                                        <input type="time" class="form-control" name="hora_inicio">
                                                    </div>

                                            </div>

                                            <div class="col-sm-6 top-left  py-2">

                                                    <div class="form-group label-floating has-success col-md-6 py-2 ">

                                                        <label class="control-label">Hasta Hora:</label>
                                                        <input type="time" class="form-control" name="hora_fin">
                                                    </div>

                                            </div>
                                            <br>
                                            <div class="col-sm-6  py-5">

                                                <div class=" form-group  label-floating has-success col-md-12 ">
                                                    <label for="obs" class="form-label" name="obs">Observacion</label>
                                                    <textarea class="form-control" name="obs" ></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-success">{{ __('guardar') }}</button>
                                        </div>
                                    </form>
                                </div>

                            </div>


                        </div>

                </div>

            </div>

        </div>
    </div>
@endsection
