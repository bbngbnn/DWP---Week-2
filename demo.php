<?php

/*
function oddEven()
{
    $num = readline("Enter a number: ");
    $answer = $num % 2 == 0 ? "Even" : "Odd";

    echo $answer;
}


function isPrime($number)
{
    if ($number < 2) {
        return $number . " is not prime number.\n";
    }

    if ($number == 2) {
        return $number . " is a prime number.\n";
    }

    if ($number % 2 == 0) {
        return $number . " is not prime number.\n";
    }

    $sqrtNumber = sqrt($number);
    for ($i = 3; $i <= $sqrtNumber; $i += 2) {
        if ($number % $i == 0) {
            return "$number is not a prime number\n";
        }
    }

    return "$number is a prime number. \n";
}

// prime number
$number = readline("Enter a number: ");

if (!is_numeric($number)) {
    echo "Invalid input";
    exit;
}

$number = (int)$number;

for ($ctr = 0; $ctr <= $number; $ctr++) {
    echo isPrime($ctr);
}

*/


require __DIR__ . 'vendor/autoload.php';
use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use demi\timelog\TimeLog;

$slugify = new Slugify();
echo $slugify.slugify("This is the new sample text");

$uuid = Uuid->uuid4();
echo $uuid.toString();

$faker = Faker\Factory->create();
echo $faker.name();
echo $faker.email();
echo $faker.text();
