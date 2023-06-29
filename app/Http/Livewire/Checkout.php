<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Shipment;
use App\Models\Locations;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{

    public $selectedShipmentId = 1;
    public $shipPrice;



    public function selectedShipment($shipmentId)
    {
        $ship = Shipment::findOrFail($shipmentId);
        $this->selectedShipmentId = $shipmentId;
        $this->shipPrice = $ship->price;
    }


    public function render()
    {
        $userId = Auth::id();
        $location = Locations::where('user_id', $userId)->first();
        $user = User::findOrFail($userId);
        $shipments = Shipment::all();
        $currentDate = Carbon::now();

        return view('livewire.checkout', [
            'userId' => $userId,
            'location' => $location,
            'user' => $user,
            'shipments' => $shipments,
            'currentDate' => $currentDate,
            'shipPrice' => $this->shipPrice,
        ]);
    }
}
