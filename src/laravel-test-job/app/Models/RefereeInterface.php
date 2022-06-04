<?php

namespace App\Models;

interface RefereeInterface
{
    function showCard($color);
    function startGame();
    function stopGame();
    function awardFreeKick();
}