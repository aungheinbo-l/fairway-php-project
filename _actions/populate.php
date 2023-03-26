<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$table = new UsersTable(new MySQL);
$faker = Faker::create();

echo "Started data population... </br>";
for ($i=0; $i < 5; $i++) { 
    
    $table->insert([

        "name" => $faker->name,
        "email" => $faker->email,
        "password" => "password",
        "phone" => $faker->phoneNumber,
        "address" => $faker->address

    ]);

}

echo "Done data population.";
