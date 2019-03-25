@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Clientes</li>
    </ol>
@stop

@section('content')

<div class="box box-primary col-xs-12">    
    <div class="box-header">

        <div class="row">
            <div class="col-md-4">
            </div>
            
            <div class="col-md-4">
                @if ($message = Session::get('sucesso'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ $message }}</h4>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <h3 class="box-title col-md-3">Clientes</h3>           

            <div class="box-tools col-md-6">
                <div class="input-group input-group-sm" >
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar...">

                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-1">
                
            </div>

            <div class="col-md-2">
                <a href="{{ route('clientes.form')}}" class="btn btn-primary"> Cadastrar Cliente </a>
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
    </div><!-- /.box-body -->

    {{ $clientes->links() }}    

</div><!-- /.box -->


    
@stop