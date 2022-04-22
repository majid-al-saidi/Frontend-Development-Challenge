<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function register(Request $request)
    {

        $participant = new Participant();
        $participant->name = $request->name;
        $participant->score = 0;
        $participant->save();
        $pid = $participant->id;
        $name = $request->name;

        return view('pages.quiz', compact('name' , 'pid'));
    }
}
