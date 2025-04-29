<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Tqder tdir validation hna ayan
        // W t9der tstorih f DB ola tsiftih Email

        // Daba khassna ghi n3tiw message l user
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
