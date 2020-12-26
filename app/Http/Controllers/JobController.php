<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;

class JobController extends Controller
{
    /**
     * Handle Queue Process
     */
    public function processQueue()
    {
        $emailJob = new SendWelcomeEmail();
        $emailJob->delay(Carbon::now()->addMinutes(1));
        dispatch($emailJob);
    }
}
