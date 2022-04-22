<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        $board = Participant::orderBy('score','desc')->take(5)->get();

        return view('pages.board', compact('board'));
    }
}
