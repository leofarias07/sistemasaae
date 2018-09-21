@extends('adminlte::page')



@section('content_header')
    <h1>Servicos Atendidos</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Servicos Atendidos</a></li>
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
              <a href="servico/create" class="btn btn-sm btn-info btn-flat pull-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Servico Atendido</font></font></a>
 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
    
    @include('admin.servatendido.search')
  </div>
</div>
 <div class="box-body">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Id</th>
         
          
          <th>Setor</th>
          <th>Serviço</th>

          <th>Quantidade</th>
          <th>Data</th>



          <th>Opções</th>
        </thead>
               @foreach ($servatendidos as $servatendido)
        <tr>
          <td>{{ $servatendido->id}}</td>
          <td>{{ $servatendido->descricaosetor}}</td>
          <td>{{ $servatendido->descricaoservico}}</td>
          <td>{{ $servatendido->quantidade}}</td>
          <td>{{ $servatendido->dataacao}}</td>

          <td>
            <a href="{{URL::action('Admin\ServicoController@edit',$servatendido->id)}}"><button class="btn btn-info">Editar</button></a>
            <a href="" data-target="#modal-delete-{{$servatendido->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
          </td>
        </tr>
        @include('admin.servatendido.modal')
        @endforeach
      </table>
    </div>
    {{$servatendido->render()}}
  </div>
</div>
</div>
</div>
@stop