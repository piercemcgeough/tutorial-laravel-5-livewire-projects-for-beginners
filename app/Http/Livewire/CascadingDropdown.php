<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        if ($this->selectedContinent == -1) {
            $this->selectedContinent = null;
            return;
        }

        sleep(1);
        $this->countries = Country::query()
            ->where('continent_id', $this->selectedContinent)
            ->get();
    }
}