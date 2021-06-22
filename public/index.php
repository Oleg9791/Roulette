<?php
include "../vendor/autoload.php";

use Classes\Roulette;
use Classes\ShowRoulette;

$showRoulette = new ShowRoulette(new Roulette(2));
echo $showRoulette->showImage();
echo $showRoulette->showWinner();
