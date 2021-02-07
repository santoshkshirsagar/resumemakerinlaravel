<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class City extends Component
{
    public $country;
    public $state;
    public $city;

    public function render()
    {
        $countries = \App\Models\Country::get();
        $states = [];
        if($this->country>0) {
            $states = \App\Models\State::where('country_id', $this->country)->get();
        }

        
        $cities = [];
        if($this->state>0) {
            $cities = \App\Models\City::where('state_id', $this->state)->get();
        }

        return view('livewire.form.city', compact('countries', 'states', 'cities'));
    }
}
