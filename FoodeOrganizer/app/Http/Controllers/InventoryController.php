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
        $user = User::where('user_id', Auth::id())->firstOrFail();
        $products = $user->products;

        return view('inventory.view', compact('products'));
    }
}