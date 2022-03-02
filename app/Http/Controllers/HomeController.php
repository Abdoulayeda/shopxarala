<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Produit;

class HomeController extends Controller
{
    public function index()
    {
        return view('index'); 
    }

    public function showproduit($slug)
    {
        $produit =Produit::where('slug', $slug)->first();
        return view('showproduit', compact('produit'));
    }
}
