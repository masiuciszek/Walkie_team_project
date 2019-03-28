<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Dog;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class UserController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $date = date('Y-m-d');
        $hour = date('H');

        $prevWalks = Auth::user()->walks()->whereRaw('(`date` < ? or ( `date` = ? and `hour` <= ? ))', [$date, $date, $hour])->orderBy('date')->orderBy('hour')->get();
        $nextWalks = Auth::user()->walks()->whereRaw('(`date` > ? or ( `date` = ? and `hour` > ? ))', [$date, $date, $hour])->orderBy('date')->orderBy('hour')->get();

        $user = User::all();
        $auth = Auth::user();
        return view('user.index', compact('user', 'auth', 'prevWalks', 'nextWalks'));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $auth = Auth::user();
        $user = User::findOrFail($id);
        return view('user.show', compact(['auth', 'user']));
    }


    public function edit($id)
    {
        $auth = Auth::user();
        $user = User::findOrFail($id);
        return view('user.edit', compact(['auth', 'user']));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user = $user->update($request->all());

        return redirect(action('UserController@index'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(action('UserController@index'));
    }

    public function contact($id = null)
    {

        if($id) {
            $dog = Dog::findOrFail($id);
        } else {
            $dogs = Dog::all();
        }
        return view('user/contact', compact('dog','dogs'));
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'dog' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dog' => $request->dog,
            'message' => $request->message
        );
        Mail::to('walkie.mmk@hotmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thank you for contacting us!');
    }
}
