<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show($id)
    {
        $feedbacks = Feedback::where('user_id', $id)->get();

        foreach ($feedbacks as $feedback) {
            dump($feedback->body);
        }
    }

    public function showPublish()
    {
        $feedbacks = Feedback::published()->get();

        foreach ($feedbacks as $feedback) {
            dump($feedback->body);
        }
    }
}
