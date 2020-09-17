<!DOCTYPE html>
<html>
<head>
	<title>Sector</title>
</head>
<body>
	<h1>Crear Sector</h1>


	<form method="POST" action="{{ route('sector.store') }}">
		@csrf
		<label>
			Nombre de sector
		<input type="text" name="nombre">
		</label>
		<br>
		<br>
		<label>
			Descripcion del sector
		<textarea name="descripcion"></textarea>
		</label>
		<br>
		<br>
		<button>Guardar</button>
</body>
</html>