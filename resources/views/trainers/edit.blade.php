@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<div class="container">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" name="slug" value="{{$trainer->slug}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<div>
				<img style="height: 100px; width: 100px; background-color: #efefef; margin:20px;" class="card-img-top rounded-circle" src="/images/{{$trainer->avatar}}">
				<input type="file" name="avatar">
			</div>
			
		</div>
		<div class="form-group">
			<label for="">Descripcion</label>
			<input type="text"  value="{{$trainer->descripcion}}" name="descripcion" class="form-control">
		</div>
		
	</div>
	<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection