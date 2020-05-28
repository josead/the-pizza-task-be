<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class MenuController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();

        // Transforming prices
        for ($i=0; $i < count($pizzas); $i++) { 
            $pizzas[$i]->price = [
                'value' => $pizzas[$i]->price_eur,
                'currency' => 'EUR'
            ];
            unset($pizzas[$i]->price_eur);
        }

        return $pizzas;
    }
}
