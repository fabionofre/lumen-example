<?php

namespace App\Http\Controllers;

use App\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index(){
  
       $Receitas  = Receita::all();
  
        return response()->json($Receitas);
  
    }
  
    public function show($id){
  
        $Receita  = Receita::find($id);
  
        return response()->json($Receita);
    }
  
    public function store(Request $request){
  
        $Receita = Receita::create($request->all());
  
        return response()->json($Receita);
  
    }
  
    public function delete($id){
        $Receita  = Receita::find($id);
        $Receita->delete();
 
        return response()->json('deleted');
    }
  
    public function update(Request $request,$id){
        $Receita  = Receita::find($id);
        $Receita->data = $request->input('data');
        $Receita->descricao = $request->input('descricao');
        $Receita->valor = $request->input('valor');
        $Receita->tipo = $request->input('tipo');
        $Receita->save();
  
        return response()->json($Receita);
    }

}
