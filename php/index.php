<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>
    <?php
        $firstName = 'John';
        $lastName = 'Doe';
    ?>
    <h1>
        <?php echo "Hello $firstName $lastName" ?> <br/>
        <?= "Hello $firstName $lastName" ?>
    </h1>
</body>
</html>