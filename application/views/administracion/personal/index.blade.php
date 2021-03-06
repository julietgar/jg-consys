@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Personal</span></h3> <hr />

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr class="well">
		          <th>#</th>
		          <th>Cédula</th>
		          <th>Nombre(s)</th>
		          <th>Tlf. Celular</th>
		          <th>Correo Electrónico</th>
		          <th>Cargo</th>
		          <th>Fecha Ingreso</th>
		          <th>Estado</th>
		          <th>Acciones</th>
		        </tr>
		      </thead>

		      <tbody>
		      	@if(!empty($personal))
		        	@foreach($personal as $prp)
		        		@if($prp->activo == 1) 
		        			<?php $estado = "Activo"; ?>
	        			@else
	        				<?php $estado = "Inactivo"; ?>
		        		@endif
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $prp->ci }}</td>
							<td>{{ $prp->nombre }}</td>
							<td>{{ $prp->tlf_cel }}</td>
							<td>{{ $prp->email }}</td>
							<td>{{ $prp->descripcion }}</td>
							<td>{{ $prp->fecha_ing }}</td>
							<td>{{ $estado }}</td>
							<td>{{ HTML::link('admin/personal/detalle','Detalle') }}</td>
						</tr>
					@endforeach
				@else
		        	<tr>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
					</tr>
				@endif
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection