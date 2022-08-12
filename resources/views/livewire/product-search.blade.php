<div class="container">
    <input
        type="text"
        class="form-control"
        placeholder="Search for products"
        wire:model.lazy="search"
    />

    @if ($products->count() == 0)
        <p class="mt-4">No products matching your description</p>
    @else
        <div class="row row-cols-5 g-4 my-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $product->image }}" alt="" class="bd-placeholder-img card-img-top">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{!! Str::words($product->description, 20, ' ...') !!}</p>
                            <div class="d-flex align-items-end flex-grow-1 justify-content-end">
                                £{{ number_format($product->price / 100, 2, '.', ',') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    @endif
</div>
