@props(['products'])

<div>
    {{ $products->links('pagination::bootstrap-5') }}
</div>
<div class="mt-2 text-muted">
    Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} results
</div>