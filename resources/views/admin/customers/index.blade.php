@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Clientes</li>
    </ol>
@stop

@section('content')

<div class="col-xs-12">
    <div class="box box-primary">
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
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>

                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
    
@stop