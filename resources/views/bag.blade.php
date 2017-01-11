@extends('layout')
<html>
<head>
<title>Bag page</title>	
</head>
<body>
<form action="" method="POST">
<h1>Welcome to Bag Page</h1>
@foreach($bag as $b)
<table>
<tr>
	<td>{{$b->name}}</td>
	<td>{{$b->description}}</td>
	<td>{{$b->price}}</td>
</tr>

<tr><td><img src="/images/{{$b->image}}"></td></tr>
@endforeach
</table>	
</form>
</body>
</html>