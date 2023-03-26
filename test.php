<?php

include("vendor/autoload.php");


use Libs\Database\MySQL;

use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL());
$table->insert([

    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "45678654567",
    "address" => "Yangon",
    "password" => "password"

]);


echo "Hello World";


















// use Libs\Database\MySQL;

// $mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");

// print_r($result->fetchAll());


// use Helpers\Auth;

// Auth::check();

// use Helpers\HTTP;

// HTTP::redirect("/index.php","redirect=test");
