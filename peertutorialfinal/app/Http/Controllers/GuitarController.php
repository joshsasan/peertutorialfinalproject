<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    public function index()
    {
        $guitars = Guitar::all();
        return view('guitar.index',['guitars' => $guitars]);
    }

    public function create()
    {
        return view('guitar.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Guitar::create($validatedData);

        return redirect('/guitar')->with('message', 'You added a new guitar successfully');
    }

   

    public function edit(Guitar $guitar)
{
    return view('guitar.edit', compact('guitar'));
}

public function update(Guitar $guitar, Request $request)
{
    $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',

        // Add more validation rules as needed
    ]);

    $guitar->update($request->all());

    return redirect('/guitar')->with('message', "You changed to $guitar->brand $guitar->model $guitar->description with a price of $guitar->price it has been updated successfully");
}



// GuitarController.php

public function delete($id)
{
    $guitar = Guitar::find($id);

    if (!$guitar) {
        return redirect()->route('guitar.index')->with('error', 'Guitar not found!');
    }

    try {
        $guitar->delete();
        return redirect()->route('guitar.index')->with('message', 'You deleted guitar list successfully');
    } catch (\Exception $e) {
        // Handle any potential exceptions or errors during deletion
        return redirect()->route('guitar.index')->with('error', 'Error deleting guitar. Please try again.');
    }
}
}
