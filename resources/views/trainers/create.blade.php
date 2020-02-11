@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
	@include('trainers.form')
	<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@include('common.errors')
@endsection
