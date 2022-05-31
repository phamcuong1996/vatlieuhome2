@extends('admin.layout')
@section('content')
    @include('admin.banners.base', ['route' => route('admin.banners.update', $product->id)])
@endsection

