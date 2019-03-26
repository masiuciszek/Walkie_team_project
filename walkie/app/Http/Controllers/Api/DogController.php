<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Dog;
use App\Vote;
use App\Walk;
use App\Review;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DogController extends Controller
{

    public function reviewVote(Request $request, $id)
    {
        // return $request->all();
        $review = Review::find($id);

        $vote = new Vote;
        $vote->user_id = Auth::id();
        $vote->review_id = $review->id;

        if ($request->input('vote') == "+1") {
            $vote->vote = 1;
        } else {
            $vote->vote = 0;
        }

        $vote->save();

        $posetiveVotes = $review->positiveVotes();
        $negativeVotes = $review->negativeVotes();

        // return response()->json($review->positiveVotes());
        return response()->json(compact('posetiveVotes','negativeVotes'));



    }


    public function bookTime(Request $request, $id){

        // $date = $request->input('date', date('Y-m-d'));
        // $dog = Dog::findOrFail($id);
        // $walks = Walk::where('dog_id', $dog->id)->day($date)->get();

        // if (Gate::allows('admin')){
        //     $reviews = Review::where('dog_id', $dog->id)->get();
        // }else{
        //     $reviews = Review::where('dog_id', $dog->id)->where('approved', true)->get();
        // }

        // $hours_taken = [];
        // foreach ($walks as $walk) {
        //     $hours_taken[$walk->hour] = true;
        // }

        // $hours = Walk::getHoursForDay($date);
        // return response()->json(compact('walks','dog', 'walks'));
        // return redirect(action('DogController@show', $dog->id))->with('success', 'Thank you! Information about your next walk are already in your profile!');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();
        return response()->json($dogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
