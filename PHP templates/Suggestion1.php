<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Suggestion-style.css">
    
    <title>Suggestion</title>
</head>
<body>

<form method="post" action="Suggestion1.php">
                <?php include('errors.php'); ?>
                <div class="box1">
    <div class="suggestion-card">
        <div class="suggestion-form">
            <div class="heading">
                <h2>SUGGESTION FORM</h2>
            </div>
        <label for="">SUGGEST YOUR IDEA</label>
        <input type="text" placeholder="Topic for your idea" name="idea" ><br><br>
        <label>DESCRIPTION</label>
        <input type="text" placeholder="Elaborate your ideas" name="des"><br><br>
        <label for="">REPORT ISSUSE / BUG</label>
        <input type="text" placeholder="Report if anything to be changed or corrected" name="bug">
        <button type="submit" class="submit-btn" name="suggest_idea">Submit</button>
    </div>
</div>
    <div class="image"></div>
</div>
</body>
</html>