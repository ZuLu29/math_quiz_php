<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH QUIZ SETTINGS</title>
</head>
<body>
    <h2>Math Quiz Settings</h2>
    <form action="quiz.php" method="POST">
        <label for="level">Select Level:</label>
            <select name="level" id="level" required>
                <option value="1">Level 1 (1-10)</option>
                <option value="2">Level 2 (11-100)</option>
            </select>
            <br><br>

        <label for="operator">Choose Operator:</label>
        <select name="operator" id="operator" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
        </select>
        <br><br>

        <label for="questions">Number of Questions:</label>
        <input type="number" name="questions" id="questions" min="1" required>
        <br><br>

        <button type="submit">Start Quiz</button>
    </form>
</body>
</html>