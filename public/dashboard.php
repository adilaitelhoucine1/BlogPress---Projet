<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
    session_start(); 
    echo "hello".$_SESSION['author_id'];
     
    ?>
</body>
</html>