<!DOCTYPE HTML>
<?
$M1=$_POST['M1'];
echo $M1;
echo "  ";
$N1=$_POST['N1'];
echo $N1;
echo "  ";
$f1=fopen("presstime.txt","r");
$M=fgets($f1);
echo $M;
echo "  ";
fclose($f1);
$f2=fopen("betweentime.txt","r");
$N=fgets($f2);
echo $N;
echo "  ";
fclose($f2);
/*if(($M=="") || ($N="")){
echo "Нет биометрического эталона!";
}
else{*/
$porog=10;
$porog2=30;
$Mlow=$M-$porog;
echo "Mlow=";
echo $Mlow;
echo " ";
$Mhigh=$M+$porog;
$Nlow = $N-$porog2;
$Nhigh = $N+$porog;
if((($M1>=$Mlow) && ($M1<=$Mhigh)) && (($N1>=$Nlow) && ($N1<=$Nhigh))){
echo "Поздравляю! Вы вошли!";
}
else{
echo "Вы не вошли!";
}
//}
?>