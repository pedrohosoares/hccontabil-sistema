@extends('adminlte::page')

@section('title', 'HCContabil')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Usuários</li>
    </ol>
@stop

@section('content')

<div class="box box-primary col-xs-12">    
    <div class="box-header">

        <div class="row"> <!-- MODAL -->
            <div class="col-md-4"></div>

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
            <div class="col-md-4"></div>

            <div class="col-md-4">
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-close"></i>{{ $message }}</h4>
                    </div>
                @endif
            </div> <!-- MODAL -->
        </div>

        <div class="row">
            <h3 class="box-title col-md-3">Usuários</h3>           

            <div class="box-tools col-md-6">
                <form role="form" action="{{ route('usuarios.pesquisar') }}" method="POST" >
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

            <div class="col-md-2">
                <a href="{{ route('usuarios.form')}}" class="btn btn-primary"> Cadastrar Usuários </a>
            </div>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
               <th style="width:90px;" class="col-md-3">Nome</th>
               <th class="col-md-3">E-mail</th>
               <th class="col-md-3">Ações</th>
            </tr>

            @foreach ($clientes as $cliente)
            <tr>                
                <td> {{ $cliente->name }} </td>
                <td> {{ $cliente->email }} </td>
                <td> 
                    <a type="button" href="{{ url('admin/usuarios/show', $cliente->id) }}" class="btn btn-success" btn-sm>Visualizar</a>
                    <a type="button" href="{{ url('admin/usuarios/edit', $cliente->id) }}" class="btn btn-warning" btn-sm>Editar</a>
                    <a type="button" href="{{ url('admin/usuarios/delete', $cliente)}}" class="btn btn-danger" btn-sm>Excluir</a>
                </td>                    
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->

    <!-- PAGINAÇÃO -->
    {{ $clientes->links() }}    

</div><!-- /.box -->


    
@stop