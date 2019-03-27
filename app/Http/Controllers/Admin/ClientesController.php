<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::orderBy('id', 'desc')->paginate(10);
        
        return view('admin/clientes/index', compact('clientes'));        
    }

    public function form(){
        return view('admin/clientes/form');
    }

    public function store(Request $request){
        $cliente = Cliente::create($request->all());

        if ($cliente)
            return redirect()->route('clientes.index')->with('sucesso', 'Cliente Cadastrado!');
    }

    public function show($id){
        $cliente = Cliente::find($id);

        return view('admin/clientes/show', compact('cliente'));
    }

    public function edit($id){
        $cliente = Cliente::find($id);

        return view('admin/clientes/edit', compact('cliente', 'id'));
    }

    public function update(Request $request){
        $cliente = Cliente::find($request->id);
        
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->whatsapp = $request->whatsapp;
        $cliente->email = $request->email;
        $cliente->endereco = $request->endereco;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->save();        

        if ($cliente){
            return redirect()->route('clientes.index')->with('sucesso', 'Cliente Alterado!');
        }
    }

    public function delete(Request $request){
        $cliente = Cliente::where('id',$request->id)->delete();

        if($cliente){
            return redirect()->route('clientes.index')->with('sucesso', 'Cliente excluído!');
        }
    }

    public function search(Request $request){
        $pesquisa = $request->pesquisar;

        $clientes = Cliente::pesquisa($request->pesquisar);

        if(count($clientes) > 0){
            return view('admin/clientes/search', compact('clientes', 'pesquisa'));            
        } else {
            return redirect()->route('clientes.index')->with('error', 'Nenhum Registro Encontrado!');
        }
    }
}
