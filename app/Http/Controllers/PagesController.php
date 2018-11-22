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
        return view('pages.about')->with('title',$title);
    }
  
    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web','Proga','SEo']
        );
        return view('pages.services')->with($data);
    }
}
