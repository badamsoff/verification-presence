<?php
require_once 'database.php';

$id = $_GET['id'];
$teacher = getTeacher($id);
?>

<!DOCTYPE html> <html> 
    <head> 
        <title>Teacher Details</title> 
        <link rel="stylesheet" href="style.css">
    </head> 

    <style> body { text-align: center; } h1 { margin-bottom: 20px; } div { display: inline-block; text-align: left; margin: 0 auto 10px; width: 50%; } span:first-child { font-weight: bold; width: 30%; display: inline-block; } span + span { width: 60%; display: inline-block; } 
    a { display: block; margin-top: 20px; } </style>
    <body> 
        <h1>Teacher Details</h1> 
        <div> 
            <span>ID:</span> 
            <span><?php echo $teacher['id']; ?></span> 
        </div> 
        <div> <span>Name:</span> 
        <span><?php echo $teacher['name']; ?></span> 
    </div> 
        <div> 
            <span>Hour:</span>
             <span><?php echo $teacher['hour']; ?></span> 
            </div>
             <div>
                 <span>Date:</span> 
                 <span><?php echo $teacher['date']; ?></span>
                 </div>
<a href="index.php">Back to Teacher List</a>

</body> </html>