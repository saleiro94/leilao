<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Peca;
use DB;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pecas =Peca::all();
       // return view('pages.indexPecas')->with('pecas',$pecas);
       //return view('pages.novasPecas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('pages.novasPecas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Get user id
        $userId = Auth::id();
        //dd($userId);
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'peso_medio' => 'required',
            'valor' => 'required',
            'img'=>'image|nullable|max:3000',
            'estado_id' => 'required',            
            'artesao_id' => 'required',
            
            ]);
            
            if($request->hasFile('img')){
                // Get filename with the extension
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('img')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

            
            $peca = new Peca;
            $peca->nome = $request->input('nome');
            $peca->descricao = $request->input('descricao');
            $peca->peso_medio = $request->input('peso_medio');
            $peca->valor=$request->input('valor');
            $peca->img=$fileNameToStore;
            $peca->estado_id = $request->input('estado_id');
            $peca->users_id = $userId;
            $peca->artesao_id = $request->input('artesao_id');
            $peca->save();
            return redirect('/home')->with('success', 'Peca Created');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Peca::find($id);
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
