<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\pagamento;
 
class PagamentoController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showFormPagamento(){
        return view('cadastrarPagamento');
    }
    public function storePagamento(Request $request){
        $pagamento = $request->validate([
            'qtdPagamentos' =>'string|required',
            'valorTotalPagamentos' =>'string|required',
            'idClienteFK' =>'int|required',
            'idProdutosFK' =>'int|required'
        ]);
 
        pagamento::Create($pagamento);
        return Redirect::route('index');
    }
    public function showGerenciadorPagamento(Request $request){
        $dados = pagamento::query();
        $dados->when($request->id,function($query,$id){
            $query->where('id','like','%'.$id.'%');
        });
        $dados = $dados->get();
        return view('buscarPagamento',['pagamento' => $dados]);
    }
    public function destroyPagamento(pagamento $id){
        $id->delete();
        return Redirect::route('todos-pagamento');
    }
    public function updatePagamento(pagamento $id, Request $request){
        $pagamento = $request->validate([
            'qtdPagamentos' =>'string|required',
            'valorTotalPagamentos' =>'string|required',
            'idClienteFK' =>'int|required',
            'idProdutos FK' =>'int|required'
        ]);

        $id->fill($pagamento);
        $id->save();
        return Redirect::route('todos-pagamento');

        
    }
    public function showPagamento(pagamento $id){
        return view('alterarPagamento',['pagamento'=>$id]);
    }
}