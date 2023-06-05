<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Hastag;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class FilterShop extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $selectCategory;
    public $selectColor;
    public $selectHastag;
    public $hight = false;
    public $low = false;
    protected $queryString = ['selectCategory'];




    public function sortBy($category)
    {
        $this->selectCategory = $category;
    }
    public function colorBy($color)
    {
        $this->selectColor = $color;
    }
    public function hastagBy($hastag)
    {
        $this->selectHastag = $hastag;
    }



    public function render()
    {
        $products = Product::with('photos', 'colors')->where('name', 'like', '%' . $this->search . '%')->whereHas('categories', function ($query) {
            $query->where('name', 'like', '%' . $this->selectCategory . '%');
        })->whereHas('colors', function ($query) {
            $query->where('name', 'like', '%' . $this->selectColor . '%');
        })->whereHas('hastags', function ($query) {
            $query->where('name', 'like', '%' . $this->selectHastag . '%');
        });

        if ($this->hight) {
            $products = $products->orderByDesc('price');
        } elseif ($this->low) {
            $products = $products->orderBy('price', 'asc');
        }
        // dd($products);
        $products = $products->paginate(9);

        $categories = Category::all();
        $colors = Color::all();
        $hastags = Hastag::all();

        return view('livewire.filter-shop', compact('products', 'colors', 'hastags', 'categories'));
    }
}
