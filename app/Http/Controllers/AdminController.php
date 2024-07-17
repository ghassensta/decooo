<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){

        return view('admin.home');
    }

    public function login(){

        return view('admin.layouts.login');
    }


    public function produitenattente()
{
    $products = Product::where('user_id','!=', Auth::user()->id)
                            ->where('statut', 0)
                            ->get();

    return view('admin.produits.produitenattente', compact('products'));
}

}


