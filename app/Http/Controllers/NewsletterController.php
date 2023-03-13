<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Store a newly subscribe resource in storage.
     */
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

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
