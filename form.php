<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            max-width: 100%;
            color: #2c2d2b;
        }
        .button-container {
            padding: 20px;
            text-align: center;
        }
        button.btn {
            background-color: #ff7a6b;
            border-radius: 3px;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            width: 80%;
        }
        .center-text {text-align: center;}
        .error {color: #ff7a6b;}
        input.text-input, textarea.text-input {
            border-radius: 3px;
            border: 1px solid #eeeeee;
            padding: 5px 0;
            margin: 5px 0 5px;
            width: 100%;
        }
        .panel-container {
            background-color: #4280b8;
            padding: 100px 20px;
        }
        .panel {
            background-color: #ffffff;
            border-radius: 3px;
            border: 1px solid #eeeeee;
            display: block;
            margin: 0 auto;
            max-width: 500px;
            padding: 20px;
            width: 80%;
        }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
<?php
//define variable and set to empty values
$name = $email = $phone = $message = "";
//check if form was submitted
if ($_SERVER["PHP_SELF"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    }
?>
    <div class="panel-container">
        <div class="panel">
            <h2 class="center-text">Send Me a Message</h2>
            <form action="action.php" method="post">
                <label for="name">Name</label>
                <input type="text" class="text-input" name="name" value="<?php echo $name;?>">
                <label for="email">Email</label>
                <input type="email" class="text-input" name="email" value="<?php echo $email;?>">
                <label for="phone">Phone</label>
                <input type="tel" class="text-input" name="phone" value="<?php echo $phone;?>">
                <label for="message">Message</label>
                <textarea class="text-input" name="message" rows="5" cols="40"><?php echo $message;?></textarea>
            <div class="button-container">
                <button class="btn" type="submit" name="submit">Send Me a Message</button>
            </div> 
            </form>
        </div>
    </div>
</body>
</html>