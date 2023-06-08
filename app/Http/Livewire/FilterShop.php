<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Hastag;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;


class FilterShop extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $selectCategory;
    public $selectColor;
    public $selectedHastags = [];
    public $high = false;
    public $low = false;
    protected $queryString = ['selectCategory', 'selectColor', 'selectedHastags', 'search', 'high', 'low'];




    public function sortBy($category)
    {
        $this->selectCategory = $category;
    }
    public function colorBy($color)
    {
        $this->selectColor = $color;
    }
    public function toggleHastag($hastag)
    {
        if (in_array($hastag, $this->selectedHastags)) {
            $this->selectedHastags = array_diff($this->selectedHastags, [$hastag]);
        } else {
            $this->selectedHastags[] = $hastag;
        }
    }

    public function updatedHigh()
    {
        $this->low = false;
    }

    public function updatedLow()
    {
        $this->high = false;
    }

    public function render()
    {
        $query = Product::with('photos', 'colors')->where('name', 'like', '%' . $this->search . '%');

        if ($this->selectCategory) {
            $query->whereHas('categories', function ($query) {
                $query->where('name', 'like', '%' . $this->selectCategory . '%');
            });
        }

        if ($this->selectColor) {
            $query->whereHas('colors', function ($query) {
                $query->where('name', 'like', '%' . $this->selectColor . '%');
            });
        }

        if ($this->selectedHastags) {
            $query->whereHas('hastags', function ($query) {
                $query->whereIn('name', $this->selectedHastags);
            });
        }
        if ($this->high) {
            $products = $query->orderByDesc('price');
        } elseif ($this->low) {
            $products = $query->orderBy('price', 'asc');
        }

        if (!$this->selectCategory && !$this->selectColor && !$this->selectedHastags) {
            $products = $query->paginate(9);
        } else {
            $products = $query->paginate(9);
        }

        $categories = Category::all();
        $colors = Color::all();
        $hastags = Hastag::all();

        return view('livewire.filter-shop', compact('products', 'colors', 'hastags', 'categories'));
    }



    // public function render()
    // {
    //     $query = Product::where('name', 'like', '%' . $this->search . '%');

    //     if ($this->selectCategory) {
    //         $query->whereHas('categories', function ($query) {
    //             $query->where('name', 'like', '%' . $this->selectCategory . '%');
    //         });
    //     }

    //     if ($this->selectColor) {
    //         $query->whereHas('colors', function ($query) {
    //             $query->where('name', 'like', '%' . $this->selectColor . '%');
    //         });
    //     }

    //     if ($this->selectedHastags) {
    //         $query->whereHas('hastags', function ($query) {
    //             $query->where('name', 'like', '%' . $this->selectedHastags . '%');
    //         });
    //     }
    //     // ->whereHas('hastags', function ($query) {
    //     //     $query->where('name', 'like', '%' . $this->selectHastag . '%');
    //     // });

    //     if ($this->hight) {
    //         $products = $query->orderByDesc('price');
    //     } elseif ($this->low) {
    //         $products = $query->orderBy('price', 'asc');
    //     }
    //     sort($this->selectedHastags);
    //     // dd($products);
    //     $products = $products->paginate(9);

    //     // dd($products);

    //     $categories = Category::all();
    //     $colors = Color::all();
    //     $hastags = Hastag::all();

    //     return view('livewire.filter-shop', compact('products', 'colors', 'hastags', 'categories'));
    // }
}
