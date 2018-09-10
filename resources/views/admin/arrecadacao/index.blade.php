@extends('adminlte::page')



@section('content_header')
    <h1>Arrecadação</h1>

    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Arrecadação</a></li>
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
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#exampleModal" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nova Arrecadação</font></font></a>
          
            </div>
            <!-- /.box-header -->
            <div class="box-body">


<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Nova Arrecadação</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">


		

            
                <div class="form-group">

				        <input type="text" class="form-control" id="inputEmail3" placeholder="Mês">
				        </div>

                 
                <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Ano">
                </div>

                 <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Faturamento">
                </div>

                 <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Estorno">
                </div>

                 <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Saldo Faturado">
                </div>

                 <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Contas Faturada">
                </div>

                 <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Arrecadação">
                </div>

                 <div class="form-group">

                <input type="text" class="form-control" id="inputEmail3" placeholder="Contas Arrecadadas">
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
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID Arrecadação</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mês</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ano</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturamento</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estorno</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saldo Faturado</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contas Faturada</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arrecadação</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contas Arrecadadas</font></font></th>
                     <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acões</font></font></th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                   <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                    <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
               <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-secondary">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></font></font></td>
                  
                  </tr>
                     <tr>
                    <td><a href="pages/examples/invoice.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></a></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,500,500.96</font></font></td>
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