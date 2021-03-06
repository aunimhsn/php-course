<?php require('layout/head.php') ?>

<body>
    <?php require('layout/header.php') ?> <!-- Navbar -->

    <main class="max-w-5xl mx-auto w-full mt-40">
        <p class="text-center">

            <?= "User: {$_GET['user_id']}" ?>
            <?= (isset($_GET['user_id'])) ? "User: {$_GET['user_id']}" : 'User not found...' ?>

        </p>
    </main>

    <?php require('layout/footer.php') ?> <!-- Copyright -->
</body>
</html>