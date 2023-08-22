<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('home', [
            'name' => 'John',
            'greeting' => 'Good morning',
            'favoriteFoods' => [
                'Pizza',
                'Ice Cream',
                'Hamburguer',
                'Candy'
            ],
        ]);
    }
}
