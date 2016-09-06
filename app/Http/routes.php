<?php

Route::get('api/contacts',function(){

	return App\Contact::latest()->get();

});

Route::patch('api/contacts/{id}',function($id){

	$contact =  App\Contact::findOrFail($id);
	$contact->fill(\Request::all());
	$contact->save();

});

Route::get('api/contacts/{id}',function($id){

	return App\Contact::findOrFail($id);

});

Route::post('api/contacts',function(){

	return App\Contact::create(\Request::all());

});

Route::delete('api/contacts/{id}',function($id){
	App\Contact::destroy($id);
});

Route::get('/', function () {

	return view('welcome');
	
});

