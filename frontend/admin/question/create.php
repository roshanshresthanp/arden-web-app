<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../../assets/admin/css/custom.css">
</head>

<body>
    <?php
    include __DIR__ . '/../include/sidebar.php';
    require_once 'database/connection.php';
    ?>

    <!-- Main Content -->
    <div class="main-content">

        <?php
        message();
        ?>
        <!-- Top Bar -->
        <div class="top-bar">
            <h3>Questions</h3>
            <div class="admin-info">
                <a href="<?php echo url('admin/question/show') ?>" class="btn">List question</a>
            </div>
        </div>

        <!-- Add User Form -->
        <div class="form-container">
            <h2>Yoga question</h2>
            <form class="form-control" action="../../controllers/questionController.php " enctype="multipart/form-data" method="POST">
                <!-- Text input -->


                <div class="row">

                    <label for="name">Question</label>
                    <input type="text" name="question" id="name" placeholder="Enter question" required>

                    <div class="column">
                        <label for="a">Option A</label>
                        <input type="text" name="a" id="a" placeholder="Enter option A" required>

                        <label for="b">Option B</label>
                        <input type="text" name="b" id="b" placeholder="Enter option B" required>

                    </div>
                    <div class="column">
                        <label for="c">Option C</label>
                        <input type="text" name="c" id="c" placeholder="Enter option C" required>

                        <label for="d">Option D</label>
                        <input type="text" name="d" id="d" placeholder="Enter option D" required>
                    </div>


                </div>
                <div class="row">
                    <div class="column">
                        <label for="country">Correct Option</label>
                        <select id="country" required name="correct">
                            <option value="a"> A </option>
                            <option value="b"> B </option>
                            <option value="c"> C </option>
                            <option value="d"> D </option>


                        </select>
                    </div>
                    <div class="column">
                        <div class="radio-group">
                            <label>Publish Status</label>
                            <label><input type="radio" name="status" value="1" required> Active</label>
                            <label><input type="radio" name="status" value="0"> Inactive</label>
                        </div>
                    </div>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>