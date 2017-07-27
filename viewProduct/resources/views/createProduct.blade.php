@extends('layouts.app')


<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@section('content')

<h1>Add New Product Here</h1>
<form method="post" class="cf" action="{{ url('/addProduct') }}">
  <div class="half left cf">
   <label>Product Name</label>
   </br>
    <input type="text" name="product_name" id="input-name" placeholder="Product Name">
    </br>
     <label>Product Category</label>
     </br>
    <input type="text" name="product_category" id="input-category" placeholder="Product Category">
    </br>
     <label>Product Price</label>
     </br>
    <input type="text" name="product_price" id="input-price" placeholder="Product Price">
    </br>
    <label>Product Image</label>
    </br>
    <input type="file" name="product_pic" id="input-pic" placeholder="Product image" accept="image/*">

  </div>
  <div class="half right cf">

  <label>Product Details</label>
   </br>
    <textarea rows="3" name="product_details"  id="input-details" placeholder="Product Details"></textarea>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form>


@endsection