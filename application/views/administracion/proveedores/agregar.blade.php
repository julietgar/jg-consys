@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Proveedores</span> - Agregar</h3> <hr />

			<form action="{{ URL::to('admin/proveedores/agregar') }}" method="post" class="form-modules">

					<div class="row-fluid">

						<div class="span6">

							@if(!empty($message))
								<div class="alert alert-success">{{ $message }}</div>
							@endif

							<div class="control-group">

								<label class="control-label-right" for="inputRif"><strong>RIF</strong></label>
								<div class="controls">

									<input type="text" name="rif" id="rif" placeholder="rif">

								</div>

								<label class="control-label-right" for="inputNombre"><strong>Nombre</strong></label>
								<div class="controls">

									<input type="text" name="nombre" id="nombre" placeholder="Nombre">

								</div>

								<label class="control-label-right" for="inputTelefono"><strong>Teléfono</strong></label>
								<div class="controls">

									<input type="text" name="telefono" id="telefono" placeholder="Teléfono">

								</div>

							</div>

						</div>

						<div class="span6">

							<div class="control-group">

								<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
								<div class="controls">

									<input type="text" name="email" id="inputEmail" placeholder="Correo Electrónico">

								</div>

								<label class="control-label-right" for="inputDireccion"><strong>Dirección</strong></label>
								<div class="controls">

									<input type="text" name="direccion" id="Direccion" placeholder="Dirección">

								</div>

							</div>

						</div>

					</div>

					<div align="center">
						<div class="large-button">	
							<input type="submit" class="btn btn-block btn-success" name="add" value="Agregar">
						</div>
					</div>

			</form>

		</div>

	</div>

</div>


@endsection