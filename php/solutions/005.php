<?php

/**
 * More or less, the game
 * 
 * Generate a random number between 1 and 100.
 * Allow the user to guess the number with an input
 * Display a message saying if it's more or less than the number entered
 * If the number entered is equal then display a success message "Congrats, you found the number..."
 * 
 * Bonus: Display on the success message, how many attempts the user did before finding the right number.
 * 
 */

?>

<h3 class="px-4 text-2xl">More or less</h3>
<h4 class="px-4 mb-4 text-sm text-gray-400 uppercase font-bold">The game</h3>

<form method="POST" action="app">

    <div class="p-4">
        <input type="number" min="0" max="100" class="bg-gray-200 p-2 w-64 focus:outline-none" name="number" placeholder="Try to guess the number..." required />
    </div>

    <div class="p-4">
        <button type="submit" class="bg-gray-800 px-4 py-2 text-white focus:outline-none">Guess</button>
    </div>

</form>

<!-- Treatment and display the message -->
<?php
    function resetGame() {
        if (isset($_SESSION['guess']))
            unset($_SESSION['guess']);

        if (isset($_SESSION['attempts']))
            unset($_SESSION['attempts']);
    }

    $message = '';
    $color = 'white'; // default color

    if (! isset($_SESSION['guess']))
        $_SESSION['guess'] = rand(0, 100);

    if (! isset($_SESSION['attempts'])) 
        $_SESSION['attempts'] = 0;

    if (isset($_POST['number'])) {
        if ($_POST['number'] > $_SESSION['guess']) {
            $message = "It's less";
            $color = "red";
            $_SESSION['attempts']++;
        }
            
        if ($_POST['number'] < $_SESSION['guess']) {
            $message = "It's more";
            $color = "red";
            $_SESSION['attempts']++;
        }
            
        if ((int) $_POST['number'] === $_SESSION['guess']) {
            $message = "Congrats, you found the right number in {$_SESSION['attempts']} attempts";
            $color = "green";

            resetGame();
        }
    }

    if ($message !== '')
        echo "<div class=\"p-4 bg-$color-200 text-$color-800\">$message</div>";

?>