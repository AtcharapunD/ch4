<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> โปรแกรมคำนวณเกรด </title>
    </head>
    <body>
        <?php
            $num1 = $_GET ["num1"];
            $num2 = $_GET {"num2"};
            $sum = 0;
            
            $n = 0;
            for ($n = $num1 ; $n < $num2 ; $n++) {
                $sum = $sum + $n;
            }
        
            echo "Number 1 : $num1 <br> ";
            echo "Number 2 : $num2 <br> ";
            echo "Sum is :  $sum <br>"
        ?>
    </body>
</html>