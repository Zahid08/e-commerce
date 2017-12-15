<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function index(){
        return view('front.home.home-content');
    }
    
    public function productCategory(){
        return view('front.category.category-content');
    }
    
    public function productDetails(){
        return view('front.product.product-details-content');
    }
    
    
}
