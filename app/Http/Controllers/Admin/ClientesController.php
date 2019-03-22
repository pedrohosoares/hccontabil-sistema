<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::orderBy('id', 'desc')->paginate(5);
        
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

        return view('admin/clientes/editar', compact('cliente', 'id'));
    }

    public function update(Request $request){
        $cliente = Cliente::find($request->id);
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->save();        

        if ($cliente)
            return redirect()->route('clientes.index')->with('sucesso', 'Cliente Alterado!');
    }

    public function delete($id){
        $cliente = Cliente::find($id);        
        $cliente->delete();
        
        return redirect ()->route('clientes.index')->with('sucesso', 'Cliente excluído!');
    }
}
