<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\cliente;
 
class ClienteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showFormCliente(){
        return view('cadastrarCliente');
    }
    public function storeCliente(Request $request){
        $cliente = $request->validate([
            'nomeCliente' =>'string|required',
            'foneCliente' =>'string|required',
            'cepCliente'=>'string|required',
            'cpfCliente'=>'string|required',
        ]);
 
        cliente::Create($cliente);
        return Redirect::route('index');
    }
    public function showGerenciadorCliente(Request $request){
        $dados = cliente::query();
        $dados->when($request->nomeCliente,function($query,$nome){
            $query->where('nomeCliente','like','%'.$nome.'%');
        });
        $dados = $dados->get();
        return view('buscarCliente',['cliente' => $dados]);
    }
    public function destroyCliente(cliente $id){
        $id->delete();
        return Redirect::route('todos-cliente');
    }
    public function updateCliente(cliente $id, Request $request){
        $cliente = $request->validate([
            'nomeCliente' =>'string|required',
            'foneCliente' =>'string|required',
            'cepCliente' =>'string|required',
            'cpfCliente' =>'string|required'
        ]);
        $id->fill($cliente);
        $id->save();
        return Redirect::route('todos-cliente');
    }
    public function showCliente(cliente $id){
        return view('alterarCliente',['cliente'=>$id]);
    }
}