@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Clientes</a></li>
        <li class="active">Cadastrar Cliente</li>
    </ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Cadastrar Cliente</h3>
    </div><!-- /.box-header -->

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('clientes.store') }}">
    {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group" >
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Informe o nome do cliente..." required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control" name="telefone" placeholder="Informe o Telefone do cliente..."  required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Informe o E-mail do cliente..." required>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
    
@stop