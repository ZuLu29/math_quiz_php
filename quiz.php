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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math quiz</title>
</head>
<body>
    <h1>math quiz</h1>
    <form action="" method="post">
        <?php foreach ($quiz as $index => $q): ?>
            <p>
                <?= $q['num1'] ?> 
                <?= $operator == 'add' ? '+' : ($operator == 'subtract' ? '-' : '×') ?> 
                <?= $q['num2'] ?> = 
                <input type="number" name="answers[<?= $index ?>]" required>
                <input type="hidden" name="quiz[<?= $index ?>][num1]" value="<?= $q['num1'] ?>">
                <input type="hidden" name="quiz[<?= $index ?>][num2]" value="<?= $q['num2'] ?>">
            </p>
        <?php endforeach; ?>
        <input type="hidden" name="operator" value="<?= $operator ?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>