<div class="container">
    <div class="d-flex flex-column justify-content-center align-items-center">

        <div class="w-100">
            <label for="exampleFormControlInput1" class="form-label">Select Continent</label>
            <select class="form-select"
                wire:model="selectedContinent"
                wire:change="changeContinent"
            >
                <option value="-1">Select Continent</option>
                @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">
                        {{ $continent->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="w-100 mt-4">
            <label for="exampleFormControlInput1" class="form-label">Select Country</label>
            <div class="form-control" wire:loading>Loading...</div>
            <select class="form-select" {{ !$selectedContinent ? 'disabled' : '' }} wire:loading.remove>
                <option value="-1" selected>
                    @if (!$selectedContinent)
                        Select Continent First
                    @else
                        Select Country
                    @endif
                </option>

                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
        </div>

    </div>
</div>
