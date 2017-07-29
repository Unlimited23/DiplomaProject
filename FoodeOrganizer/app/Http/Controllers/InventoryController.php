<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userProducts = Product::with(['user', 'inventory'])->first();
        // $inventory = Inventory::with(['users', 'products'])->first();
        // $products = Inventory::with('products')->get();
        $usersProd = User::with('inventory')->get();
        foreach($usersProd as $item) 
        {
            $inv = $item->inventory->first();
            $test = $inv->quantity;
        } 
        return view('inventory.view', compact('usersProd'));
    }
}