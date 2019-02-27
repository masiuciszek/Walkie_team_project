<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Dog;

class DogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    
    public function index()
    {
        $dogs = Dog::all();
        
        return view('/dogs/index', compact(['dogs']));
    }

    public function create()
    {
        $dogs = Dog::all();
        $breeds = Breed::all();

        return view('dogs/create_dog', compact(['dogs', 'breeds']));
    }

    public function store(Request $request)
    {
        //NIE WIEM O CO CHODZI ALE JAK TO JEST NIEWYKOMENTOWANE TO NIC Z DODAWANIA PSA NIE DZIALA
        // $attributes = request()->validate([
        //     'breed_id' => 'required',
        //     'name' => ['required', 'min:2', 'max:50'],
        //     'age' => 'required',
        //     'sex' => 'required',
        //     'description' => ['required', 'min:10', 'max:255'],
        // ]);

        // $attributes['breed_id'] = auth()->id();
        // Dog::create($attributes);
        $dogs = Dog::create($request->all());

        return redirect(action('DogController@index'));

    }


    public function show($id)
    {
        $dog = Dog::findOrFail($id);

        return view('/dogs/show', compact('dog'));
    }

    public function edit($id)
    {
        $dog = Dog::findOrFail($id);
        $breeds = Breed::get();
        // dd($dog);
        // dd($id);
        return view('/dogs/edit', compact(['dog', 'breeds']));
    }

    public function update(Request $request, $id)
    {
        $dog = Dog::find($id);
        $dog = $dog->update($request->all());

        return redirect(action('DogController@index'));
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
        return redirect('/dogs');
    }
}
