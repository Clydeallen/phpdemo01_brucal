<?php 
include 'PHP.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>
    <script src="external.js"></script>
      <a href ="next_page.php"> Go to Next Page</a>
    <h1>Hello World</h1>
    
    <?php echo "<h1>Hello World</h1>"; ?>
    <h3>
        Username: <u id="displayusername"><?php echo $username; ?></u>
        <br>
        UserID: <u id="displayuserID"><?php echo $user_id; ?></u>
        <br>
        Birthday: <u id="displaybirthday"><?php echo $birthday; ?></u>
         <br>
        Age: <u id="displayage"><?php echo $age; ?></u>
          <br>
        Sex: <u id="displaysex"><?php echo $sex; ?></u>
    </h3>
    <button type="button" onclick="greetUser()">Greet User</button>
    
    
</body>
</html>