@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Carousel Component --}}
    <x-carousel></x-carousel>

    {{-- Dynamic Product Sliders by Category --}}
    @foreach ($categories as $category)
        @if ($category->products->count())
            <div class="d-flex justify-content-between border-bottom border-dark border-2 mb-4">
                <h4 class="fw-bold text-dark">{{ strtoupper($category->name) }}</h4>
                <a class="nav-link d-flex align-items-center text-dark fw-semibold" href="{{ route('product.category', $category->id) }}" aria-label="View more products">
                    <i class="bi bi-caret-right-fill fs-4 text-dark"></i>MORE
                </a>
            </div>
            <div class="slider-container d-flex overflow-auto gap-3 pb-3">
                @foreach ($category->products as $product)
                    <x-slider :product="$product"></x-slider>
                @endforeach
            </div>
        @endif
    @endforeach

</div>
@endsection
