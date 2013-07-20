@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/proveedores/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/proveedores'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<hr>

			<form action="{{ URL::to('admin/proveedores/agregar') }}" method="post" class="form-modules">

				<div class="well">

					<div class="row-fluid">

						<div class="span6">

							{{ $message; }}

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

				</div>

				<input type="submit" class="btn btn-primary" name="add" value="Agregar">

			</form>

		</div>

	</div>

</div>


@endsection