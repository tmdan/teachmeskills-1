<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function show()
    {
        $feedbacks = Feedback:: query()->published()->get();
        foreach ($feedbacks as $feedback) {
            echo $feedback->body . '<br>';
        }
    }

    public function userFeedbacks($userId)
    {
        $feedbacks = Feedback:: where('user_id', $userId)->get();
        foreach ($feedbacks as $feedback) {
            echo $feedback->body . '<br>';
        }
    }
}
