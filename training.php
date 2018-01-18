
<?
if (isset($_POST['M'])){
$prstime=$_POST['M'];
$btwntime=$_POST['N'];
$new_file1="presstime.txt";
$new_file2="betweentime.txt";
$f1=fopen($new_file1,"a+");
$f2=fopen($new_file2,"a+");
$d1=fgets($f1);
$d2=fgets($f2);
if(($d1!="")||($d2!="")){
echo "Вы уже прошли режим тренировки! Перейдите к идентификации";
}
else{
fwrite($f1,$prstime);
fwrite($f1,"\r\n");
fwrite($f2,$btwntime);
fwrite($f2,"\r\n");
fclose($f1);
fclose($f2);
}
} 
echo 'Ok';
?>
