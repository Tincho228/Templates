<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class GalleryIndex extends Component
{
    use WithFileUploads;
    public $image;
    public $categoria;
    public $gallery;
    public $photo_delete_id;
    protected $rules = [
             'image' =>'image'
    ];

    public function storePhoto()
    {
        $this->validate();
        $url = Storage::disk('public')->put('galleries',$this->image);

        $this->categoria->gallery()->create([
            'url' => $url
        ]);
        session()->flash('info', 'La imagen se subio con exito');

        $this->reset(['image']);
        // Cerrar el modal automaticamente
        $this->dispatchBrowserEvent('closeModal');

        $this->emitTo('gallery-index','render');
         
    }
    public function deleteConfirmation($id)
    {
        $this->photo_delete_id = $id;
        $this->dispatchBrowserEvent('show-deleteConfirmation');
    }
    public function deletePhoto()
    {
        $photo = Gallery::where('id',$this->photo_delete_id)->first();
        Storage::disk('public')->delete('galleries',$photo->url);
        $photo->delete();
        session()->flash('info', 'La imagen se eliminó con exito');
        $this->dispatchBrowserEvent('closeModal');
        $this->emitTo('gallery-index','render');
    }
    public function cancel()
    {
        $this->photo_delete_id = '';
    }
    public function render()
    {
        $this->gallery = Gallery::where('imageable_id',$this->categoria->id)->get();
        return view('livewire.admin.gallery-index');
    }

}
