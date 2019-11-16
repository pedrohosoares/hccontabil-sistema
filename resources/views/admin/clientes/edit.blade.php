@extends('adminlte::page')

@section('title', 'HCContabil')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Clientes</a></li>
        <li class="active">Editar Cliente</li>
    </ol>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Editar Cliente</h3>
    </div><!-- /.box-header -->

    <!-- form start -->
    <form id="formulario" role="form" method="POST" action="{{ route('clientes.update') }}">
    {{ csrf_field() }}
        <div class="box-body campos">
            <input type="hidden" name="id" value="{{ $cliente->id }}">

            <div class="form-group" >
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{ $cliente->nome }}" name="nome" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control" value="{{ $cliente->telefone }}" name="telefone" required>
            </div>

            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input type="number" class="form-control" value="{{ $cliente->whatsapp }}" name="whatsapp" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" value="{{ $cliente->email }}" name="email" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" value="{{ $cliente->endereco }}" name="endereco" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" value="{{ $cliente->cidade }}" name="cidade" placeholder="Informe a Cidade do cliente..."  required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" value="{{ $cliente->estado }}" name="estado" placeholder="Ex.: RS, SC, SP"  maxlength="2" required>
            </div>
                <?php
            $dados = json_decode($cliente->dados,true);
            if(isset($dados[0])){ 
                foreach($dados[0] as $i=>$v){
                    ?>
                        <div class="form-group novo_campo"> 
                                <label style="cursor:pointer;" for="novo_campo" ><?php echo $i; ?></label> 
                                <div class="input-group"> 
                                        <input type="text" class="form-control" value="<?php echo $v; ?>" name="<?php echo $i; ?>" placeholder="" required> 
                                        <span onclick="excluir(this);" style="cursor: pointer;" class="input-group-addon" class="remove"><i class="fa fa-remove"></i></span>
                                    </div>
                        </div>
                        
                    <?php
                }
            }
            ?>
            <input type="hidden" name="dados" value="{{ $cliente->dados }}" />
        </div>

        
        <!-- /.box-body -->

        <div class="box-footer">
            <div onclick="addCampo();" class="btn btn-default add-campo"><i class="fa fa-plus"></i> Add Campo </div>
            <button type="submit" class="btn btn-primary"><strong>Salvar</strong></button>
            <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>
<script src="<?php echo asset('js/clientes.js'); ?>"></script>
@stop