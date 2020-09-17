<!DOCTYPE html>
<html>
<head>
	<title>Index Sector</title>
</head>
<body>
	<div class="container-sm">
		<h1>Sector</h1>
	{{-- @include('partials.session-status') --}}
	
	
	<a type="button" class="btn btn-success" href="{{ route('sector.create') }}">Crear sector</a>
	<br>
	<br>

	<table class="table table-hover">

		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Nombre</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse($sectores as $sector)
		    <tr>
		      <td>{{ $sector->id }}</td>
		      <td>{{ $sector->nombre}}</td>
		      <td>
		      	<a type="button" class="btn btn-primary" href=""> Editar</a>
				<a type="button" class="btn btn-danger" href=""> Eliminar</a>
		      </td>
		    </tr>
		    @empty
			<tr>
		      <td>No hay sectores </td>
		    </tr>
			@endforelse
			
		  </tbody>
	</table>
	</div>
</body>
</html>