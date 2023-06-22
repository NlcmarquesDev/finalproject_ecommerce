<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Slider extends Component
{
    public function render()
    {

        $products = Product::inRandomOrder()->take(5)->get();


        return view('livewire.slider', [
            'products' => $products,
        ]);
    }
}
