<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peca;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     * 
     
     */
    public function index()
    {
        $pecas =Peca::orderBy('created_at','desc')->paginate(10);
      
        return view('pages.peca_crud.index')->with('pecas',$pecas)->with('tipo', false)->with('titulo', 'Todos os Artigos');
    }
}
