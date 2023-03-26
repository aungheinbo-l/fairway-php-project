<?php

    include("./vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\Auth;
    use Helpers\HTTP;

    $auth = Auth::check();

    $table = new UsersTable(new MySQL);
    $users = $table->getAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div style="float: right">
            <a href="profile.php">Profile</a> |
            <a href="_actions/logout.php" 
            class="text-danger">Logout</a>
        </div>
        <h4>User Table</h4>
        <table class="table table-dark table-striped">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Role</td>
            <td>Actions</td>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->phone ?></td>
                <td>

                    <?php if ($user->role_id === 1) : ?>

                        <span class=" badge bg-success">
                            <?= $user->role ?>
                        </span>

                    <?php elseif ($user->role_id === 2) : ?>

                    <span class=" badge bg-primary">
                        <?= $user->role ?>
                    </span>

                    <?php elseif ($user->role_id === 3) : ?>

                    <span class=" badge bg-danger">
                        <?= $user->role ?>
                    </span>

                    <?php else : ?>

                    <span class="badge bg-secondary">
                        <?= $user->role ?>
                    </span>

                    <?php endif ?>
                    
                </td>
                <td>
                    <div class="btn-group">

                       <?php if ($auth->role_id === 3) : ?>
                        <div>
                            <a href="#" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                                Change Role
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <a href="_actions/role.php?role=1&id=<?= $user->id ?>" class="dropdown-item" href="#">User</a>
                                <a href="_actions/role.php?role=2&id=<?= $user->id ?>" class="dropdown-item" href="#">Manager</a>
                                <a href="_actions/role.php?role=3&id=<?= $user->id ?>" class="dropdown-item" href="#">Admin</a>
                            </ul>
                        </div>

                        <?php endif ?>

                    <?php if ($auth->role_id >= 2) : ?>
                        <?php if($user->suspended) : ?>
                            <a href="_actions/unsuspend.php?id=<?= $user->id ?>"
                            class="btn btn-warning btn-sm"
                            >Ban
                            </a>
                        <?php else : ?>
                            <a href="_actions/suspend.php?id=<?= $user->id ?>"
                            class="btn btn-outline-warning btn-sm"
                            >Active
                            </a>
                          <?php endif ?>

                    <?php endif ?>

                    <?php if ($auth->role_id === 3) : ?>
                            <a href="_actions/delete.php?id=<?= $user->id ?>"
                            class="btn btn-outline-danger btn-sm"
                            >Delete
                            </a>
                    <?php endif ?>
                    </div>
                </td>
            </tr>

        <?php endforeach ?>
        </table>
    </div>
    <script src="./js/bootstrap.bundle.js"></script>
</body>
</html>