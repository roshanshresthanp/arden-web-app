<?php
session_start();
require '../auth/auth.php';
require_once '../database/connection.php';

$conn = connectDB();
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
$userAnswers = isset($_REQUEST['correct']) ? $_REQUEST['correct'] : [];

    $score = 0; // Initialize score
    $totalQuestions = $result->num_rows;

    // Process each question and calculate the score
    while ($row = $result->fetch_assoc()) {
        $questionId = $row['id'];
        $correct = $row['correct'];
        $userAnswer = isset($userAnswers[$questionId]) ? $userAnswers[$questionId] : 'No Answer';

        if ($userAnswer == $correct) {
            $score++;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="../assets/customer/css/custom.css">
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .correct { color: green; }
        .incorrect { color: red; }
        .score {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }

    </style>
</head>
<body>

<div id="wrapper">
<h2>Quiz Results</h2>
<div class="score">Your Score: <?php echo $score . '/' . $totalQuestions; ?></div>
<table>
    <tr>
        <th>SN</th>
        <th>Question</th>
        <th>Your Answer</th>
        <th>Correct Answer</th>
        <th>Remark</th>
    </tr>

    <?php
    // Reset result pointer and fetch again to display results
    $result->data_seek(0);

    if ($totalQuestions > 0) {
        $sn = 1;
        while ($row = $result->fetch_assoc()) {
            $questionId = $row['id'];
            $correct = $row['correct'];
            $userAnswer = isset($userAnswers[$questionId]) ? $userAnswers[$questionId] : 'No Answer';

            $status = ($userAnswer == $correct) ? 'Correct' : 'Incorrect';
            $statusClass = ($userAnswer == $correct) ? 'correct' : 'incorrect';

            echo "<tr>";
            echo "<td>".$sn++."</td>";
            echo "<td>{$row['question']}</td>";
            echo "<td>" . ($userAnswer != 'No Answer' ? $userAnswer . '. ' . $row[$userAnswer] : 'No Answer') . "</td>";
            echo "<td>" . $correct . '. ' . $row[$correct] . "</td>";
            echo "<td class='{$statusClass}'>{$status}</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No questions found in the database.</td></tr>";
    }

    $conn->close();
    ?>

</table>

<div class="button-container">
    <a href="javascript:history.back()" class="back-btn">Back</a>
    <a href="<?php echo url('/quiz'); ?>" class="retry-btn">Retry</a>

</div>        </div>
        <!-- </div> -->
</body>
</html>
