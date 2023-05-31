<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Hastag;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class FilterProducts extends Component
{
    // public $category_id;
    // public $query;
    public $sortField;
    public $sortAsc = true;
    public $categories;
    public $colors;
    public $hastags;
    public $selectedCategories = [];

    public function mount()
    {
        $this->categories = Category::get();
        $this->colors = Color::get();
        $this->hastags = Hastag::get();
    }

    public function sortBy($field)
    {
        dd('test');
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function filterProducts()
    {
        dd('test');
        $filteredProducts = Product::query();

        if (!empty($this->selectedCategories)) {
            $filteredProducts->whereIn('category', $this->selectedCategories);
        }
        $filteredProducts = $filteredProducts->get();
    }

    // public function render()
    // {
    //     // $products = Product::get();
    //     // $categories = Category::get();
    //     // $colors = Color::get();
    //     // $hastags = Hastag::get();

    //     return view('livewire.filter-products', [
    //         'categories' => Category::where('name', $this->category)->orderByDesc('id')->get()
    //     ]);
    // }
}
