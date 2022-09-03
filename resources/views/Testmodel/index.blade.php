<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<style>
		* {
			font-family: Arial;
		}
	</style>
</head>
<body>
<p>Указанное имя - {{$data->name}}</p>
<p>Указанный возраст - {{$data->age}}</p>
<hr>
<img src="{{$data->photo_filename}}" width="500" alt="car photo">
<h3>{{$data->brand . " " . $data->model}}</h3>
<p>Price - {{$data->price}}</p>
<p>Mileage - {{$data->mileage}}</p>
</body>
</html>