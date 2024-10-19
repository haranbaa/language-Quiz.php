<?php

class LanguageGame
{
    private array $words = [];
    // This will store all the Word objects

    public function __construct()
    {
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {  
            // data::words() example: ['Bonjour' => 'Good morning', ]
            $this->words[$frenchTranslation] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function run(): void
    //void means that the function does not return anything
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $submittedWord = $_POST['word'];
            $submittedTranslation = $_POST['translation'];
            // if the user has submitted a word, we will check if the translation is correct
            $wordObject = $this->words[$submittedWord];
            // example: $this->words['Bonjour'] = new Word('Bonjour', 'Good morning'); 
            // and $submittedWord = 'Bonjour' and $wordObject = new Word('Bonjour', 'Good morning');

            if ($wordObject->verify($submittedTranslation)) {
                // if the translation is correct, we will display a success message
                // example: $wordObject->verify('Good morning') returns true
                $message = "Success! Correct translation.";
            } else {
                $message = "Fail! Incorrect translation.";
            }
        } else {
            $randomWord = array_rand($this->words);
            // if the user has not submitted a word, we will display a random word to translate
            // array_rand() function is used to fetch a random key from an array
            $wordObject = $this->words[$randomWord];
            $message = "Translate the word: " . $wordObject->getFrench();
        }

        require 'view.php';
        // we will require the view.php file to display the message and the form
    }
}