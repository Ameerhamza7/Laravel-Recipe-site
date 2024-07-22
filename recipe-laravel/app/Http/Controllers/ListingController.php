<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listing
    public function index() {
        return view('listings.index', [
            'listings' => Recipe::latest()->paginate(6)
   
        ]);
    }

    //show single listing
    public function show(Recipe $listing) {
        return view('listings.show', [
            'listing'=> $listing
        ]);
    }

    //Create form
    public function create(){
        return view('listings.create');
    }

    //Store listing data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('recipes', 'title')],
            'category' => 'required', 
            'ingredient' => 'required', 
            'instruction' => 'required', 
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Recipe::create($formFields);


        return redirect('/')->with('message', 'Recipe added successfully');
    }

    //Edit form
    public function edit(Recipe $listing){
        // dd($listing->title);
        return view('listings.edit', [
            'listing' => $listing]);
    }

    //Update listing data
    public function update(Request $request, Recipe $listing){
        // dd($request->all());

        //Make sure Logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'category' => 'required', 
            'ingredient' => 'required', 
            'instruction' => 'required', 
        ]);
        
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Recipe updated successfully');
    }

    //Delete Listing
    public function destroy(Recipe $listing){
        //Make sure Logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();
        return redirect('/')->with('message', 'Recipe deleted successfully');
    }

    //Manage Listing
    public function manage(){
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

}
