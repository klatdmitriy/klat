<<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
@unless ($ day >= 18)
<p>вы еще не авторизованы</p>
@endunless

@if (count($arr) >= 1)
<p>в массиве есть записи</p>
@else
<p>в массиве нет записей</p>
@endif

</body>
</html>


