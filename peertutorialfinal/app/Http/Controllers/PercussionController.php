<?php

namespace App\Http\Controllers;
use App\Models\Percussion;
use Illuminate\Http\Request;

class PercussionController extends Controller
{

    public function index()
    {
        $percussions = Percussion::all();
        return view('percussion.index',['percussions' => $percussions]);
    }

    public function create()
    {
        return view('percussion.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Percussion::create($validatedData);

        return redirect('/percussion')->with('message', 'You added a new percussion successfully');
    }

   

    public function edit(Percussion $percussion)
{
    return view('percussion.edit', compact('percussion'));
}

public function update(Percussion $percussion, Request $request)
{
    $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',

        // Add more validation rules as needed
    ]);

    $percussion->update($request->all());

    return redirect('/percussion')->with('message', "You changed to $percussion->brand $percussion->model $percussion->description with a price of $percussion->price it has been updated successfully");
}



// PercussionController.php

public function delete($id)
{
    $percussion = Percussion::find($id);

    if (!$percussion) {
        return redirect()->route('percussion.index')->with('error', 'Percussion not found!');
    }

    try {
        $percussion->delete();
        return redirect()->route('percussion.index')->with('message', 'You deleted percussion list successfully');
    } catch (\Exception $e) {
        // Handle any potential exceptions or errors during deletion
        return redirect()->route('percussion.index')->with('error', 'Error deleting percussion. Please try again.');
    }
}
}

