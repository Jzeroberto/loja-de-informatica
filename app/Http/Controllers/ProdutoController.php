<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->toArray();
        
        return view('produtos.index',
                    [ 'lista' => $produtos ]
                    );
    }

    public function novo_produto() 
    {
        return view('produtos.novo_produto');
    }

    public function salvar_novo(Request $dados)
    {
        $produto = new Produto;
        $produto->nome = $dados->input("nome");
        $produto->preco = $dados->input("preco");
        $produto->peso = $dados->input("peso");
        $produto->estoque = $dados->input("estoque");
        $produto->detalhe = $dados->input("detalhe");
        $produto->imagem = $dados->input("imagem");
        
        $produto->save();

        return redirect('/produto');
    }

    public function excluir($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/produto');
    }

    public function editar($id)
    {
        $produto = Produto::find($id)->toArray();
        return view('produtos.editar',
                [ 'produto' => $produto ]        
            );
    }

    public function salvar_alteracao(Request $request)
    {
        $id = $request->input("id");

        $produto = Produto::find($id);
        $produto->nome          = $request->input('nome');
        $produto->preco         = $request->input("preco");
        $produto->peso          = $request->input('peso');
        $produto->estoque          = $request->input('estoque');
        $produto->detalhe          = $request->input('detalhe');
        $produto->imagem          = $request->input('imagem');
        $produto->save();

        return redirect('/produto');
    }


    public function pesquisa(Request $request)
    {
        $valor =  $request->input("valor");

        $produtos = Produto::query()
                    ->where('nome', 'LIKE', "%{$valor}%")
                    ->orwhere('preco', 'LIKE', "%{$valor}%")
                    ->get();

        return view('produtos.index',
                    [ 'lista' => $produtos ]
                    );
    }
    
}