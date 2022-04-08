<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class GalleryIndex extends Component
{
    use WithFileUploads;
    public $categoria;
    public $gallery;
    public $picture;
    
    public function render()
    {
        return view('livewire.admin.gallery-index');
    }
    public function showform($action)
    {
       /* show = showform(true)  hide = showform(false) */ 
    }
    public function store($categoria){
        $this->validate([
            'picture'=>'image'
        ]);


    }
}
