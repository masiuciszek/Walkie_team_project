<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Dog;
use Auth;

class ReviewController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('/dogs/show');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
            'dog_id' => 'required'            
        ]);

      
        $review = new Review;
        $review->text = $request->text;
        $review->user_id = Auth::id();
        $review->dog_id = $request->dog_id;
        $review->save();
        $dog = Dog::findOrFail($review->dog_id);
        return redirect(action('DogController@show', $dog->id))->with('success', 'Your review is waiting for approval.');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back();
    }

    public function vote($id)
    { 
        $review = Review::find($id);

        if (\App\Vote::where('user_id', Auth::id())->where('review_id', $review->id)->count() > 0){
            return back()->with('danger', 'You already voted.');
        }
        $request = request();
        $vote = new \App\Vote;
        $vote->user_id = Auth::id();
        $vote->review_id = $review->id;
 
        if ($request->input('up')) {
            $vote->vote = 1;
        } elseif($request->input('down')) {
            $vote->vote = 0;
        }
 
        $vote->save();
        return back();
    }

    public function approved($id)
    {
        $review = Review::findOrFail($id);
        $review->approved = true;
        $review->save();
        return back();
    }
}
