<!DOCTYPE html>
<html leng = "en">
<head>
    <meta charset = "UTF-8">
    <title> ตัวอย่าง Control statement ที่ 5 </title>
</head>
<body>
    <?php
        $Day = "Wednesday";
        $Colour;

        switch ($Day) {
            case "Sunday" : $Colour = "Red"; break;
            case "Munday" : $Colour = "Yellow"; break;
            case "Tuesday" : $Colour = "Pink"; break;
            case "Wednesday" : $Colour = "Green"; break;
            case "Thuesday" : $Colour = "Orange"; break;
            case "Friday" : $Colour = "Blue"; break;
            case "Saturday" : $Colour = "Purple"; break;
        }

        echo "Today have a Good Day </br>";
        echo "Today is $Day and have $Colour Colour";
    ?>
</body>
</html>