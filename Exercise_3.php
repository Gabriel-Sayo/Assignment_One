<? php
        <h1>Finding GCD:</h1 <br><br>
        <br>
    <form action="" method="post">
        Enter 1st Number: <input type="text" name="Num1" ><br><br>
        Enter 2nd Number: <input type="text" name="Num2" ><br><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $Num1 = $_POST['Num1'];
        $Num2 = $_POST['Num2'];

        $min =($Num1 < $Num2) ? $Num1 : $Num2;
        for($i = 1; $i <= $min; $i++)
        {
            if($Num1 % $i == 0 && $Num2 % $i == 0)
            {
            $gcd=$i;
            }
        }
    $max =($Num1 > $Num2) ? $Num1 : $Num2;
        $i = $max;
       while(1)
       {
        if($i % $Num1 == 0 && $i % $Num2 == 0)
        {
            $lcm=$i;
        break;
        }
       
       }
       
        echo "GCD = $gcd";
    }
?>