<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Class</title>
</head>
<body>
    <?php 
        require_once 'class/Students.php';

        $student1 = new Students('Abdullah', [90, 85, 60]);
        echo $student1->calculateGrade();
        echo '<br>';
        
        $student2 = new Students('Almamun', [99, 80, 77, 88, 95]);
        echo $student2->calculateGrade();
        echo '<br>';
        
        $student2 = new Students('Prince', [80, 85, 70, 99]);
        echo $student2->calculateGrade();
        echo '<br>';
        
        $student2 = new Students('Mahmud', [53, 80, 99, 89,]);
        echo $student2->calculateGrade();
        echo '<br>';

    ?>
</body>
</html>