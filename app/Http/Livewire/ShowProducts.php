<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;




class ShowProducts extends Component
{

    public $product;

    public function render()
    {
        return view('livewire.show-products');
    }
}
