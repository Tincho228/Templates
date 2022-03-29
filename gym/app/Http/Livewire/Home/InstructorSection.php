<?php

namespace App\Http\Livewire\Home;

use App\Models\Instructor;
use Livewire\Component;

class InstructorSection extends Component
{
    public function render()
    {
        $instructors = Instructor::all();
        return view('livewire.home.instructor-section',compact('instructors'));
    }
}
