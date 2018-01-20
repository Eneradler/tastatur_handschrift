<!DOCTYPE HTML>
<?php
	// Get data from client
    $M1 = $_POST['M1'];
    $N1 = $_POST['N1'];
	// Open files with biometric patterns und get them
    $f1 = fopen("presstime.txt", "r");
    $M = fgets($f1);
    fclose($f1);
    $f2 = fopen("betweentime.txt", "r");
    $N = fgets($f2);
    fclose($f2);
    // Take two values for the interval
    $porog = 10;
    $porog2 = 30;
	// Calculate interval of biometric pattern
    $Mlow = $M - $porog;
    $Mhigh = $M + $porog;
    $Nlow = $N - $porog2;
    $Nhigh = $N + $porog;
	// Authentication passed if the data from client is in corresponding interval
    if((($M1 >= $Mlow) && ($M1 <= $Mhigh)) && (($N1 >= $Nlow) && ($N1 <= $Nhigh))){
        echo "Congratulations! You have passed!";
    }
    else{
        echo "You have not passed.";
    }
?>