<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class FormSessionMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if form data exists in session
        if (Session::has('form_data')) {
            // Check if 5 minutes have passed since the data was stored
            $formTime = Session::get('form_time');
            if (Carbon::now()->diffInMinutes($formTime) >= 5) {
                // Clear the session after 5 minutes
                Session::forget('form_data');
                Session::forget('form_time');
            }
        }

        return $next($request);
    }

    public function terminate($request, $response)
    {
        // Store form data and current time in the session when form is submitted
        if ($request->isMethod('post') && $request->has('your_form_field')) {
            // Store form data in session
            Session::put('form_data', $request->all());
            Session::put('form_time', Carbon::now());
        } else {
            // Clear the session when form is not submitted
            Session::forget('form_data');
            Session::forget('form_time');
        }
    }
}
