@extends('adminlte::page')



@section('content_header')
    <h1>Arrecadações</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Arrecadacão</a></li>
    </ol>
@stop

@section('content')
<div class="box box-info">
          
          <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
       <div class="box-footer clearfix">
              <a href="setor/create" class="btn btn-sm btn-info btn-flat pull-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nova Arrecadacão</font></font></a>
 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
    
    @include('admin.arrecadacao.search')
  </div>
</div>
 <div class="box-body">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Id</th>
          
          <th>Mês</th>
          <th>Ano</th>
          <th>Faturamento</th>
          <th>Estorno</th>
          <th>Saldo Faturado</th>
          <th>Contas Faturadas</th>
          <th>Arrecadação</th>
          <th>Contas Arrecadadas</th>
          <th>Opções</th>
        </thead>
               @foreach ($arrecadacaos as $arrecadacao)
        <tr>
          <td>{{ $arrecadacao->id}}</td>
          <td>{{ $arrecadacao->mes}}</td>
          <td>{{ $arrecadacao->ano}}</td>
          <td>{{ $arrecadacao->faturamento}}</td>
          <td>{{ $arrecadacao->estorno}}</td>
          <td>{{ $arrecadacao->saldofaturado}}</td>
          <td>{{ $arrecadacao->contafaturada}}</td>
          <td>{{ $arrecadacao->arrecadacao}}</td>
          <td>{{ $arrecadacao->contasarrecadadas}}</td>
         
          
          
          <td>
            <a href="{{URL::action('Admin\ArrecadacaoController@edit',$arrecadacao->id)}}"><button class="btn btn-info">Editar</button></a>
            <a href="" data-target="#modal-delete-{{$arrecadacao->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
          </td>
        </tr>
        @include('admin.arrecadacao.modal')
        @endforeach
      </table>
    </div>
    {{$arrecadacaos->render()}}
  </div>
</div>
</div>
</div>
@stop