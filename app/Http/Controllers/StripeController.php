<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session()
    {
        foreach (session('cart') as $id => $details) {
            $product_name = $details['product_name'];
            echo $product_name;
        }
        return " Success";
    }
}
