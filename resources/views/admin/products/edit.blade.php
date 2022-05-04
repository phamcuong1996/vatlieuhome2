@extends('admin.layout')
@section('content')
    @include('admin.products.base', ['route' => route('admin.products.update', $product->id)])
@endsection
