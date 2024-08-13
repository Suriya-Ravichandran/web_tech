<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your detials</h1>
    <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=htmlspecialchars($_POST['name']);
            $email=htmlspecialchars($_POST['email']);
            echo "Name:" . $name ."<br>";
            echo "Email:" . $email ."<br>";
        }
        else{
            echo "form not submitted";
        }
    ?>
</body>
</html>