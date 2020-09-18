@extends('base.base')

@section('title','Crear Sector')

@section('boostrap')
@endsection
@section('content')
		<section class="page-section bg-dark text-white">
        </section>
        <div class="container-sm">
			<h1 align="center">Crear Sector</h1>
			{{-- @include('partials.session-status') --}}
			<form method="POST" action="{{ route('sector.store') }}">
			<div class="form-group">
				@csrf
				<label>
					Nombre de sector
				<input class="form-control" type="text" name="nombre">
				</label>

				<br>
				<label>
					Descripcion del sector
				<textarea class="form-control" name="descripcion"></textarea>
				</label>
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a type="button" class="btn btn-primary" href="{{ route('sector.index') }}">Regresar</a>

		</div>
        

@endsection
@section('finalboostrap')
@endsection