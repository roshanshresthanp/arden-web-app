<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../../../assets/admin/css/custom.css">
</head>
<body>
 <?php
  include __DIR__ . '/../include/sidebar.php';
  ?>

<!-- Main Content -->
<div class="main-content">  

<?php
message();
?>

    <!-- Top Bar -->
    <div class="top-bar">
        <h3>Yoga Question</h3>
    </div>

    <!-- Add User Form -->
    <div class="form-container">
    <h2>Yoga Question</h2>
    <form class="form-control" action="../../../controllers/questionController.php " enctype="multipart/form-data" method="POST">
    <input type="hidden" name="_method" value="PUT">
        <!-- Text input -->
         <?php 
            $parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
            $id = end($parts);

            // echo $id;

            require_once 'database/connection.php';
            $sql = "SELECT * FROM questions WHERE id = ".$id;
            $result = connectDB()->query($sql);  

            $data = $result->fetch_assoc();
            $question = $data['question'] ?? null;
            $a = $data['a'] ?? null;
            $b = $data['b'] ?? null; 
            $c = $data['c'] ?? null; 
            $d = $data['d'] ?? null; 

            $status = $data['status']?? null;
            $correct = $data['correct'] ?? null; 
            // echo $status;
            // var_dump(($result->fetch_assoc())['title']);


            require_once 'config.php';


            // die($id);
         ?> 
                 <input type="hidden" name=id value="<?php echo $id?>" >

        <label for="question">Question</label>
        <input type="text" name=question id="question" value="<?php echo $question?>" required>

        <div class="row">
            <div class="column">
                <label for="a">Option A</label>
                <input type="text" name="a" id="a" placeholder="Enter option A" value="<?php echo $a?>"  required>

                <label for="b">Option B</label>
                <input type="text" name="b" id="b" placeholder="Enter option B" value="<?php echo $b?>"  required>
            </div>
            <div class="column">
                <label for="c">Option C</label>
                <input type="text" name="c" id="c" placeholder="Enter option C" required value="<?php echo $c?>" >

                <label for="d">Option D</label>
                <input type="text" name="d" id="d" placeholder="Enter option D" required value="<?php echo $d?>" >
            </div>
        </div>
        <div class="row">
                    <div class="column">
                        <label for="country">Correct Option</label>
                        <select id="country" required name="correct">
                            <option value="a" <?php if($correct == 'a') echo "selected" ?> > A </option>
                            <option value="b" <?php if($correct == 'b') echo "selected" ?> > B </option>
                            <option value="c" <?php if($correct == 'c') echo "selected" ?>> C </option>
                            <option value="d" <?php if($correct == 'd') echo "selected" ?>> D </option>


                        </select>
                    </div>
                    <div class="column">
                        <div class="radio-group">
                            <label>Publish Status</label>
                            <label><input type="radio" name="status" value="1" required <?php if($status == '1') echo "checked" ?> > Active</label>
                            <label><input type="radio" name="status" value="0" <?php if($status == '0') echo "checked" ?>> Inactive</label>
                        </div>
                    </div>
                </div>
        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>
</div>
</div>

</body>
</html>
