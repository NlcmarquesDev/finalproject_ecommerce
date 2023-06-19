<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrdersDataTable extends Component
{

    public $tablesearch;

    public $sortAsc = true;
    public $sortField;
    public $paid;

    protected $queryString = ['tablesearch', 'sortAsc', 'sortField',];


    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function render()
    {

        return view('livewire.orders-data-table', [
            'orders' =>  Order::withTrashed()->where(function ($query) {
                $query->where('order_name', 'like', '%' . $this->tablesearch . '%')
                    ->orWhere('order_email', 'like', '%' . $this->tablesearch . '%');
            })
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->paginate(20)
        ]);
    }
}
