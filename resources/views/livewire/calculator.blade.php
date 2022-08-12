<div class="container">
    <div class="d-flex justify-content-around">
        <input type="number" wire:model="number1" placeholder="Number 1" class="form-control mx-2 text-center">

        <select wire:model="action" class="form-select mx-2 text-center">
            <option value="">Select action</option>
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>

        <input type="number" wire:model="number2" placeholder="Number 2" class="form-control mx-2 text-center">

        <button class="btn btn-success form-control mx-2"
            wire:click="calculate"
            {{ $disabled ? 'disabled' : ''}}
        >
            =
        </button>
    </div>

    <div class="d-flex justify-content-around align-items-center mt-3 fs-1">
        Result: {{ $result }}
    </div>
</div>
