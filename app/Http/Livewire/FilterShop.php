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
    public $selectCategory = null;
    public $selectColor;
    public $selectedHastags = [];
    public $high = false;
    public $low = false;
    protected $queryString = ['selectCategory', 'selectColor', 'selectedHastags', 'search', 'high', 'low'];




    public function sortBy($category)
    {

        if (is_array($this->selectCategory)) {
            if (in_array($category, $this->selectCategory)) {
                $this->selectCategory = array_diff($this->selectCategory, [$category]);
            } else {
                $this->selectCategory[] = $category;
            }
        } else {
            $this->selectCategory = [$category];
        }
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
    public function removeHastag($hastag)
    {
        $index = array_search($hastag, $this->selectedHastags);
        if ($index !== false) {
            unset($this->selectedHastags[$index]);
            $this->selectedHastags = array_values($this->selectedHastags);
        }
    }
    // public function getSelectCategoryProperty()
    // {
    //     return !empty($this->selectedCategory);
    // }

    public function deselectColor($color)
    {
        if ($this->selectColor === $color) {
            $this->selectColor = null;
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

        // if ($this->selectCategory) {
        //     $query->whereHas('categories', function ($query) {
        //         $query->where('name', 'like', '%' . $this->selectCategory . '%');
        //     });
        // }

        if ($this->selectCategory) {

            $categories = is_array($this->selectCategory) ? $this->selectCategory : [$this->selectCategory];
            $query->whereHas('categories', function ($query) use ($categories) {
                $query->whereIn('name', $categories);
            });
            // dd($categories);
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
            $query->orderByDesc('price');
        } elseif ($this->low) {
            $query->orderBy('price', 'asc');
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
}
