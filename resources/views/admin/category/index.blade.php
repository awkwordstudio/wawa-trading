@extends('app')
@section('content')

@foreach($categories as $category)
<UL>
<li><a href="/admin/category/show/{{$category->id}}">{{$category->name}}</a></li>
</UL>
@endforeach

@endsection