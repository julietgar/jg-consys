@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Detalle -</span> <snap style="color:#51a351; font-size:23px;">Cuentas por Pagar</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>-->
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a></a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

			<div class="row-fluid">

				<div class="span6">

					<p><strong>Datos</strong></p> 

					<hr class="bs-docs-separator">

					<div class="well">

						<table class="table table-hover">

					      <thead>
					        <tr>
					          <th>ID</th>
					          <th>Proveedor</th>
					          <th style="width: 36px;"></th>
					        </tr>
					      </thead>

					      <tbody>
					        <tr>
					          <td>1234567-89</td>
					          <td>Hidrocentro</td>
					        </tr>			        
					      </tbody>

					    </table>

				    </div>

				</div>

			</div>

			<strong>Deudas</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			          <th>Referencia</th>
			          <th>Código</th>
			          <th>Concepto</th>
			          <th>Tipo</th>
			          <th>Monto</th>
			          <th>Opciones</th>
			          <th style="width: 36px;"></th>
			        </tr>
			      </thead>

			      <tbody>
			        <tr>
			          <td>1234567</td>
			          <td>0132</td>
			          <td>CANCELACIÓN MES DE AGOSTO 2012</td>
			          <td>Factura</td>
			          <td>500,00</td>
			          <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
			        </tr>			        
			      </tbody>

			    </table>

			</div>

			</form>

			<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 id="myModalLabel">Delete Confirmation</h3>
			    </div>
			    
			    <div class="modal-body">
			        <p class="error-text">Are you sure you want to delete the user?</p>
			    </div>
			    
			    <div class="modal-footer">
			        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
			    </div>
			    
			</div>

		</div>

	</div>

</div>


@endsection