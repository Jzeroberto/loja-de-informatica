<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    
        public function index()
        {
            $contatos = Contato::all()->toArray();
            
            return view('contato.index',
                        [ 'lista' => $contatos ]
                        );
        }
        public function novo_contato() 
        {
            return view('info.novo_contato');
        }
        public function salvar_novo(Request $dados)
        {
            $contato = new Contato;
            $contato->nome = $dados->input("nome");
            $contato->email = $dados->input("email");
            $contato->assunto = $dados->input("assunto");
            $contato->conteudo = $dados->input("conteudo");
            $contato->save();
    
            return redirect('/mainsite');
        }
        public function excluir($id)
        {
            $contato = Contato::find($id);
            $contato->delete();
            return redirect('/contato');
        }
        public function pesquisa(Request $request)
        {
            $valor =  $request->input("nome");
    
            $contatos = Contato::query()
                        ->where('nome', 'LIKE', "%{$valor}%")
                        ->orwhere('assunto', 'LIKE', "%{$valor}%")
                        ->get();
    
            return view('contato.index',
                        [ 'lista' => $contatos ]
                        );
        }
}