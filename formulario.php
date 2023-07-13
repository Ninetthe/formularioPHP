<?php 
$email =
$birthdate =
$phoneNumber =
$gender =
$name ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $birthdate = test_input($_POST["birthdate"]);
    $phoneNumber = test_input($_POST["phoneNumber"]);
    $gender = test_input($_POST["gender"]);
    $email = test_input($_POST["email"]);
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

echo "Bienvenida ya estás registrada $name";
echo " En breves momentos recibirás tu confirmación";





?>