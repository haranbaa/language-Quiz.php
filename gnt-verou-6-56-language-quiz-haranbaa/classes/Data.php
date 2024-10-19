<?php

class Data
{
    // This will provide the data you need
    // No need to change any logic here - only data (to add or update words)
    // This is a common pattern in software development - separating logic from data
    public static function words(): array
    {
        return [
            'Bonjour' => 'Good morning',
            'Bonsoir' => 'Good evening',
            'Merci' => 'Thank you',
            'Merci beaucoup' => 'Thank you very much',
            'S\'il vous plaît' => 'Please',
            'Comment ça va ?' => 'How are you?',
            'Ça va' => 'I\'m fine',
            'Excusez-moi' => 'Excuse me',
        ];
    }
}