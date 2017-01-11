@extends('layout')
<html>
<head>
<title>Glass page</title>	
</head>
<body>
<form action="" method="POST">
<h1>Welcome to Glass Page</h1>
@foreach($glass as $g)
<table>
<tr>
	<td>{{$g->name}}</td>
	<td>{{$g->description}}</td>
	<td>{{$g->price}}</td>
</tr>

<tr><td><img src="/images/{{$g->image}}"></td></tr>
@endforeach
</table>	
</form>
</body>
</html>