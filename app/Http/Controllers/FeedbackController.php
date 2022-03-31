<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function show()
    {
        //$feedbacks = Feedback::where('is_published', true)->first();
        $feedbacks = Feedback::published()->get();
        // return view("feedback.index", ["feedbacks" => $feedbacks]);
        dd($feedbacks);
    }
    public function showFeedbacksOfUserOne(){
        $feedbacks = Feedback::where('user_id', 1)->get();
        dd($feedbacks);
    }
}
