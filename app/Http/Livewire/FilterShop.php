<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Hastag;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Hastagables;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;


class FilterShop extends Component
{
    // use WithPagination;

    // protected $paginationTheme = 'bootstrap';
    // public $products;
    public $search = '';
    public $selectCategory;
    protected $queryString = ['selectCategory'];




    public function sortBy($category)
    {

        $this->selectCategory = $category;
        //dd($this->selectCategory);
    }

    public function render()
    {
        // $this->selectCategory = 'Accessories'; // Apenas para teste, substitua pelo valor real selecionado

        $products = Product::where('name', 'like', '%' . $this->search . '%')->get();

        // $products = Product::whereHas('categories', function ($query) {
        //     $query->where('name', 'like', '%' . $this->selectCategory . '%');
        // })->get();

        $categories = Category::all();
        $colors = Color::all();
        $hastags = Hastag::all();

        return view('livewire.filter-shop', compact('products', 'colors', 'hastags', 'categories'));
    }
}
