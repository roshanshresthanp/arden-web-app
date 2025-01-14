<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
</head>

<body>
    <div id="wrapper">
        <?php include_once 'include/header.php'; ?>
        <h2>Attempt the quiz</h2>
        <div class="quiz-container">
            <?php
            message();
            ?>

            <!-- <div class="form-container"> -->
            <form id="quizForm" action="controllers/quizController.php" method="POST" onsubmit="return validateQuizForm()">
                <?php
                require_once 'database/connection.php';

                $conn = connectDB();
                $sql = "SELECT * FROM questions ORDER BY id DESC";
                $result = connectDB()->query($sql);
                if ($result->num_rows > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        // echo $i;
                        $id = $row['id'];
                        echo '<h4 style="padding-bottom:20px"> ' . $i . '. ' . $row['question'] . '</h4>';

                        echo '<table border="0" width="100%" style="padding-bottom:25px">';
                        echo '<tr>';
                        echo '<td> a. ' . $row['a'] . '&nbsp<input type="radio" name="correct[' . $id . ']" value="a" >' . '</td>';
                        echo '<td> b. ' . $row['b'] . '&nbsp<input type="radio" name="correct[' . $id . ']" value="b" >' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> c. ' . $row['c'] . '&nbsp<input type="radio" name="correct[' . $id . ']" value="c" >' . '</td>';
                        echo '<td> d. ' . $row['d'] . '&nbsp<input type="radio" name="correct[' . $id . ']" value="d" >' . '</td>';
                        echo '</tr>';
                        echo '</table>';
                    }
                } else {
                    echo "<h4 class='video-title' style='text-align:center;'>No records found in the database.</h4>";
                }

                ?>
                <!-- Submit Button -->
                <button type="submit" class="submit-btn">Submit</button>
                <button type="reset" class="reset-btn">Reset</button>

        </div>

        </form>
        <!-- </div> -->
    </div>

    <script>
        // Form validation 
        function validateQuizForm() {
            const form = document.getElementById('quizForm');
            const questions = form.querySelectorAll('table');
            let isValid = true;

            questions.forEach((question, index) => {
                const inputs = question.querySelectorAll('input[type="radio"]');
                const isAnswered = Array.from(inputs).some(input => input.checked);
                if (!isAnswered) {
                    alert('Please answer question ' + (index + 1));
                    isValid = false;
                }
            });

            return isValid;
        }
    </script>

</body>

</html>