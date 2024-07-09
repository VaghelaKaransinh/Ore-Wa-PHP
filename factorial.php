<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
</head>
<body>
</body>
    <form method="POST">
    Enter the Number: <input type="text" name="num"><br/>
    <input type="submit" name="submit" value="submit">    
</form>
<?php

    if(isset($_POST['submit']))
    {
        $fact=1;                            //1         2
        $num=$_POST['num'];                 //5         4
        for($i=$num;$i>0;$i--)              //5;5;5--   4;4;4--
        {
            $fact=$fact * $i;               //1=1*5     5=5*4      20=20*3  60=60*2  120=120*1  now 1--=0;
                                            //0 is not greter than 0
        }
        echo "Factorial of $num is: $fact";
    }
?> 
</body>
</html> 

