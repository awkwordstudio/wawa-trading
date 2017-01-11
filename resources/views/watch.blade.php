@extends('layout')
<html>
<head>
<title>Watch page</title>	
</head>
<body>
<form action="" method="POST">
<h1>Welcome to Watch Page</h1>
@foreach($watch as $w)
<table>
<tr>
	<td>{{$w->name}}</td>
	<td>{{$w->description}}</td>
	<td>{{$w->price}}</td>
</tr>

<tr><td><img src="/images/{{$w->image}}"></td></tr>
@endforeach
</table>	
</form>
</body>
</html>