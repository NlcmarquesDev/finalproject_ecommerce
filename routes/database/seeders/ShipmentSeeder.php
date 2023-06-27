<?php

namespace Database\Seeders;

use App\Models\Shipment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shipments = [
            [
                'name' => 'Free',
                'price' => 0,
                'days_delivery' => 8,
            ],
            [
                'name' => 'Express',
                'price' => 12.00,
                'days_delivery' => 2,
            ]
        ];
        foreach ($shipments as $shipmnethData) {
            Shipment::create($shipmnethData);
        }
    }
}
