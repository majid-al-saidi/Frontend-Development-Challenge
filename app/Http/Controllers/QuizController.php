<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function result(Request $request)
    {

        // dd($request);

        $score = 0;

        if ($request->filled('q1')) {
            if ($request->q1 == 2) {
                $score++;
            }
        }
        if ($request->filled('q2')) {
            if ($request->q2 == 4) {
                $score++;
            }
        }
        if ($request->filled('q3')) {
            if ($request->q3 == 3) {
                $score++;
            }
        }
        if ($request->filled('q4')) {
            if ($request->q4 == 2) {
                $score++;
            }
        }
        if ($request->filled('q5')) {
            if ($request->q5 == 2) {
                $score++;
            }
        }
        if ($request->filled('q6')) {
            if ($request->q6 == 1) {
                $score++;
            }
        }
        if ($request->filled('q7')) {
            if ($request->q7 == 3) {
                $score++;
            }
        }
        if ($request->filled('q8')) {
            if ($request->q8 == 1) {
                $score++;
            }
        }
        if ($request->filled('q9')) {
            if ($request->q9 == 1) {
                $score++;
            }
        }
        if ($request->filled('q10')) {
            if ($request->q10 == 1) {
                $score++;
            }
        }
        if ($request->filled('q11')) {
            if ($request->q11 == 1) {
                $score++;
            }
        }
        if ($request->filled('q12')) {
            if ($request->q12 == 1) {
                $score++;
            }
        }

        $participant = Participant::find($request->pid);
        $participant->score = $score;
        $participant->save();
       
        return view('pages.result', compact('participant'));
        
    }
}
