<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeçaController extends Controller
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
        return view('pages.peca_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome'=>'required',
            'descricao'=>'required',
            'peso_medio'=>'required',
            'img'=>'image|nullable|max:3000',
            'estado_id'=>'required',
            'users_id'=>'required',
            'artesao_id'=>'required',
            'valor'=>'required',
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

            $peca= new Peca;
            $peca->nome=$request->input('nome');
            $peca->descricao=$request->input('descricao');
            $peca->peso_medio=$request->input('peso_medio');
            $peca->img->$fileNameToStore;
            $peca->estado_id->estado()->id;
            $peca->users_id->auth()->user()->id;
            $peca->artesao_id->artesao()->id;
            $peca->valor->$request->input('valor');
            
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
