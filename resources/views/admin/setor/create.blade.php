@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form method="post" action="{{route('setor.store')}}">
                {!!csrf_field()!!}
                <div class="form-group">

                <input type="text" class="form-control" name="descricao" placeholder="descrição">
                </div>

                 
     
            
                <button type="submit" class="btn btn-primary">Salvar</button>
                
       
</form>

@stop