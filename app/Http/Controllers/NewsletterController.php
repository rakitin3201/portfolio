<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Store a newly subscribe resource in storage.
     */
    public function subscribe(Request $request)
    {
        $email = $request->input('email');
        if (Newsletter::where('email', '=', $email)->exists()) {
            return redirect()->back()->with('error', "Vous etes deja inscrit a notre service de newsletter")->withInput();
        } else {
            $newsletter = new Newsletter();
            $newsletter->email = $email;
            $newsletter->save();

            $data = [
                'data' => '$user->pidm',
                'password' => '$user->password'
            ];
            Mail::send('newsletter.succefull_subscribe', $data, function ($message) {
                $message->from('a77272199@gmail.com', 'Adama NIADA');
                $message->sender('adama2mg@gmail.com', 'Adama NIADA');
                $message->to('adama2mg@gmail.com', 'Adama NIADA');
                $message->cc('adama2mg@gmail.com', 'Adama NIADA');
                $message->bcc('adama2mg@gmail.com', 'Adama NIADA');
                $message->replyTo('adama2mg@gmail.com', 'Adama NIADA');
                $message->subject('succeful newsletter subcribe');
                $message->priority(3);
                // $message->attach('pathToFile');
            });
        }

        return redirect()->back()->with('status', 'Successful')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
