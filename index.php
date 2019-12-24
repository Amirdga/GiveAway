<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<form action="" method="post">
<div class="box">
    <h1>GiveAway Seystem</h1>
    <p class="seystem">
      از اعداد بین <input class="number2" type="number" name="number2"> تا <input class="number2" type="number" name="number3">به صورت تصادفی خروجی بده.
    </p>
    <input type="submit" value="شروع کن" name="submit">
    <input type="reset" value="پاک کن" name="submit">
    <div class="boxToBox" style="color: blue">
        <?php
        $number1=$_POST["number1"];
        $number2=$_POST["number2"];
        $number3=$_POST["number3"];
        $submit =$_POST["submit"];

            if (empty($number2) && empty($number3)){
                echo "نباید فرم را خالی بگذارید!";
            }else {
                if ($submit) {
                    echo mt_rand($number2, $number3);

            }
        }

        ?>
    </div>
</div>
</form>
</body>
</html>