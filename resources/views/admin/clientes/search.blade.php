@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"> Clientes</a></li>
        <li class="active">Pesquisar Cliente</li>
    </ol>
@stop

@section('content')

<div class="box box-primary col-xs-12">    
    <div class="box-header">
        <div class="row">
            <h3 class="box-title col-md-3">Pesquisado por: <strong>{{ $pesquisa }}</strong></h3>           

            <div class="box-tools col-md-6">
                <form role="form" action="{{ route('clientes.pesquisar') }}" method="POST" >
                    {{ csrf_field() }}
                    <div class="form input-group input-group-sm" >
                    <input type="text" name="pesquisar" class="form-control pull-right" placeholder="Pesquisar...">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </form>
            </div>

            <div class="col-md-1">
                
            </div>

        </div>
    </div><!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
               <th class="col-md-1">ID</th>
               <th class="col-md-3">Nome</th>
               <th class="col-md-2">Telefone</th>
               <th class="col-md-3">E-mail</th>
               <th class="col-md-3">Ações</th>
            </tr>

            @foreach ($clientes as $cliente)
            <tr>                
                <td> {{ $cliente->id }} </td>
                <td> {{ $cliente->nome }} </td>
                <td> {{ $cliente->telefone }} </td>
                <td> {{ $cliente->email }} </td>
                <td> 
                    <a type="button" href="{{ url('admin/clientes/show', $cliente->id) }}" class="btn btn-success" btn-sm>Visualizar</a>
                    <a type="button" href="{{ url('admin/clientes/edit', $cliente->id) }}" class="btn btn-warning" btn-sm>Editar</a>
                    <a type="button" href="{{ url('admin/clientes/delete', $cliente)}}" class="btn btn-danger" btn-sm>Excluir</a>
                </td>                    
            </tr>
            @endforeach
            </tbody>
        </table>

        <div class="box-footer">
            <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>
        </div>

    </div><!-- /.box-body -->
</div><!-- /.box -->
    
@stop