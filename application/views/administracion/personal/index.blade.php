@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/personal/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/personal'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/personal/cargos'); }}" class="btn"><i class="icon-briefcase"></i> Cargos</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Cédula</th>
		          <th>Nombre(s)</th>
		          <th>Tlf. Celular</th>
		          <th>Correo Electrónico</th>
		          <th>Cargo</th>
		          <th>Fecha Ingreso</th>
		          <th>Estado</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>20449123</td>
		          <td>Juliet Oriana Garcia Duque</td>
		          <td>04243809523</td>
		          <td>juliet.garcia@outlook.com</td>
		          <td>Secretaria</td>
		          <td>13/05/2012</td>
		          <td>Activo</td>
		          <td>{{ HTML::link('admin/personal/detalle','Detalle') }}</td>
		        </tr>			        
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection