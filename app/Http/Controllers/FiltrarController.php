<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiltrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.filtrarLeiloes');
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
    public function filtrar(Request $request)
    {
        $menor50;
        $menor100;
        $maior100;
        $novo;
        $novoSem;
        $novoCom;
        $usadoSem;
        $usadoCom;
        $usado;
        $recente;
        $antigo;
        //dd($request);
        if(isset($request ['menor50'])){
           $menor50 = 1;
        }        
        if(isset($request ['menor100'])){
            $menor100 = 1;
        }
        if(isset($request ['maior100'])){
            $maior100 = 1;
        }
        if(isset($request ['novo'])){
            $novo = 1;
        }
        if(isset($request ['novoSem'])){
            $novoSem = 1;
        }
        if(isset($request ['novoCom'])){
            $novoCom = 1;
        }
        if(isset($request ['usadoSem'])){
            $usadoSem = 1;
        }
        if(isset($request ['usadoCom'])){
            $usadoCom = 1;
        }
        if(isset($request ['usado'])){
            $usado = 1;
        }
        if(isset($request ['recente'])){
            $recente = 1;
        }
        if(isset($request ['antigo'])){
            $antigo = 1;
        }

        if($recente==1){
            $pecas =Peca::orderBy('created_at','desc')->where('users_id', '=', $userId)->paginate(10);
        }
    }
}
