<<!DOCTYPE html>       .
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<ul>
	@foreach ($arr as $elem)
		<li>{{ $elem }}</li>
	@endforeach
</ul>
</body>
</html>


