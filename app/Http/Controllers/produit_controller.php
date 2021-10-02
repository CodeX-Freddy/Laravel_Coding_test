<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class produit_controller extends Controller
{
    //
}

public function index(){

}

public function store(Request $request){
    //validate the input
    $request->validate([
        'name' => 'required',
        'description' => 'required'
    ]);

    // create new product
    Produit::create($request->all());
    return redirect()->route('partials.index')->with('success', 'Product created successfully');
}