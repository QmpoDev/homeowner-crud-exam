<?php

namespace App\Http\Controllers;

use App\Models\Homeowner;
use Illuminate\Http\Request;

class HomeownerController extends Controller
{

    public function check_success()
    {
        return view('edit_success');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeowners = Homeowner::paginate(10); 
        return view('index', compact('homeowners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('add');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:homeowners,email',
            'phone' => 'required|digits:11',
            'address' => 'required|string|max:500',
            'occupation' => 'required|string|max:255',
        ]);

        
        $homeowner = new Homeowner();
        $homeowner->first_name = $validated['first_name'];
        $homeowner->middle_name = $validated['middle_name'];
        $homeowner->last_name = $validated['last_name'];
        $homeowner->email = $validated['email'];
        $homeowner->phone = $validated['phone'];
        $homeowner->address = $validated['address'];
        $homeowner->occupation = $validated['occupation'];

        // Save the homeowner to the database
        $homeowner->save();

        // Redirect to the success view
        return view('add_success');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homeowner $homeowner, $id)
    {
        $homeowner = Homeowner::find($id);

        return view('edit', compact('homeowner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homeowner $homeowner, $id)
    {

        $homeowner = Homeowner::find($id);
        $request->validate([ 
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:homeowners,email,' . $homeowner->id,
            'phone' => 'required|string|max:11',
            'address' => 'required|string',
            'occupation' => 'required|string|max:255',

        ]);

        $homeowner->first_name = $request->first_name;
        $homeowner->last_name = $request->last_name;
        $homeowner->email = $request->email;
        $homeowner->phone = $request->phone;
        $homeowner->address = $request->address;
        $homeowner->occupation = $request->occupation;

        if ($request->filled('middle_name')) {
            $homeowner->middle_name = $request->middle_name;
        } else {
            $homeowner->middle_name = null;
        }

        $homeowner->save();

        return view('edit_success');
    }

    public function delete_confirm($id)
    {
        $homeowner = Homeowner::find($id); 

        return view('delete_confirm', compact('homeowner'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Homeowner $homeowner, $id)
    {
        $homeowner = Homeowner::find($id);
        
        $homeowner->delete();
        return view('delete_success');
    }
}
