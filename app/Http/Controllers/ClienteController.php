<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all()->toArray();
        
        return view('clientes.index',
                    [ 'lista' => $clientes ]
                    );
    }

    public function novo_cliente() 
    {
        return view('clientes.novo_cliente');
    }

    public function salvar_novo(Request $dados)
    {
        $cliente = new Cliente;
        $cliente->nome = $dados->input("nome");
        $cliente->telefone = $dados->input("telefone");
        $cliente->endereço = $dados->input("endereço");
        $cliente->cpf = $dados->input("cpf");
        $cliente->rg = $dados->input("rg");
        $cliente->data = $dados->input("data");
        $cliente->imagem = $dados->input("imagem");

        
        $cliente->save();

        return redirect('/cliente');
    }

    public function excluir($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/cliente');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id)->toArray();
        return view('clientes.editar',
                [ 'cliente' => $cliente ]        
            );
    }

    public function salvar_alteracao(Request $request)
    {
        $id = $request->input("id");

        $cliente = Cliente::find($id);
        $cliente->nome          = $request->input('nome');
        $cliente->telefone         = $request->input("telefone");
        $cliente->endereço        = $request->input('endereço');
        $cliente->cpf          = $request->input('cpf');
        $cliente->rg          = $request->input('rg');
        $cliente->data         = $request->input('data');
        $cliente->imagem         = $request->input('imagem');
        

        $cliente->save();

        return redirect('/cliente');
    }


    public function pesquisa(Request $request)
    {
        $valor =  $request->input("valor");

        $clientes = Cliente::query()
                    ->where('nome', 'LIKE', "%{$valor}%")
                    ->orwhere('preco', 'LIKE', "%{$valor}%")
                    ->get();

        return view('clientes.index',
                    [ 'lista' => $clientes ]
                    );
    }
    
}