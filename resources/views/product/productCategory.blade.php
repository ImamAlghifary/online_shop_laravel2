@extends('layouts.app')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <div class="container py-5">
        <div class="mb-3">
            <h3 class="fw-bolder text-dark" >{{strtoupper($category->name)}}</h3>
        </div>
        <div class="row g-4">
            @foreach ($products as $product)
                <x-product-card :product="$product"></x-product-card>
            @endforeach
        </div>

        <div class="d-flex justify-content-between align-items-end flex-column mt-4 ">
            <x-pagination :products="$products"></x-pagination>
        </div>
    </div>
@endsection
