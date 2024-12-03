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

