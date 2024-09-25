<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;

class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::all()->map(function($toy) {
            $toy->formatted_price = number_format($toy->price, 2);
            return $toy;
        });
        return view('toys.index', compact('toys'));
    }


    public function create()
    {
        return view('toys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);


        Toy::create($request->all());
        return redirect()->route('dashboard');
    }

    public function edit(Toy $toy)
    {
        return view('toys.edit', compact('toy'));
    }

    public function update(Request $request, Toy $toy)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $toy->update($request->all());

        return redirect()->route('dashboard');
    }


    public function destroy(Toy $toy)
    {
        $toy->delete();
        return redirect()->route('toys.index');
    }
}
