<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Dog;
use App\Walk;
use Auth;
use Illuminate\Validation\Rule;

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


    public function show($id, Request $request)
    {
        $date = $request->input('date', date('Y-m-d'));

        $dog = Dog::findOrFail($id);
        $walks = Walk::where('dog_id', $dog->id)->day($date)->get();
        $hours_taken = [];
        foreach ($walks as $walk) {
            $hours_taken[$walk->hour] = true;
        }
        $hours = Walk::getHoursForDay($date);

        return view('/dogs/show', compact('dog', 'date', 'hours_taken', 'hours'));
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
        return redirect()->back();
    }

    public function walk(Request $request, $dog_id)
    {
        $dog = Dog::findOrFail($dog_id);
        $this->validate($request, [
            'dog_id' => 'required|exists:dogs,id',
            'hour' => [
                'required',
                Rule::in(Walk::getHoursForDay($request->input('walking'))),
                Rule::unique('walks')->where(function ($query) use ($dog_id, $request) {
                    return $query->where('dog_id', $dog_id)
                        ->where('user_id', Auth::id());
                })
            ]
            ], [
                'dog_id.exists' => 'The selected dog doesn\'t exist',
                'hour.unique' => 'This hours is already taken'
            ]);

        $walk = new Walk;
        $walk->date = $request->input('walking');
        $walk->hour = $request->hour;
        $walk->dog_id = $request->dog_id;
        $walk->user_id = Auth::id();
        $walk->save();
        return redirect(action('DogController@show', $dog->id));
    }
}

