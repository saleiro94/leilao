<?php

namespace App\Http\Controllers;
use App\Peca;
use App\User;
use DB;
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
        $menor50=0;
        $menor100=0;
        $maior100=0;
        $novo=0;
        $novoSem=0;
        $novoCom=0;
        $usadoSem=0;
        $usadoCom=0;
        $usado=0;
        $recente=0;
        $antigo=0;
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
            $pecas =Peca::orderBy('created_at','desc')->paginate(10);
        }
        if($antigo==1){
            $pecas =Peca::orderBy('created_at','asc')->paginate(10);
        }   
        if($menor50==1){
            $pecas =Peca::orderBy('created_at','asc')->where('valor', '<', '50')->paginate(10);
        }        
        if($menor100==1){
            $pecas =Peca::orderBy('created_at','desc')->where('valor', '>=', '50')->where('valor', '<=', '100')->paginate(10);
        }
        if($maior100==1){
            $pecas =Peca::orderBy('created_at','asc')->where('valor', '>', '100')->paginate(10);
        }
        if($novo==1){
            $pecas =Peca::orderBy('created_at','asc')->where('estado_conservacaos_id', '1')->paginate(10);
        }
        if($novoSem==1){
            $pecas =Peca::orderBy('created_at','asc')->where('estado_conservacaos_id', '2')->paginate(10);
        }
        if($novoCom==1){
            $pecas =Peca::orderBy('created_at','asc')->where('estado_conservacaos_id', '3')->paginate(10);
        }
        if($usadoSem==1){
            $pecas =Peca::orderBy('created_at','asc')->where('estado_conservacaos_id', '4')->paginate(10);
        }        
        if($usadoCom==1){
            $pecas =Peca::orderBy('created_at','asc')->where('estado_conservacaos_id', '5')->paginate(10);
        }
        if($usado==1){
            $pecas =Peca::orderBy('created_at','asc')->where('estado_conservacaos_id', '6')->paginate(10);
        }
        return view('pages.peca_crud.index')->with('pecas',$pecas);
    }
}
