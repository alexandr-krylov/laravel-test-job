<?php

namespace App\Models;

class Player extends Person implements PlayerInterface
{
    $team;

    function pass()
    {

    }

    function hitGoal()
    {
        $isGoal = [true, false];
        return $isGoal[array_rand($isGoal)];    
    }
}