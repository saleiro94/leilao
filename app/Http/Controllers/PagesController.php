<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'BEM-vindo';
        return view('pages.index', compact('title'));
    }
    
    public function novos(){
        $title = "Novos";
        return view('pages.novosLeiloes')->with('title',$title);
    }
  
    public function novosContactos(){
        $data=array(
            'title'=>'Adicionar Contactos',
        );
        return view('pages.novosContactos')->with($data);
    }
    public function novasPecas(){
        $data=array(
            'title'=>'Adicionar Pecas',
        );
        return view('pages.novasPecas')->with($data);
    }
}
