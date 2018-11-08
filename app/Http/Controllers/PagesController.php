<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'BEM-vindo';
        return view('pages.index', compact('title'));
    }
    
    public function about(){
        $title = "About-UUUS";
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
