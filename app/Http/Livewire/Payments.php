<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use Livewire\Component;

class Payments extends Component
{
    public $tablesearch;
    public $paymentStatus = '';
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

        return view('livewire.payments', [
            'payments' =>  Payment::where(function ($query) {
                $query->where('transation_id', 'like', '%' . $this->tablesearch . '%');
            })
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->paginate(20)
        ]);
    }
}
