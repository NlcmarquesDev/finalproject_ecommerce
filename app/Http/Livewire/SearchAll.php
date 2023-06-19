<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;



class SearchAll extends Component
{
    public $search = '';

    public function render()
    {
        $productSearch = [];

        if (strlen($this->search) >= 2) {
            $productSearch = Product::with('photos')->where('name', 'like', '%' . $this->search . '%')->get();
        }


        return view('livewire.search-all', [
            'productSearch' => collect($productSearch)->take(5),
        ]);
    }
}
