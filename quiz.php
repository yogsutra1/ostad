<?php

$questions = [
    ['question' => 'what is 2+2', 'correct' => '4'],
    ['question' => 'what is the capital of bd', 'correct' => 'dhaka'],
    ['question' => 'who wrote agnibina', 'correct' => 'nazrul'],
];

$answers = [];

foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = readline("Your Answer: ");
}

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        echo "User Answer: " . $answers[$index] . "\n";
        echo "Correct Answer: " . $question["correct"] . "\n";
        if ($answers[$index] == $question['correct']) {
            $score++;
        }
    }
    return $score;
}

$myScore = evaluateQuiz($questions, $answers);

echo "\nYou scored $myScore out of " . count($questions) . ".\n";

if ($myScore == count($questions)) {
    echo "Excellent Job!\n";
} elseif ($myScore >= 1) {
    echo "Good effort!\n";
} else {
    echo "Your result is fail, Try Later\n";
}
