<?php
if(isset($_POST['sub'])){
	$num1=$_POST['first_num'];
	$num2=$_POST['second_num'];
	$result=$_POST['sub'];
	if($result=="+")
		$ans=$num1+$num2;
	else if($result=="-")
		$ans=$num1-$num2;
	else if($result=="x")
		$ans=$num1*$num2;
	else if($result=="/")
		$ans=$num1/$num2;
}?>

<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <form action="calculator.php" method="post">
                First Number: <input name="first_num" value="<?php  if(isset($_POST['first_num'])){echo $num1;} ?>"><br><br>
                Second Number: <input name="second_num" value="<?php  if(isset($_POST['second_num'])){echo $num2;} ?>"><br>
                <input type="submit" name="sub" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="sub" value="x">
                <input type="submit" name="sub" value="/"><br>
                <br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
        </form>
        
    </body>
</html>