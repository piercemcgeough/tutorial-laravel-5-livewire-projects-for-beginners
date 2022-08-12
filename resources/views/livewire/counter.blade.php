<div class="container">
    <div class="d-flex justify-content-around align-items-center mb-4 fs-1">
        <button type="button"
            class="btn btn-light"
            wire:click="increment"
        >
            +
        </button>

        {{ $count }}

        <button type="button"
            class="btn btn-light"
            wire:click="decrement"
        >
            -
        </button>
    </div>
</div>
