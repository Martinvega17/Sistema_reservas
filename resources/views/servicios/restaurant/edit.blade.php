@extends ('home.index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Servicios del restaurante</h3>

			<form action="{{ route('restaurant.update', $restaurant) }}"  method="POST" >
				@csrf	
				@method('put')
				<x-restaurant-form :restaurant="$restaurant"/>

			
			</form>  
		</div>
	
	</div>
	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
			

@endsection