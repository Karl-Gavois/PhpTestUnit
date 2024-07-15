<?php

function generatePassword($length = 24) {
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = strtoupper($lowercase);
    $numbers = "0123456789";
    $special = "!@#$%^&*()_+";
    $alphabet = $lowercase . $uppercase . $numbers . $special;
    $pass = array();
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

// Exemple d'utilisation
echo generatePassword();




// $age = 17;


// function checkAge($age) {
    
//     if ($age >= 16 && $age < 18) {
//         return "Tu dois être accompagné d'un adulte"; 
//     } 
//     else if ($age >= 18) {
//         return "Tu passes"; 
//     }   
//     else {
//         return "Dégage minus"; 
//     }
// }

// echo "" . checkAge($age);

?>

$