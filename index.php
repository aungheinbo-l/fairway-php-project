<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

    <div class="container mt-5">

    <?php if (isset($_GET['suspended'])) : ?>
			<div class="alert alert-warning">
				Account Suspended
			</div>
		<?php endif ?>

        <?php if (isset($_GET['incorrect'])) : ?>
			<div class="alert alert-warning">
				Incorrect email or password
			</div>
		<?php endif ?>

		<?php if (isset($_GET['register'])) : ?>
			<div class="alert alert-info">
				Register successful, please login
			</div>
		<?php endif ?>

    <form action="_actions/login.php" method="post" class="p-5 text-center">
        <!-- <div class="mb-2">

            <input type="text" name="name" placeholder="Name" required class="form-control"><br>

        </div> -->
        <div class="mb-2">

            <input type="email" name="email" placeholder="Email" required class="form-control"><br>

        </div>
        <div class="mb-2">

            <input type="password" name="password" placeholder="Password" required class="form-control"><br>

        </div>
        <button class="btn btn-primary mb-2">
            Login
        </button>
        <a href="register.php">Register</a>
    </form>
    </div>

</body>
</html>