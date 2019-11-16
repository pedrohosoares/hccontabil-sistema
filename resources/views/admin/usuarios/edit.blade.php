@extends('adminlte::page')

@section('title', 'HCContabil')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Usuários</a></li>
        <li class="active">Editar Usuário</li>
    </ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Editar Usuário</h3>
    </div><!-- /.box-header -->

    <!-- form start -->
    <form id="formulario" role="form" method="POST" action="{{ route('usuarios.update') }}">
    {{ csrf_field() }}
        <div class="box-body campos">
            <input type="hidden" name="id" value="{{ $cliente->id }}">

            <div class="form-group" >
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{ $cliente->name }}" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" value="{{ $cliente->email }}" name="email" required>
            </div>
        </div>

        
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><strong>Salvar</strong></button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>
@stop