<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Education extends Component
{
    public $education;
    public $qualification;
    public $year;
    public $percent;

    protected $rules = [
        'qualification' => 'required',
        'year' => 'numeric',
        'percent' => 'digits_between:1,100',
    ];

    public function submit()
    {
        $validated = $this->validate();
        $validated['user_id'] = Auth::id();
        $this->education = \App\Models\Education::create($validated);
        // Execution doesn't reach here if validation fails.

        
    }

    public function render()
    {
        
        $this->education = \App\Models\Education::where('user_id', Auth::id())->get();
       // $education = $this->education;
        return view('livewire.form.education');
    }
}
