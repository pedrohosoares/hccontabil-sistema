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
            <h3 class="box-title col-md-3">Clientes Cadastrados</h3>           

            <div class="box-tools col-md-7">
                <div class="input-group input-group-sm" >
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar...">

                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
            </div>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody><tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>

            @foreach ($clientes as $cliente)
            <tr>
                
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->cidade}}</td>
                <td></td>                    
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->

    {{ $clientes->links() }}    

</div><!-- /.box -->


    
@stop