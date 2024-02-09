<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagamento extends Model
{
    use HasFactory;
    protected $fillable = ['id' , 'qtdPagamentos', 'valorTotalPagamentos','idClienteFK','idProdutosFK','nomeCliente','nomeProduto'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idClienteFK');
    }

    public function produto()
    {
        return $this->belongsTo(produto::class, 'idProdutosFK');
    }
}