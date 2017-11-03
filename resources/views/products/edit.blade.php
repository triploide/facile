<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Product</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style>
		body {padding: 40px}
	</style>
</head>
<body>
	<div class="container">
		<form action="/products/{{ $productModel->id }}" method="post">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="name" class="form-control" value="{{ $productModel->name }}">
			</div>
			<div class="form-group">
				<label>Costo</label>
				<input type="text" name="cost" class="form-control" value="{{ $productModel->cost }}">
			</div>
			<div class="form-group">
				<label>Margen</label>
				<input type="text" name="profit_margin" class="form-control" value="{{ $productModel->profit_margin }}">
			</div>
			<div class="form-group">
				<label>Categoría</label>
				<select name="category_id" class="form-control">
					@foreach ($categories as $category)
						<option value="{{$category->id}}">{{ $category->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Propiedades</label><br>
				@foreach ($properties as $property)
					<input type="checkbox" name="properties[]" value="{{$property->id}}" /> {{ $property->name }} <br>
				@endforeach
			</div>
			<div class="form-group">
				<input type="submit" name="Enviador" class="btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>