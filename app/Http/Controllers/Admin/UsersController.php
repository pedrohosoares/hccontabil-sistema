<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $clientes = User::orderBy('id', 'desc')->paginate(10);
        return view('admin/usuarios/index', compact('clientes'));        
    }

    public function form(){
        return view('admin/usuarios/form');
    }

    public function store(Request $request){
        $cliente = User::create($request->all());

        if ($cliente)
            return redirect()->route('usuarios.index')->with('sucesso', 'Usuário Cadastrado!');
    }

    public function show($id){
        $cliente = User::find($id);

        return view('admin/usuarios/show', compact('cliente'));
    }

    public function edit($id){
        $cliente = User::find($id);

        return view('admin/usuarios/edit', compact('cliente', 'id'));
    }

    public function update(Request $request){
        $cliente = User::find($request->id);
        
        $cliente->name = $request->nome;
        $cliente->email = $request->email;
        $cliente->save();        

        if ($cliente){
            return redirect()->route('usuarios.index')->with('sucesso', 'Usuário Alterado!');
        }
    }

    public function delete(Request $request){
        $cliente = User::where('id',$request->id)->delete();

        if($cliente){
            return redirect()->route('usuarios.index')->with('sucesso', 'Usuário excluído!');
        }
    }

    public function search(Request $request){
        $pesquisa = $request->pesquisar;

        $clientes = User::pesquisa($request->pesquisar);

        if(count($clientes) > 0){
            return view('admin/usuarios/search', compact('clientes', 'pesquisa'));            
        } else {
            return redirect()->route('usuarios.index')->with('error', 'Nenhum Registro Encontrado!');
        }
    }
}
