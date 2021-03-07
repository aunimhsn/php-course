<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Users</title>
</head>
<body>
    <?php 
        require('User.php');
        $users =  User::getAllUsers();
    ?>
    <div class="flex max-w-7xl mx-auto mt-20">
        <?php foreach($users as $user): ?>
        <div class="shadow-md mx-2">
            <div class="flex flex-col">
                <div>
                    <img src="<?= $user->avatar ?>" class="object-cover h-32 w-full" />
                </div>
                <div class="p-4">
                    <p class="font-bold"><?= $user->firstName . ' ' . $user->lastName ?></p>
                    <p><?= $user->email ?></p>
                </div>
                <div class="py-1 px-4 bg-gray-200 text-right text-xs font-extrabold text-gray-400">
                    <p>#<?= $user->id ?></p>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>