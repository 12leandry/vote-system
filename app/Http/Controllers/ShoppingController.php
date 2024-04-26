<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index()
    {
        // You can add any logic here to fetch data or perform any other actions required for the shopping page
        // For example, you can pass data to the view and render the shopping page

        return view('shopping');
    }}
