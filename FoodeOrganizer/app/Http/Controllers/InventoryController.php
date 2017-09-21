<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Inventory;
use Illuminate\Support\Facades\Auth;
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
        // $user = User::where('user_id', Auth::id())->firstOrFail();
        // $products = $user->products;

        $products = Product::all();
        return view('inventory.view', compact('products'));
    }

    public function edit() {
        $products = Product::all();
        return view('modals.inventory', compact('products'));
    }

    public function store(Request $request)
    {
        $inventory = new Inventory;

        $inventory->inventory_name = $request->inventory_name;
        $inventory->parent_user_id = \Auth::user()->id;
        $inventory->parent_product_id = $request->parent_product_id;
        $inventory->product_price = $request->product_price;
        $inventory->product_quantity = $request->product_quantity;
        $inventory->product_expiry_date = $request->product_expiry_date;

        $inventory->save();
        return Redirect('/inventory')->withInput();
    }


    
}