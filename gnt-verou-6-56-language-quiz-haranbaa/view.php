<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p><?php echo $message; ?></p>
        <?php // message example: "Success! Correct translation." or "Fail! Incorrect translation." ?>
        <a href="index.php">Try another word</a>
    <?php else: ?>
        <form method="POST" action="">
            <label for="translation"><?php echo $message; ?></label>
            <?php // message example: "Translate the word: Bonjour" ?>
            <input type="hidden" name="word" value="<?php echo $wordObject->getFrench(); ?>">
            <?php // example of getFrench() method: $wordObject->getFrench() returns 'Bonjour' ?>
            <input type="text" id="translation" name="translation">
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>