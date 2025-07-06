@extends('layouts.app')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <div class="container py-5">
        <div>
            <x-sort-product></x-sort-product>
        </div>
        <div class="row g-4">
            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
        <div class="d-flex justify-content-between align-items-end flex-column mt-4 ">
            <x-pagination :products="$products"/>
        </div>
    </div>
@endsection
