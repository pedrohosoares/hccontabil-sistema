@extends('adminlte::page')

@section('title', 'HCContabil')

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
    <form id="formulario" role="form" method="POST" action="{{ route('clientes.store') }}">
    {{ csrf_field() }}
        <div class="box-body campos">
            <div class="form-group" >
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Informe o nome do cliente..." required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control" name="telefone" placeholder="Informe o Telefone do cliente..."  required>
            </div>

            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input type="number" class="form-control" name="whatsapp" placeholder="Informe o WhatsApp do cliente..."  required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Informe o E-mail do cliente..." required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Informe o Endereço do cliente..."  required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="string" class="form-control" name="cidade" placeholder="Informe a Cidade do cliente..."  required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" placeholder="Ex.: RS, SC, SP"  maxlength="2" required>
            </div>
            <input type="hidden" name="dados" />
        </div>

        
        <!-- /.box-body -->

        <div class="box-footer">
            <div onclick="addCampo();" class="btn btn-default add-campo"><i class="fa fa-plus"></i> Add Campo </div>
            <button type="submit" class="btn btn-primary"><strong>Cadastrar</strong></button>
            <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>
    <script src="<?php echo asset('js/clientes.js'); ?>"></script>
@stop