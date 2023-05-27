<?php

namespace App\Helpers;

class Price {
    public function format($price, $currency = '€') {
        return number_format($price, 2) . $currency;
    }
}
