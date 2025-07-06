@props(['product'])

<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="card h-100 border-0">
        <img src="{{ $product->image_URL }}" class="card-img-top" alt="{{ $product->name }}">
        <div class="card-body d-flex flex-column ">
            <h5 class="card-title fw-bold align-self-center">{{ $product->name }}</h5>
            <p class="card-text" style="text-align: justify">{{ Str::limit($product->description, 120, '...') }}</p>
            <div class="d-flex justify-content-between h-100">
                <h5 class="mt-auto">${{$product->price}}</h5>
                <a href="{{ route('product.detail', $product->id) }}" class="d-flex btn btn-dark mt-auto w-25 justify-content-center" >Buy</a>    
            </div>
        </div>
    </div>
</div>