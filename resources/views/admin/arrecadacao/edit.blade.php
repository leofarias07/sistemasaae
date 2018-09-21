@extends('adminlte::page')
@section('content')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Arrecadacão: {{ $arrecadacao->mes }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($arrecadacao, ['method'=>'PATCH', 'route'=>['arrecadacao.update', $arrecadacao->id]])!!}
			{{Form::token()}}

            <div class="form-group">
            	<label for="nome">Mês</label>
            	<input type="text" name="mes" class="form-control" 
            	value="{{ $arrecadacao->mes }}"
            	placeholder="Mês...">
            </div>
             <div class="form-group">
            	<label for="nome">Ano</label>
            	<input type="text" name="ano" class="form-control" 
            	value="{{ $arrecadacao->ano }}"
            	placeholder="Ano...">
            </div>
              <div class="form-group">
            	<label for="nome">Faturamento</label>
            	<input type="text" name="faturamento" class="form-control" 
            	value="{{ $arrecadacao->faturamento }}"
            	placeholder="Faturamento...">
            </div>
               <div class="form-group">
            	<label for="nome">Estorno</label>
            	<input type="text" name="estorno" class="form-control" 
            	value="{{ $arrecadacao->estorno }}"
            	placeholder="Estorno...">
            </div>
            <div class="form-group">
            	<label for="nome">Saldo faturado</label>
            	<input type="text" name="saldofaturado" class="form-control" 
            	value="{{ $arrecadacao->saldofaturado }}"
            	placeholder="Saldo faturado...">
            </div>
             <div class="form-group">
            	<label for="nome">Conta Faturada</label>
            	<input type="text" name="contafaturada" class="form-control" 
            	value="{{ $arrecadacao->contafaturada }}"
            	placeholder="Conta faturada...">
            </div>
             <div class="form-group">
            	<label for="nome">Arrecadação</label>
            	<input type="text" name="arrecadacao" class="form-control" 
            	value="{{ $arrecadacao->arrecadacao }}"
            	placeholder="Arrecadação...">
            </div>
              <div class="form-group">
            	<label for="nome">Contas Arrecadadas</label>
            	<input type="text" name="contasarrecadadas" class="form-control" 
            	value="{{ $arrecadacao->contasarrecadadas }}"
            	placeholder="Contas Arrecadadas...">
            </div>
          
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop