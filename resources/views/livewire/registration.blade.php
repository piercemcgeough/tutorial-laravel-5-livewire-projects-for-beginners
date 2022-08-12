<form wire:submit.prevent="submit" class="w-100">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h4 class="mb-3">Your Details</h4>

    <div class="mb-3">
        <label for="firstName" class="form-label">Role</label>
        <div class="w-100">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" value="customer" id="customer" name="role" wire:model="role">
                <label class="form-check-label" for="customer">Customer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" value="vendor" id="vendor" name="role" wire:model="role">
                <label class="form-check-label" for="vendor">Vendor</label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control {{ $errors->get('first_name') ? 'is-invalid' : ''}}" wire:model.debounce.500ms="first_name">
            @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control {{ $errors->get('last_name') ? 'is-invalid' : ''}}" wire:model.debounce.500ms="last_name">
            @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control {{ $errors->get('email') ? 'is-invalid' : ''}}" wire:model.debounce.500ms="email" placeholder="you@example.com">
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control {{ $errors->get('password') ? 'is-invalid' : ''}}" wire:model.debounce.500ms="password">
        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <hr class="my-4">

    @if ($role == "vendor")
        <h4 class="mb-3">Vendor Details</h4>

        <div class="mb-3">
            <label for="email" class="form-label">Vendor Name</label>
            <input type="text" class="form-control {{ $errors->get('vendor_name') ? 'is-invalid' : ''}}" wire:model.debounce.500ms="vendor_name">
            @error('vendor_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">VAT Number</label>
            <input type="text" class="form-control {{ $errors->get('vat_number') ? 'is-invalid' : ''}}" wire:model.debounce.500ms="vat_number">
            @error('vat_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <hr class="my-4">
    @endif

    <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
</form>
