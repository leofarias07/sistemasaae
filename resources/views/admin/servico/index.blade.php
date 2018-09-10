@extends('adminlte::page')



@section('content_header')
    <h1>Serviços</h1>

    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Serviços</a></li>
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
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#exampleModal" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Serviço</font></font></a>
          
            </div>
            <!-- /.box-header -->
            <div class="box-body">


<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Novo Serviço</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">


				<div class="form-group">
                  <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selecione</font></font></label>
                  <select class="form-control">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atendimento</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arrecadação</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perdas e Hidrometria</font></font></option>
                    
                  </select>
                </div>
                <div class="form-group">

				        <input type="text" class="form-control" id="inputEmail3" placeholder="descrição">
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				        <button type="button" class="btn btn-primary">Salvar</button>
				      </div>
				    </div>
				  </div>
				</div>

              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID do Serviço</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Setor</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrição</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acões</font></font></th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></td>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                     <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atendimento</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                   <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perdas e Hidrometria</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                   <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">115- Atendimento</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                   <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">04</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font>Arrecadação</font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                  
               
                
                
                
              
             
              
                
              
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
      
            <!-- /.box-footer -->
          </div>
@stop