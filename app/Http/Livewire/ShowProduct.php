<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProduct extends Component
{

    public Product $product;

    public function render()
    {


        return view('livewire.show-product');
    }
}
