<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Kntin;
use App\Models\User;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function upload()
    {
        $review = Review::get();
        return view('review', ['reviews'=>$review]);
        $kntins = Kntin::all();
        return view('review', compact('kntins'));
        $users = User::all();
        return view('review', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function proses_upload(Request $request, $kantinID){
    $kntin = Kntin::find('$kantinID');

    $review = new Review;
    $review->review = $request->review;
    $review->likes = $request->likes;

    $kntin->review()->save($review);
        
    
    Review::create(
        [
            'kantinID' => $request -> kantinID,
            'userID'=> $request->userID,
            'review' => $request->review,
            'likes'=> $request->likes
        ]);
    /*
    $this->validate($request, [
            'kantinID' => 'required',
            'userID' => 'required',
            'review' => 'required',
            'likes' =>'required',
        ]);

    Review::create(
        [
            'kantinID' => $request -> kantinID,
            'userID'=> $request->userID,
            'review' => $request->review,
            'likes'=> $request->likes,
        ]);*/
    return redirect() ->back();
     
    }
   



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
