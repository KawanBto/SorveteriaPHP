<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\produto;
 
class ProdutoController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showFormProduto(){
        return view('cadastrarProduto');
    }
    public function storeProduto(Request $request){
        $produto = $request->validate([
            'nomeProduto' =>'string|required',
            'valorProduto' =>'string|required',
        ]);
 
        produto::Create($produto);
        return Redirect::route('index');
    }
    public function showGerenciadorProduto(Request $request){
        $dados = produto::query();
        $dados->when($request->nomeProduto,function($query,$nome){
            $query->where('nomeProduto','like','%'.$nome.'%');
        });
        $dados = $dados->get();
        return view('buscarProduto',['produto' => $dados]);
    }
    public function destroyProduto(produto $id){
        $id->delete();
        return Redirect::route('todos-produto');
    }
    public function updateProduto(produto $id, Request $request){
        $produto = $request->validate([
            'nomeProduto' =>'string|required',
            'valorProduto' =>'string|required'
        ]);
        $id->fill($produto);
        $id->save();
        return Redirect::route('todos-produto');
    }
    public function showProduto(produto $id){
        return view('alterarProduto',['produto'=>$id]);
    }
}