@extends('app')
@section('content')
<form method="post" action="/admin/product/create">
<h1>Create New Product</h1>
<img src="/assets/images/product/addproduct.png" width="100px" height="100px">
  <fieldset>
    <legend>Add Product:</legend>
    
    <table>
        <tr>
        <td>Product Name:</td>
        <td><input type="text" name="name"></td>
        </tr>
        <tr>
        <td>Product Slug:</td>
        <td><input type="text" name="slug"></td>
        </tr>
        <tr>
        <td>Product SKU:</td>
        <td><input type="text" name="sku"></td>
        </tr>
        <tr>
        <td>Product Description:</td>
        <td><input type="text" name="desc"></td>
        </tr>
        <tr>
        <td>Product Price:</td>
        <td><input type="text" name="price"></td>
        </tr>
        <tr>
        <td>Product Discount %:</td>
        <td><input type="text" name="disc"></td>
        </tr>
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </tr>
        <table>

    <input type="image" value="Submit" src="/assets/images/product/btnaddproduct.png" width="150px" height="50px">
  </fieldset>
</form>
@endsection
