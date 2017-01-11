@extends('layout')
<html>
<head>
<title>Glass page</title>	
</head>
<body>
<form action="/glasses/edit/{{$glass->id}}" method="POST">
{{method_field('PATCH')}}
<h1>Welcome to Glass Page</h1>
<table>
<tr>
	<td><input type="text" name="name" value="{{$glass->name}}"></td>
	<td><input type="text" name="description" value="{{$glass->description}}" ></td>
	<td><input type="text" name="price" value="{{$glass->price}}"></td>
</tr>

<tr><td><input type="text" name="image" value="{{$glass->image}}"></td></tr>
<tr><td><input type="submit" name="submit"></td></tr>
<tr><td><input type="submit" name="cancel"></td></tr>
</table>	
</form>
</body>
</html>