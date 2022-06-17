<?php

function not_plus ($num1,$num2){
    return $num1 / $num2;
}



if(isset($_POST['result'])){
    $num1 = $_POST['fir_num'];
    $num2 = $_POST['sec_num'];

    echo "Your result is ".not_plus($num1,$num2);
}

?>

<html>
    <head>
        <title>Post/Get/Isset</title>
    </head>
    <form action="index.php" method="post">
        <body>
            <label for="">First Number</label>
            <input type="text" name="fir_num" value="<?php  if(isset($_POST['fir_num'])){echo $num1;} ?>" require><br><br>
            <label for="">Second Number</label>
            <input type="text" name="sec_num" value="<?php  if(isset($_POST['sec_num'])){echo $num2;} ?>" require><br><br>
            <input type="submit" name="result" value="Minus">
        </body>
    </form>
</html>