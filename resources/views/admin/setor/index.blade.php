@extends('adminlte::page')



@section('content_header')
    <h1>Serviços</h1>

    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Setor</a></li>
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
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#exampleModal" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Setor</font></font></a>
          
            </div>
            <!-- /.box-header -->
            <div class="box-body">


<!-- Modal -->
		    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Setor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
             
             <form method="post" action="{{route('setor.store')}}">
                {!!csrf_field()!!}
                <div class="form-group">

                <input type="text" class="form-control" name="descricao" placeholder="descrição">
                </div>

                 
     
            
              
                
       
              

                 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
                
              </div>
              </form>
              
             
            </div>
          </div>
        </div>
           @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                  </div>

                @endif

              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID do Serviço</font></font></th>
                 
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrição</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acões</font></font></th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($setorcomercials as $setorcomercial)
                     <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$setorcomercial->id}}</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$setorcomercial->descricao}}</font></font></td>
                    
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="{{route('setor.edit',$setorcomercial->id)}}"><button type="button" class="btn btn-secondary">Editar</button></a> 

                      <a href="{{route('setor.show',$setorcomercial->id)}}"><button type="button" class="btn btn-danger">Excluir</button></a></font></font></td>
                  
                    </tr>


                  @endforeach
               
                 
               
                
                  
               
                
                
                
              
             
              
                
              
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
      
            <!-- /.box-footer -->
          </div>
@stop