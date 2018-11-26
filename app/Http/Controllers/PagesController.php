<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'BEM-vindo';
        return view('pages.index', compact('title'));
    }
    
    
  
    public function novosContactos(){
        $data=array(
            'title'=>'Adicionar Contactos',
        );
        return view('pages.novosContactos')->with($data);
    }
   
}
