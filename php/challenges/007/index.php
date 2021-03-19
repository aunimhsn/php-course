<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Calculator</title>
</head>
<body>
    <?php require('Calculator.php'); ?>

    <!-- Your calculator here -->
    <div class="flex max-w-7xl mx-auto mt-20">
        <form method="POST" action="">
            <input type="number" name="a" />
            <input type="number" name="b" />

            <button type="submit">Add</button>
            <button type="submit">Substract</button>
            <button type="submit">Multiply</button>
            <button type="submit">Divide</button>
        </form> 
    </div>
</body>
</html>