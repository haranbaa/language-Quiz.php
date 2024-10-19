<?php

class word
{
    private string $french;
    private string $english;

    public function __construct(string $french, string $english)
    {
        $this->french = $french;
        $this->english = $english;
    }
    public function getEnglish(): string 
    {
        return $this->english;
        
    }
    public function getFrench(): string
    {
        return $this->french;
        // example: $word->getFrench() will return 'bonjour'
    }
    public function verify(string $translation): bool
    {
        return strtolower($this->english) === strtolower($translation);
    }
        
   // $word = new Word("bonjour", "hello");

// // Example 1: Matching translation
  // echo $word->verify("hello") ? "Match" : "No Match"; // Output: Match

// // Example 2: Matching translation with different case
  // echo $word->verify("HELLO") ? "Match" : "No Match"; // Output: Match

// // Example 3: Non-matching translation
  // echo $word->verify("world") ? "Match" : "No Match"; // Output: No Match

// // Example 4: Matching translation with mixed case
  // echo $word->verify("HeLLo") ? "Match" : "No Match"; // Output: Match

// // Example 5: Non-matching translation with different case
  // echo $word->verify("HELLOO") ? "Match" : "No Match"; // Output: No Match
 }
