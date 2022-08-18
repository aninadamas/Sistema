@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-success">
        <h3 class="card-title">Aqui podra ver el estado de su solicitud</h3>

      </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-10 py-5">

                            <div class="alert alert-danger">

                                    <span>
                                        <b> Hola {{ Auth::user()->name }},


                                            </b> Su permiso ha sido  hh</span>











                            </div>



                </div>
            </div>
        </div>

    </div>
  </div>
</div>
@endsection
