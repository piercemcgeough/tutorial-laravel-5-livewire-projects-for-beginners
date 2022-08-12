<div class="container">
    <form wire:submit.prevent="save" "d-flex flex-column justify-content-center align-items-center">
        @if ($images)
            Preview:
            <div class="row row-cols-5 g-4 my-4">
                @foreach ($images as $image)
                    <div class="col">
                        <div class="card h-100 justify-content-center">
                            <img src="{{ $image->temporaryUrl() }}" alt="" class="bd-placeholder-img card-img-top">
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="images" multiple class="form-control">

        @error('images') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="btn btn-primary mt-3"
            {{ count($images) == 0 ? 'disabled' : '' }}
        >Save Photos</button>
    </form>

    @if ($uploads)
        <div class="row row-cols-5 g-4 my-4">
            @foreach ($uploads as $upload)
                <div class="col">
                    <div class="card h-100 justify-content-center">
                        <img src="{{ $upload }}" alt="" class="bd-placeholder-img card-img-top">
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
