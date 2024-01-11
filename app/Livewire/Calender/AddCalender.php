<?php

namespace App\Livewire\Calender;

use Livewire\Component;

class AddCalender extends Component
{
    public function render()
    {
        return view('livewire.calender.add-calender')
            ->title('Add Calender');
    }
}