
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
    <div class="">
        <h1>Register</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Something wrong
            </div>

        <?php endif ?>

    <form action="_actions/create.php" method="post" class="p-5 text-center">
        <div class="mb-2">

            <input type="text" name="name" placeholder="Name" required class="form-control"><br>

        </div>
        <div class="mb-2">

            <input type="email" name="email" placeholder="Email" required class="form-control"><br>

        </div>
        <div class="mb-2">

            <input type="password" name="password" placeholder="Password" required class="form-control"><br>

        </div>
        <div class="mb-2">

            <input type="text" name="phone" placeholder="Phone" required class="form-control"><br>

        </div>
        <div class="mb-2">

            <textarea name="address" id="" cols="30" rows="10" class=" form-control"></textarea><br>

        </div>
        <button class="btn btn-primary mb-2">
            Register
        </button>
        <a href="index.php">Login</a>
    </form>

    </div>
</body>
</html>