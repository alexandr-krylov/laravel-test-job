<?php

namespace App\Models;

use App\Models\Stadium;
use App\Models\Team;

class Game
{
    protected Stadium $stadium;
    protected Team $teamL;
    protected Team $teamR;

    function __construct()
    {
        $this->stadium = (new StadiumRepository())->getRandom();
    }
}