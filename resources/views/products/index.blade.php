<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {padding: 40px}
	</style>
</head>
<body>
	<h1>Productos</h1>

	<table class="table table-striped table-bordered">
		<tbody>
			@foreach ($nombreVariable as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->category->name }}</td>
					<td style="text-align: right;">
						<a href="/products/{{$product->id}}/edit" class="btn btn-success">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="" class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	
</body>
</html>