<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $password = '';
    public $role = 'customer';
    public $vendor_name = '';
    public $vat_number = '';

    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'vendor_name' => 'required_if:role,vendor|min:2',
        'vat_number' => 'required_if:role,vendor',
    ];

    public function render()
    {
        return view('livewire.registration');
    }

    public function submit()
    {
        $this->validate();

        session()->flash('message', 'Customer was created');

        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->password = '';
        $this->role = 'customer';
        $this->vendor_name = '';
        $this->vat_number = '';
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
