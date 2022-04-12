<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\items;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(request $request)
    {
        $data = $request->all;
        $items_id = items::insertGetId([
            'name' => $data['name'],
            'price' => $data['price'],
            'stocks' => $data['stocks'],
            'gender' => $data['gender'],
            'categories' => $data['categories'],
            'designers' => $data['designers']
        ]);

        return redirect()->route('home');
    }
}
