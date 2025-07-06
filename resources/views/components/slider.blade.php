@props(['product'])

<div class="flex-shrink-0" style="width: 200px; scroll-snap-align: start;">
    <a class="nav-link" href="{{ route('product.detail', $product->id) }}">
        <div class="card border-0">
            <img src="{{ $product->image_URL }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body p-2 ">
                <h6 class="text-dark fw-bold">{{ Str::limit($product->name, 40, '...') }}</h6>
                <p class="fw-bold mt-1">$ {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
        </div>
    </a>
</div>
