<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $food = Food::all();
        return view('food', compact('food'));
    }
}
