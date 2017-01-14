@extends('app')

@section('content')

@foreach($res as $r)
<UL>
<li><a href="/admin/product/show/{{$r->id}}">{{$r->name}}</a></li>
</UL>
@endforeach
@endsection