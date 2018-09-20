@extends('adminlte::page')



@section('content_header')
    <h1>Servicos</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Servicos</a></li>
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
              <a href="servico/create" class="btn btn-sm btn-info btn-flat pull-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Servico</font></font></a>
 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
    
    @include('admin.servico.search')
  </div>
</div>
 <div class="box-body">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Id</th>
         
          <th>Descrição</th>
          <th>Setor</th>

          <th>Opções</th>
        </thead>
               @foreach ($servicos as $servico)
        <tr>
          <td>{{ $servico->id}}</td>
          
          <td>{{ $servico->descricao}}</td>
          <td>{{ $servico->descricaosetor}}</td>
          <td>
            <a href="{{URL::action('Admin\ServicoController@edit',$servico->id)}}"><button class="btn btn-info">Editar</button></a>
            <a href="" data-target="#modal-delete-{{$servico->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
          </td>
        </tr>
        @include('admin.servico.modal')
        @endforeach
      </table>
    </div>
    {{$servicos->render()}}
  </div>
</div>
</div>
</div>
@stop