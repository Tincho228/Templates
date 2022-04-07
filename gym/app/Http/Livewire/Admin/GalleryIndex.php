<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Gallery;

class GalleryIndex extends Component
{
    public $categoria;
    public $gallery;
    public $form = false;
    
    public function render()
    {
        return view('livewire.admin.gallery-index');
    }
    public function showform($action)
    {
       /* show = showform(true)
          hide = showform(false)
        */ 
       $this->form = $action;
    }
}
