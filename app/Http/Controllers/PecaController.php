<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Peca;
use App\User;
use App\Artesao;
use App\Estado_conservacao;
use App\Lance;
use Carbon\Carbon;
use DB;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //->Join('lance', 'peca.id', '=', 'lance.peca_id')->
        $expired_at=Carbon::now()->subDays(2);
       $peca =DB::table('lance')
       ->join('users','users.id','=','lance.users_licitou' )
       ->join('peca', 'lance.peca_id', '=', 'peca.id')
       ->join('estado_conservacaos','peca.id','=','estado_conservacaos.id' )
        ->orderBy('valor_licitacao','ASC') 
        ->where('peca.created_at','>',$expired_at)        
        ->get();
        
       //->paginate(10);
       $pecas = collect($peca)->sortBy('peca_id')->reverse();
      
            
       return view('pages.peca_crud.index1')->with('pecas',$pecas);

           //$userId = Auth::id();
    //$pecas =Peca::orderBy('created_at','desc')->paginate(10);
  //return view('pages.peca_crud.index')->with('pecas',$pecas);
  
    }

    public function vencedores(){
        //->Join('lance', 'peca.id', '=', 'lance.peca_id')->
        $expired_at=Carbon::now()->subDays(2);
      
       $peca =DB::table('lance')
       ->join('users','users.id','=','lance.users_licitou' )
       ->join('peca', 'lance.peca_id', '=', 'peca.id')
       ->join('estado_conservacaos','peca.id','=','estado_conservacaos.id' )
        ->orderBy('valor_licitacao','ASC') 
        ->where('peca.created_at','<',$expired_at)
        ->get();
       //->paginate(10);
       //dd($peca);
       $pecas = collect($peca)->sortBy('peca_id')->reverse();
      
            
       return view('pages.peca_crud.index')->with('pecas',$pecas)->with('tipo', true)->with('titulo', 'Leilões Terminados');

           //$userId = Auth::id();
    //$pecas =Peca::orderBy('created_at','desc')->paginate(10);
  //return view('pages.peca_crud.index')->with('pecas',$pecas);
  
    }
    
    public function mostrarMeus()
    {
        $userId = Auth::id();
        $pecas =Peca::orderBy('created_at','desc')->where('users_id', '=', $userId)->paginate(10);
      return view('pages.peca_crud.index')->with('pecas',$pecas)->with('tipo', false)->with('titulo', 'Meus Leilões');
      //dd($pecas);
    }

    public function mostrar()
    {
        $expired_at=Carbon::now()->subDays(2);
        $pecas =Peca::orderBy('created_at','desc')
        ->where('peca.created_at','>',$expired_at)
        ->get();
      
        return view('pages.peca_crud.index')->with('pecas',$pecas)->with('tipo', false)->with('titulo', 'Todos os Artigos');
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $estados = Estado_conservacao::all();
        $selectEstado=User::first()->estado_conservacaos_id;
        $artesaos = Artesao::all();
        $selectArtesao=User::first()->artesao_id;

        
        return view('pages.peca_crud.create', compact('estados','selectEstado'),compact('artesaos','selectArtesao'));
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
      
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'peso_medio' => 'required',
            'valor' => 'required',
            'img'=>'image|nullable|max:3000',
            'estado_conservacaos_id' => 'required',            
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
            $peca->estado_conservacaos_id = $request->input('estado_conservacaos_id');
            $peca->users_id = $userId;
            $peca->artesao_id = $request->input('artesao_id');
            //dd($peca);
            $peca->save();
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
       $peca=Peca::find($id);
       $user=User::find($peca->users_id);
       //dd($user);

       return view('pages.peca_crud.show')->with('peca',$peca)->with('user',$user);
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
        }
}
