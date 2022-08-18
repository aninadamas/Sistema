<?php

namespace App\Http\Controllers;

use App\Models\planillas;
use App\Models\supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

            $planillas = DB::table('planillas')->get();
            //dd($planillas);
                return view('formulario.supervisor.index',compact('planillas'));

    }
    public function inicio()
    {
        //

            $planillas = DB::table('planillas')->get();

                return view('formulario.supervisor.inicio',compact('planillas'));

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        //$p = DB::table('planillas')->get();
        //$p= planillas::all();
        //dd($p);
        $p= Planillas::FindOrfail($id);

        return view('formulario.supervisor.create',compact('p'));

    }
    public function confirmar($id)
    {
        //
        //$p = DB::table('planillas')->get();
        //$p= planillas::all();
        //dd($p);
        $planillas= Planillas::FindOrfail($id);
        planillas::where('id','=',$id)->update(['estado' => 'aprobado']);

        return redirect()->route('supervisor');

    }
    //PERMISOS PENDIENTES
    public function archivar($id)
    {
        //
        //$p = DB::table('planillas')->get();
        //$p= planillas::all();
        //dd($p);
        $planillas= Planillas::FindOrfail($id);
        planillas::where('id','=',$id)->update(['estado' => 'pendiente']);

        return redirect()->route('supervisor');

    }

    public function permiso_pendiente(){
        $planillas = DB::table('planillas')->get();

                return view('formulario.supervisor.pendientes.index',compact('planillas'));

    }
    public function planillapendiente($id){
        $p= Planillas::FindOrfail($id);

                return view('formulario.supervisor.pendientes.planilla',compact('p'));

    }
    public function aprobarpendiente($id ){

        $planillas= Planillas::FindOrFail($id);
        Planillas::where('id','=',$id)->update(['estado' => 'aprobado']);
        return redirect()->route('supervisor.pendiente');
    }
    public function rechazarpendiente($id ){

        $planillas= Planillas::FindOrFail($id);
        Planillas::where('id','=',$id)->update(['estado' => 'rechazado']);
        return redirect()->route('supervisor.pendiente');
    }



        //PERMISOS RECHAZADOS
    public function rechazar($id)
    {

        $planillas= Planillas::FindOrfail($id);
        planillas::where('id','=',$id)->update(['estado' => 'rechazado']);

        return redirect()->route('supervisor');

    }
    public function permiso_rechazado(){
        $planillas = DB::table('planillas')->get();

                return view('formulario.supervisor.rechazadas.index',compact('planillas'));

    }
    public function planillarechazado($id){
        $p= Planillas::FindOrfail($id);

                return view('formulario.supervisor.rechazadas.planilla',compact('p'));

    }
    public function apruebarechazado($id ){

        $planillas= Planillas::FindOrFail($id);
        Planillas::where('id','=',$id)->update(['estado' => 'aprobado']);
        return redirect()->route('supervisor.permiso_rechazado');
    }
    public function aprobadas(){
        $planillas = DB::table('planillas')->get();

                return view('formulario.supervisor.aprobadas.index',compact('planillas'));

    }
    public function planillaaprobado($id){
        $p= Planillas::FindOrfail($id);

                return view('formulario.supervisor.aprobadas.planilla',compact('p'));

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

    public function ver_pendiente(planillas $planillas)
    {

        //mostrar planillas por id
        dd($planillas);

        //$planillas= Planillas::FindOrFail($id);
        return view('formulario.supervisor.index',compact('planillas'));


         //return redirect()->route('supervisor.index',compact('planillas'));

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
