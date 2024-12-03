<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quiz = $_POST['quiz'];
    $answers = $_POST['answers'];
    $operator = $_POST['operator'];

    $score = 0;

    foreach ($quiz as $index => $q) {
        $num1 = $q['num1'];
        $num2 = $q['num2'];
        $correctAnswer = $operator == 'add' ? $num1 + $num2 :
                         ($operator == 'subtract' ? $num1 - $num2 : $num1 * $num2);

        if ($answers[$index] == $correctAnswer) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
</head>
<body>
    <h1>Quiz Results</h1>
    <p>Your Score: <?= $score ?>/<?= count($quiz) ?></p>
    <a href="index.php"><button>Try Again</button></a>
</body>
</html>