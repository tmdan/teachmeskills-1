<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function showFeedback($id){
        $feedbacks = Feedback::where('user_id', $id)->get();
        foreach ($feedbacks as $feedback){
            dump($feedback->body);
        };
    }

    public function showPublished()
    {
        $feedbacks = Feedback::published()->get();

        foreach ($feedbacks as $feedback) {
            dump($feedback->body);
        }
    }
}
