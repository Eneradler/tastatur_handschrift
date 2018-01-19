<!DOCTYPE HTML>
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="img/keyboard.png">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>
    <? $count=0; ?>
    <form action="1.php?from=formTrain" method="post">
      <p><h2>Enter the phrase 5 times</h2></p/>
      <p><h3>The phrase: "hello dear guest"</h3></p/>
      <table>
        <tr>
          <td>Number of times entered:</td>
          <td><input type="text" size="10" value='<? echo $_POST['quantity'] ?>' name="quantity"></td>
        </tr>
        <tr>
          <td>Enter the phrase:</td>
          <td><input type="text" size="50" name="phrase"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="accept" value="Accept"></td>
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
    <p><a href="index.html">Home</a></p>
  </body>
</html>
