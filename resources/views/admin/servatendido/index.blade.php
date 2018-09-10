@extends('adminlte::page')



@section('content_header')
    <h1>Serviços</h1>

    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Serviços Atendidos</a></li>
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
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#exampleModal" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Atendimento</font></font></a>
          
            </div>
            <!-- /.box-header -->
            <div class="box-body">


<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Novo Atendimento</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">


				<div class="form-group">
                  <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selecione o setor</font></font></label>
                  <select class="form-control">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atendimento</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arrecadação</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perdas e Hidrometria</font></font></option>
                    
                  </select>
                </div>

                    <div class="form-group">
                  <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selecione o serviço</font></font></label>
                  <select class="form-control">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vazamento</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Troca de Hidrometo</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ligação nova</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano estourado</font></font></option>
                    
                  </select>
                </div>
                <div class="form-group">

				        <input type="text" class="form-control" id="inputEmail3" placeholder="Quantidade">
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
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID do Serviço Atendido</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Setor</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Serviço</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Data</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quantidade</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acões</font></font></th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></td>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2018</font></font></td>
                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                 <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></td>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2018</font></font></td>
                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></td>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2018</font></font></td>
                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                 <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></td>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2018</font></font></td>
                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></td>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cano Estourado</font></font></td>
                       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2018</font></font></td>
                         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td>
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