<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Categoria;
use App\User;
use App\Regiao;
use App\Artesao;
use DB;

class ArtesaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categorias = Categoria::all();
        $selectCategoria=User::first()->categoria_id;
        $regioes = Regiao::all();
        $selectRegiao=User::first()->regiao_id;
        return view('pages.artesao_crud.create',compact('categorias','selectCategoria'),compact('regioes','selectRegiao'));
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
        $this->validate($request, [
            'nome' => 'required',
            'idade' => 'required',
            'email' => 'required',
            'categoria_id' => 'required',            
            'regiao_id' => 'required',
            ]);

            $artesao = new Artesao;
            $artesao->nome = $request->input('nome');
            $artesao->idade = $request->input('idade');
            $artesao->email = $request->input('email');
            $artesao->categoria_id = $request->input('categoria_id');
            $artesao->regiao_id = $request->input('regiao_id');
            $artesao->save();
           return redirect('/novosLeiloes')->with('success', 'Artesão Registado');
            
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
