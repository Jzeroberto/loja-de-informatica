<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Contato;
use App\Models\Comentario;
use App\Models\Site;


class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->toArray();
        
        return view('info.index',
                    [ 'lista' => $produtos ]
                    );
    }

    public function clientes()
    {
        $clientes = Cliente::all()->toArray();
        
        return view('info.clientes',
                    [ 'lista' => $clientes ]
                    );
    }

    public function contatos()
    {
        $contatos = Contato::all()->toArray();
        
        return view('info.contatos',
                    [ 'lista' => $contatos ]
                    );
    }

    public function comentarios()
    {
        $comentarios = Comentario::all()->toArray();
        
        return view('info.comentarios',
                    [ 'lista' => $comentarios ]
                    );
    }
}