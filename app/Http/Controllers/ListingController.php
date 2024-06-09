<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index(){
        // dd(request('tag'));
        return view('listings.index', [
            'listings'=> Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    } 

    // Show single listing
    public function show(Listing $listing){
        if($listing && $listing->id > 0){
            return view('listings.show', [
                'listing' => $listing
            ]);
        }

        // If listing does not exist or id is not valid, abort with 404
        abort(404);
    }

    // Show create form
    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $form= $request->validate([
            "company" => "required",
            "title" => "required",
            "location" => "required",
            "email" => ["required", 'email'],
            "website" => "required",
            "tags" => "required",
            "description" => "required"
        ]);

        Listing::create($form);

        // Session::flash('message', 'Listing Created');

        return redirect('/')->with('message', 'Job posted successfully!');
    }
}

