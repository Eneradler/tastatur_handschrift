
<?php
    if (isset($_POST['M'])){
	    // Get data from client
        $prstime = $_POST['M'];
        $btwntime = $_POST['N'];
		// Read files of biometric pattern
        $new_file1 = "presstime.txt";
        $new_file2 = "betweentime.txt";
        $f1 = fopen($new_file1, "a+");
        $f2 = fopen($new_file2, "a+");
        $d1 = fgets($f1);
        $d2 = fgets($f2);
		// Error message, if pattern already exists
        if(($d1 != "")||($d2 != "")){
            echo "You have already complete the training mode! Go to the identification";
        }
		// Create pattern if not
        else{
            fwrite($f1,$prstime);
            fwrite($f1,"\r\n");
            fwrite($f2,$btwntime);
            fwrite($f2,"\r\n");
            fclose($f1);
            fclose($f2);
			echo 'Ok';
        }
    } 
?>
