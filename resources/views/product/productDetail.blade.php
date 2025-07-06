@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row g-5">
        <div class="d-flex col-md-6 justify-content-center align-items-center">
            <img src="{{ $product->image_URL }}" class="img-fluid rounded h-auto w-auto" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-between align-items-start mb-2">
                <h3 class="fw-bold">{{ $product->name }}</h3>
                <h4 class="text-primary">${{ number_format($product->price, 2) }}</h4>
            </div>
            <div class="mb-3">
                <h5>Description</h5>
                <p class="text-justify">{{ $product->description }}</p>
            </div>
            
            <!-- Add to Cart -->
            <div class="mb-4">
                <button class="btn btn-dark w-100 py-2 fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                    Buy
                </button>
            </div>

            <!-- Fabric & Care -->
            <div>
                <h5>Fabric & Care</h5>
                <ul>
                    <li>Only the best materials</li>
                    <li>Ethically and locally made</li>
                    <li>Pre-washed and pre-shrunk</li>
                    <li>Machine wash cold with similar colors</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
