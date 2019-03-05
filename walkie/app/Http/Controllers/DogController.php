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
        // $dog = new Dog;
        // $breeds = Breed::pluck('name', 'id');
        $breeds = Breed::all();

        return view('dogs/create_dog', compact(['breeds', 'dogs']));
    }

    protected function validateSave() 
    {
        $this->validate(request(), [
            'breed_id' => 'required',
            'name' => ['required', 'min:2', 'max:50'],
            'age' => 'required',
            'sex' => 'required',
            'description' => ['required', 'min:10', 'max:255'],
        ]);
    }

    public function store(Request $request)
    {
        //NIE WIEM O CO CHODZI ALE JAK TO JEST NIEWYKOMENTOWANE TO NIC Z DODAWANIA PSA NIE DZIALA
        $this->validateSave();

        // $attributes['breed_id'] = auth()->id();
        // Dog::create($attributes);
        // $dog = Dog::create($request->all());
        $dog = new Dog;
        $dog->name = $request->name;
        $dog->age = $request->age;
        $dog->sex = $request->sex;
        $dog->breed_id = $request->breed_id;
        $dog->description = $request->description;
        $dog->image = $request->image;
        $dog->save();

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
        // $breeds = Breed::pluck('name', 'id');
        // dd($dog);
        // dd($id);
        return view('/dogs/edit', compact(['dog', 'breeds']));
    }

    public function update(Request $request, $id)
    {
        $this->validateSave();

        $dog = Dog::findOrFail($id);
        $dog->fill($request->all());
        $dog->save();

        return redirect(action('DogController@index'));
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
        return redirect('DogController@index');
    }
}
