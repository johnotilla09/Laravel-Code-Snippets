<?php 

// Dependency Injection
public function index(Request $request) {
    dd($request); // This is a dependency  injection request

    return view('carList.index', [
        'heading' => 'Latest Cars List',
        'carList' => CarList::all()
    ]);
} 

// Request Helper
public function index() {
    dd(request()); // This is a request helper

    return view('carList.index', [
        'heading' => 'Latest Cars List',
        'carList' => CarList::all()
    ]);
} 

?>