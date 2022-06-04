<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    function index()
    {
        $game = new Game();
        return "game started";
    }
}
