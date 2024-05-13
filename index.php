<?php

require("./header.php");

$firstName = "Tanguy";
$age = 69;
$age = 212;
define("BIRTH_CITY", "Meudon");
$welcome = "<p>Bienvenue, " . $firstName . " ! ";
$welcome .= "Vous avez " . $age . " ans et êtes né à " . BIRTH_CITY . ".</p>";
echo $welcome;

$students = ["Ethan", "Marc", "Appoline", "Chaû"];
echo $students[1];
$students = [
    [
        "firstName" => "Eladji",
        "lastName" => "Fofana",
        "age" => 19
    ],
    [
        "firstName" => "Paul",
        "lastName" => "Bellanger",
        "age" => 19
    ],
    [
        "firstName" => "Cosmo",
        "lastName" => "Chevalier",
        "age" => 1
    ],
];

echo "<pre>";
print_r($students);
echo "</pre>";

foreach ($students as $student) {
    echo "{$student["firstName"]} {$student["lastName"]} a {$student["age"]} ans.<br>";
}

?>
<?php
require("./footer.php");
?>