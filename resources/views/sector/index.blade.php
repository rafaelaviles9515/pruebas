@extends('base.base')

@section('title','Index Sector')

@section('boostrap')
@endsection
@section('content')
		<section class="page-section bg-dark text-white">
        </section>
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
		<a href="{{ route('users.excel') }}">Descargar excel</a>

		<form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data"> 
		@csrf
		@if(Session::has('message'))
		<p>{{ Session::get('message') }}</p>
		@endif

		<input type="file" name="file">

		<button>Importar Sectores</button>
		</form>

			</div>
        

@endsection
@section('finalboostrap')
@endsection
