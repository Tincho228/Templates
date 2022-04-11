<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class GalleryIndex extends Component
{
    use WithFileUploads;
    public $name, $content, $photo;
    public $categoria;
    public $gallery;


    public function uptaded($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
            'content' => 'required',
            'photo' =>'image'
        ]);
    }

    public function storePhoto()
    {
        $this->validate([
            'name' => 'required',
            'content' => 'required',
            'photo' =>'image'
        ]);
        dd($this->name, $this->content, $this->photo);
        //session()->flash('message', 'La imagen se subio con exito'); Mensaje de sesion
        // Cerrar el modal automaticamente
        $this->dispatchBrowserEvent('close-modal');
    }
    
    public function render()
    {
        return view('livewire.admin.gallery-index');
    }

}
