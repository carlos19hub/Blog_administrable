<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        // Recuperamos la coleccion para pasarlo a la vista del componente
        $categories = Category::all();

        return view('livewire.navigation', compact('categories'));
    }
}
