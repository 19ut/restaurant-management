<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\resources\Views\; 

class CheckoutController extends Controller
{
    public function showCheckout()
    {
      
        $selectedItemIds = request()->input('selected_items');


        $selectedItems = Item::whereIn('id', $selectedItemIds)->get();

        $totalPrice = $selectedItems->sum('price');

        return view('submit', compact('selectedItems', 'totalPrice'));
    }
}
