<html>
<head>
<title>Main page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body bgcolor="#AFEEEE">
<? $count=0; ?>
<form action="1.php?from=formTrain" method="post">
<p><h2>������� �������� ����� 5 ���</h2></p/>
<p><h3>�������� �����: "������������ �����"</h3></p/>
<table>
<tr>
<td>���������� ��������� ���:</td>
<td><input type="text" size="10" value='<? echo $_POST['quantity'] ?>' name="quantity"></td>
</tr>
<tr>
<td>������� �����:</td>
<td><input type="text" size="50" name="phrase"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="accept" value="�������"></td>
</tr>
</table>
</form>
<?
if (isset($_POST['accept'])){
$quantity=$_POST['quantity'];
$count+=1;
echo $count;
$phrase=$_POST['phrase'];
$new_file="file.txt";
$f=fopen($new_file,"a+");
fwrite($f,$phrase);
fclose($f);
}
?>
<p><a href="main.html">�� �������</a></p>
</body>
</html>
