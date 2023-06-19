<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Slider extends Component
{
    public function render()
    {

        $products = Product::inRandomOrder()->take(1)->get();
        $productCat = Product::whereHas('categories', function ($query) {
            $query->where('name', 'like', '%' . 'Accessories' . '%');
        })->take(1)->get();
        $productDin = Product::whereHas('categories', function ($query) {
            $query->where('name', 'like', '%' . 'Dinning' . '%');
        })->take(1)->get();
        $productFun = Product::whereHas('categories', function ($query) {
            $query->where('name', 'like', '%' . 'Furniture' . '%');
        })->take(1)->get();
        $randomInterval = rand(2, 10) * 1000;

        return view('livewire.slider', [
            'products' => $products,
            'randomInterval' => $randomInterval,
            'productCat' => $productCat,
            'productDin' => $productDin,
            'productFun' => $productFun
        ]);
    }
}
