@extends('layouts.app')

@section('content')

 <a class="btn btn-success pull-right" href="{{ url('/viewProduct') }}">View Products</a>
 <a class="btn btn-success pull-right" href="{{ url('/createProduct') }}">Add Product</a>
                   
@endsection
