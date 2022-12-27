<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function create()
    {
        return view('reviews/create');
    }
    
    public function store(Review $review, ReviewRequest $request)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
}
