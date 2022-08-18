<?php

namespace App\Http\Controllers;

use App\Models\motivo;

use App\Models\planillas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $motivo['motivo'] = Motivo::all();
        $planillas = planillas::all();

        return view('formulario.index',compact('planillas'))->with($motivo);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $date = Carbon::now();

       /* $request-> validate([
            'motivo'=> 'required',
            'fecha_inicio'=> 'required',
            'fecha_fin'=> 'required',
            'hora_fin'=> 'required',
            'hora_inicio'=> 'required',

        ],
        [
            'exits'=>'no existe',
            'required'=>'Este campo no puede estar vacio'

        ]

        );*/


       DB::table('planillas')->insert(
            ['id' => $request->id,'fecha'=>$date,'id_funcionario' => $request->user()->username,'nombre' => $request->user()->name,
            'sede' => $request->user()->sede,'dependencia'=>$request->user()->dependencia,'motivo'=> $request->motivos,
            'fecha_inicio'=>$request->fecha_inicio, 'fecha_fin'=>$request->fecha_fin, 'hora_fin'=>$request->hora_fin,
            'hora_inicio'=>$request->hora_inicio, 'obs'=>$request->obs,'estado'=>$request->estado]

        );

       /*$datosplanillas= request()->except('_token');
           if ($request->hasFile('foto')){
           $datosplanillas['foto']=$request->file('foto')->store('uploads','public');}
           planillas::insert($datosplanillas);*/

           /*$foto = $request->except('_token');
           if($request->hasFile('foto')){
               $foto['foto'] = $request->file('foto')->store('uploads','public');

           }

           Planillas::insert($foto);*/




       return back()->withStatus(__('SOLICITUD ENVIADA CON EXITO.'));


    }
    public function estado()
    {
        //
        $motivo['motivo'] = Motivo::all();
        $planillas = planillas::all();

        return view('formulario.estado',compact('planillas'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
