 @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Clientes</a></li>
        <li class="active">Detalhes do Cliente</li>
    </ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Detalhes do Cliente</h3>
    </div>

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('clientes.store') }}">
    {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group" >
                <label for="nome">Nome</label>
                <p>{{ $cliente->nome }}</p>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <p>{{ $cliente->telefone }}</p>
            </div>

            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <p>{{ $cliente->whatsapp }}</p>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <p>{{ $cliente->email }}</p>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <p>{{ $cliente->endereco }}</p>
            </div>
            
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <p>{{ $cliente->cidade }}</p>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <p>{{ $cliente->estado }}</p>
            </div>

            <div class="box-footer">
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
</div>
    
@stop