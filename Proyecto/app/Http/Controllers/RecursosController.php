<?php

namespace App\Http\Controllers;

use App\Models\planillas;
use Illuminate\Http\Request;

class RecursosController extends Controller
{

    public function index(){
        $planillas= planillas::all();
        return view('formulario.rrhh.index',compact('planillas'));
    }
    //ver planilla del funcionario por su id
    public function create($id){

        $p= Planillas::FindOrfail($id);

        return view('formulario.rrhh.planilla',compact('p'));

    }
    public function aprobar($id)
    {

        $planillas= Planillas::FindOrfail($id);
        planillas::where('id','=',$id)->update(['estado' => 'a']);

        return redirect()->route('rrhh');

    }
    public function rechazar($id)
    {

        $planillas= Planillas::FindOrfail($id);
        planillas::where('id','=',$id)->update(['estado' => 'r']);

        return redirect()->route('rrhh');

    }
    //
}
