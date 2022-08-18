<?php

namespace App\Http\Controllers;
use App\Models\planilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PlanillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ('hola pp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


       /* DB::table('planillas')->insert(
            ['id' => $request->id,'fecha'=>$date,'id_funcionario' => $request->user()->username,'nombre' => $request->user()->name,
            'sede' => $request->user()->sede,'dependencia'=>$request->user()->dependencia,'motivo'=> $request->motivos,
            'fecha_inicio'=>$request->fecha_inicio, 'fecha_fin'=>$request->fecha_fin, 'hora_fin'=>$request->hora_fin,
            'hora_inicio'=>$request->hora_inicio, 'obs'=>$request->obs]
        );





                return ('se guardo');

        //return view('form-planilla.form-planilla');*/


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
    public function update(Request $request, $id)
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
