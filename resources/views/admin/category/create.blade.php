@extends('app')

@section('content')
<body>
<form method="post" action="/admin/category/create">
	<table>
	<tr><td align="right">Name: <input type="text" name="name"><br></td></tr>
	<tr><td align="right">Slug: <input type="text" name="slug"><br></td></tr>
	<tr><td align="right">Description: <input type="text" name="description"><br></td></tr>
	<tr><td align="right"><input type="submit" name="Submit"></td></tr>
	</table>
</form>
</body>
@stop