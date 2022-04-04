<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Categoria;

class CategoriaSection extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.home.categoria-section', compact('categorias'));
    }
    
}
