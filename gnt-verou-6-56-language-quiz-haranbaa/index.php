<?php

declare(strict_types=1); // Enforce strict type declarations
ini_set('display_errors', '1'); // Enable error display for debugging
ini_set('display_startup_errors', '1'); // Enable startup error display
error_reporting(E_ALL); // Report all types of errors
//ensure that the necessary class definitions are included and available for use,
require_once 'classes/Data.php'; // Include the Data class
require_once 'classes/LanguageGame.php'; // Include the LanguageGame class
require_once 'classes/Word.php'; // Include the Word class
$game = new LanguageGame(); // Create an instance of LanguageGame
//encapsulate the game logic within the LanguageGame class,
// promoting modularity and separation of concerns.
$game->run(); // Run the game
//run() method in the LanguageGame class is responsible for executing the game logic.
