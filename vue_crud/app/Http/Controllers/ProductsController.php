<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::latest()->get();

        return Inertia::render("Product/Index", [
            "products"=> $products
        ]);
    }

    public function store(Request $request)
    {

    }

    public function show(Products $product)
    {

    }

    public function edit(Products $product)
    {

    }

    public function update(Request $request, Products $product)
    {

    }

    public function destroy(Products $product){

    }
}
