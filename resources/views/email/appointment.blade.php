<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@foreach($appointments as $ap=>$v)
	<h3>{{$ap}} :{{$v}} </h3>
	@endforeach
</body>
</html>