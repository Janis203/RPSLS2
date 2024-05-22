<?php
require_once 'Elements.php';
$elements = [
    new Elements('rock', 'scissors', 'lizard'),
    new Elements('paper', 'rock', 'spock'),
    new Elements('scissors', 'paper', 'lizard'),
    new Elements('lizard', 'spock', 'paper'),
    new Elements('spock', 'scissors', 'rock'),
];
while (true) {
    $gameKey = array_rand($elements);
    $game = $elements[$gameKey];
    $user = trim(strtolower(readline("Enter [rock|paper|scissors|lizard|spock]: ")));
    $userChoice = null;
    foreach ($elements as $element) {
        if ($element->getName() === $user) {
            $userChoice = $element;
            break;
        }
    }
    if ($userChoice == null) {
        echo "Invalid choice" . PHP_EOL;
        continue;
    }
    echo "Game chose: {$game->getName()}" . PHP_EOL;
    if ($game->getName() === $userChoice->getName()) {
        echo "Draw " . PHP_EOL;
    } elseif (in_array($game->getName(), $userChoice->getWin())) {
        exit("You win! {$userChoice->getName()} beats {$game->getName()}");
    } else {
        exit("You lose! {$game->getName()} beats {$userChoice->getName()}");
    }
}