<?php

namespace App\Http\Controllers;


class OrdersController extends Controller
{

    public function index()
    {
        return view('orders.index');
    }

}