@extends('layout')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
@section('content')
<body>
<form method="post" action="/product/create">
	<table>
	<tr><td align="right">Name: <input type="text" name="name"><br></td></tr>
	<tr><td align="right">Description: <input type="text" name="desc"><br></td></tr>
	<tr><td align="right">Price: <input type="text" name="price"><br></td></tr>
	<tr><td align="right"><input type="submit" name="Submit"></td></tr>
	</table>
</form>
</body>
@stop
</html>