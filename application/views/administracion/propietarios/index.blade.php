@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Propietarios</span></h3> <hr />

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr class="well">
		          <th>#</th>
		          <th>Cédula</th>
		          <th>Parcela</th>
		          <th>Nombre(s) y Apellido(s)</th>
		          <th>Tlf. Casa</th>
		          <th>Correo Electrónico</th>
		          <th>Acciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        @if(!empty($propietarios))
		        	@foreach($propietarios as $prp)
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $prp->ci }}</td>
							<td>{{ $prp->parcela_nro }}</td>
							<td>{{ $prp->nombre }}</td>
							<td>{{ $prp->tlf_casa }}</td>
							<td>{{ $prp->email }}</td>
							<td>{{ HTML::link('admin/usuarios/detalle','Detalle') }}</td>
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
					</tr>
				@endif			        
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection