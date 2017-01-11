@extends('layout')
<html>
<head>
<title>Shoe page</title>	
</head>
<body>
<form action="" method="POST">
<h1>Welcome to Shoe Page</h1>
@foreach($shoe as $s)
<table>
<tr>
	<td>{{$s->name}}</td>
	<td>{{$s->description}}</td>
	<td>{{$s->price}}</td>
</tr>

<tr><td><img src="/images/{{$s->image}}"></td></tr>
@endforeach
</table>	
</form>
</body>
</html>