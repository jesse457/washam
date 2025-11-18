<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function orders()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }

    public function services()
    {
        $users = User::all();
        return view('admin.services', compact('users'));
    }
    public function customers()
    {
        $customers = User::all();
        return view('admin.customers', compact('customers'));
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
