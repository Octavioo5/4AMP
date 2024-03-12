<?php
// Array of students with their scores
$students = array("bertha" => 8, "jesus" => 9, "pedro" => 6);

// Sort the array in descending order based on values (scores)
arsort($students);

// Store the best student and their score in separate variables
$best_student = key($students);
$best_score = current($students);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Scores</title>
</head>
<body>
    <h1>Student Scores</h1>
    <form action="arreglo.php" method="post">
        <?php
        // Display the students and their scores
        $index = 0;
        foreach ($students as $student => $score) {
            echo "<p>Student $index: $student with a score of $score</p>";
            $index++;
        }
        ?>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <h2>Alumnos ordenado</h2>
    <ul>
        <?php
        // Display the sorted list of students
        foreach ($students as $student => $score) {
            echo "<li>$student</li>";
        }
        ?>
    </ul>
    <h2>Mejor alumno</h2>
    <p>
        <?php
        // Display the best student and their score
        echo "$best_student - $best_score";
        ?>
    </p>
</body>
</html>