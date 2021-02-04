<!DOCTYPE html>
<html leng = "en">
<head>
<meta charset = "UTF-8">
<title> ตัวอย่าง control statement ที่ 4 </title>
</head>
<body>
    <?php
        $a = 76; $b = 16; $c = 56;
        $min = 0;
        if ($a < $b) {
            if ($a < $c) $min = $a;
            else $min = $c;
        }

        else {
            if ($b < $c) $min = $b;
            else $min = $c;
        }

        echo "Three number :  <b>$a,$b,$c</b> </br>";
        echo "Min Value : <b>$min</b> </br>";
    ?>
</body>
</html>