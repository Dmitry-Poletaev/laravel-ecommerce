<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
</head>
<body>

<h3>Картинки</h3>

@foreach ($banners as $banner)
  <li>
    <img  src="{{ URL::to($banner->image) }}"  alt="тест">
  </li>
@endforeach
</body>
</html>