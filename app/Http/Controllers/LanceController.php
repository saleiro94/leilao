<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Lance;
use App\Peca;
use DateTime;
use DB;
class LanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('pages.lance_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //dd($request);

        $userId = Auth::id();
       
        $this->validate($request, [
            'valor' => 'required',       
            ]);
        $today = new DateTime();
        $hora=date('H:i:s');
        $lance = new lance;
        $lance->valor=$request->input('valor');
        $lance->hora=$hora;
        $lance->data=$today;
        $lance->users_id = $userId;
        $lance->peca_id =$request->input('id') ;
        $lance->save();
        return redirect('/novosLeiloes')->with('success', 'Peca Criada');
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
    public function mostrar($id){
     
      
      $lance = DB::table('lance')->where('peca_id', $id)->orderByRaw('valor DESC')->first();
      $valor_lance=$lance->valor;
      //dd($valor);
        return view('pages.lance_crud.create',compact('id'),compact('valor_lance'));


    }

    
}
