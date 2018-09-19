@extends('adminlte::page')



@section('content_header')
   

    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Setor</a></li>
    </ol>
@stop

@section('content')
 <div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3>Lista de Serviços<a href="setor/create"><button class="btn btn-success">Novo</button></a></h3>
    @include('admin.setor.search')
  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Id</th>
         
          <th>Descrição</th>
          <th>Opções</th>
        </thead>
               @foreach ($setores as $setor)
        <tr>
          <td>{{ $setor->id}}</td>
          
          <td>{{ $setor->descricao}}</td>
          <td>
            <a href="{{URL::action('Admin\SetorController@edit',$setor->id)}}"><button class="btn btn-info">Editar</button></a>
            <a href="" data-target="#modal-delete-{{$setor->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
          </td>
        </tr>
        @include('admin.setor.modal')
        @endforeach
      </table>
    </div>
    {{$setores->render()}}
  </div>
</div>
@stop