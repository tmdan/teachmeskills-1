<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\SubscribeSubscriptionRequest;
use App\Mail\SubscribeEmail;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function subscribe(SubscribeSubscriptionRequest $request)
    {
        $subscriber = Subscription::create($request->validated());

        Mail::to($subscriber)->send(new SubscribeEmail($subscriber));

        return redirect()->back()->with('status', 'Проверьте вашу почту');
    }

    public function verification($token)
    {
        $subscriber = Subscription::where('token', $token)->firstOrFail();
        $subscriber->token = null;
        $subscriber->save();

        return redirect('/')->with('status', "Ваша почта подтверждена!");
    }
}
