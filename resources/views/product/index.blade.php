@extends('layout') 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($res as $r)
<UL>
<li>{{$r->name}}</li>
</UL>
@endforeach
</body>
</html>