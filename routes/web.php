<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1> hey word </h1>');
});

Route::get('/Post/{id}', function ($id) {
    return response("<h1> Post " . $id . "</h1>");
})->where('id', '[0-9]+');

Route::get('/Post/{id}/{name}', function ($id, $name) {
    //dump($id); //dump, debug and dont stop execution
    //dd($id); //debug and dumb,  depug and stop execution 
    //ddd($id); //debug, die and dumb,  depug and stop execution with more details
    return response("<h1> Post " . $id . " " . $name . "</h1>");
});

Route::get('/search', function(Request $request){
    dd($request);
});

/*
Common Resource routers :
index : Show all listings 
show: Show single listing
create: show the form to create new listing
store: store the new listing
edit: show the form to edit the listing
update: update the listing
destroy: delete teh listing
*/

Route::get('/',[ListingController::class, 'index']);

Route::get('/listings/create',[ListingController::class, 'create']);


Route::post('/listings', [ListingController::class, 'store']);


Route::get('/listings/{listing}', [ListingController::class, 'show']);
