@extends('adminlte::page')
@section('content')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Setor: {{ $setor->descricao }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($setor, ['method'=>'PATCH', 'route'=>['setor.update', $setor->id]])!!}
			{{Form::token()}}

            <div class="form-group">
            	<label for="nome">Descrição</label>
            	<input type="text" name="descricao" class="form-control" 
            	value="{{ $setor->descricao }}"
            	placeholder="Nome...">
            </div>
          
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop