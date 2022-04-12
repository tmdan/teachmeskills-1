<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show($id) {
        $feedbacks = Feedback::where("user_id", $id)->get();
    }
    public function showPublish() {
        $feedbacks = Feedback::Published()->get();
    }
}
