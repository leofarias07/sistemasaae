@extends('adminlte::page')
@section('content')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Serviço: {{ $servico->descricao }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($servico, ['method'=>'PATCH', 'route'=>['servico.update', $servico->id]])!!}
			{{Form::token()}}


		 	<div class="row">
          		<div class="col-lg-6 col-sm-6 col-xs-12">
          			<div class="form-group">
          				<label>Setor</label>
          				<select name="setorcomercials_id" class="form-control">
          					@foreach ($setores as $setor)
          					<option value="{{$setor->id}}">
          					{{$setor->descricao}}
          					</option>
          					@endforeach
          				</select>
          			</div>
          		</div>
          		<div class="col-lg-6 col-sm-6 col-xs-12">
          			<div class="form-group">
		            <label for="descricao">Descrição</label>
		            <input type="text" name="descricao" class="form-control" placeholder="Descrição...">

            		</div>
          		</div>
          		
          	</div>
          
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop