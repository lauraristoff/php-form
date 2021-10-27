<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
Name: <?php echo $name; ?><br>
Email: <?php echo $email; ?><br>
Phone: <?php echo $phone; ?><br>
Message: <?php echo $message; ?><br>
</body>
</html>

