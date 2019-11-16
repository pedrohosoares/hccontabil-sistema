 @extends('adminlte::page')

@section('title', 'HCContabil')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Usuários</a></li>
        <li class="active">Detalhes do Usuário</li>
    </ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Detalhes do Usuário</h3>
    </div>

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('usuarios.store') }}">
    {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group" >
                <label for="nome">Nome</label>
                <p>{{ $cliente->name }}</p>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <p>{{ $cliente->email }}</p>
            </div>
            <div class="box-footer">
                <a href="{{ route('usuarios.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
</div>
    
@stop