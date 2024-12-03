<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $level = $_POST['level'];
    $operator = $_POST['operator'];
    $questions = $_POST['questions'];

    $min = $level == 1 ? 1 : 11;
    $max = $level == 1 ? 10 : 100;

    $quiz = [];
    for ($i = 0; $i < $questions; $i++) {
        $num1 = rand($min, $max);
        $num2 = rand($min, $max);
        $quiz[] = ['num1' => $num1, 'num2' => $num2];
    }
}
?>