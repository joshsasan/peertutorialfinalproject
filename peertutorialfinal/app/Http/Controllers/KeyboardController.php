<?php

namespace App\Http\Controllers;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index()
    {
        $keyboards = Keyboard::all();
        return view('keyboard.index',['keyboards' => $keyboards]);
    }

    public function create()
    {
        return view('keyboard.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Keyboard::create($validatedData);

        return redirect('/keyboard')->with('message', 'You added a new keyboard successfully');
    }

   

    public function edit(Keyboard $keyboard)
{
    return view('keyboard.edit', compact('keyboard'));
}

public function update(Keyboard $keyboard, Request $request)
{
    $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',

        // Add more validation rules as needed
    ]);

    $keyboard->update($request->all());

    return redirect('/keyboard')->with('message', "You changed to $keyboard->brand $keyboard->model $keyboard->description with a price of $keyboard->price it has been updated successfully");
}





public function delete($id)
{
    $keyboard = Keyboard::find($id);

    if (!$keyboard) {
        return redirect()->route('keyboard.index')->with('error', 'Keyboard not found!');
    }

    try {
        $keyboard->delete();
        return redirect()->route('keyboard.index')->with('message', 'You deleted keyboard list successfully');
    } catch (\Exception $e) {
        // Handle any potential exceptions or errors during deletion
        return redirect()->route('keyboard.index')->with('error', 'Error deleting keyboard. Please try again.');
    }
}
}

