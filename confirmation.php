<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager - Confirmation</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
    <?php include("header.php"); ?>
    <main>
        <h2>Contact Confirmation</h2>
        <p> 
          Thank You, <?php echo $SESSION["fullName"];?> for saving your contact information.
        </p>
        <p>We look forward to working with you.</p>
        
        <p><a href="index.php">Back to Home</a></p>

    </main>
    <?php include ("footer.php"); ?>
</body>
</html>