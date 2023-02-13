<?php  

declare(strict_types = 1);
include 'includes/autoloader.inc.php';
 
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   
<form  action="includes/calc.inc.php" method="POST">
    <p>My own calculator!</p>
    <input type="number" name="num1" placeholder="First number">
    <select name="oper" >
        <option value="add">Addetion</option>
        <option value="sub">Subtraction</option>
        <option value="div">Division</option>
        <option value="mul">Multiplication</option>
    <input type="number" name="num2" placeholder="First number">
<button type="submit" name="submit">Calculate</button>
    </select>
</form>    

</body>
</html>