<?php 
function ubahRomawi($num){ 
    $n = intval($num); 
    $res = ''; 

    //array angka romawi
    $romanNumber_Array = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($romanNumber_Array as $roman => $number){ 
        //bagi num dengan number untuk mendapat matches
        $matches = intval($n / $number); 

        //tempatkan romawi karakter * $matches
        $res .= str_repeat($roman, $matches); 

        //modulus dari number
        $n = $n % $number; 
    } 

    // return hasil
    return $res; 
} 

$angka = $_POST["angka"];
echo ubahRomawi($angka); 
?>
