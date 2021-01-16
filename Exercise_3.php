<? php
    <h1>Finding GCD:</h1 <br><br>
    <br>
    <form action = "Exercise_3.php" method = "post">
            Enter First  Number: <input type ="text" name ="num1"/><br><br>
            Enter Second Number: <input type ="text" name ="num2"/><br><br>
            <input type="submit" name="submit" value="Answer"><br>
            </form>
        </html
     <? php         
    if(isset($_POST['submit']))
    {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

    $min = ($num1 < $num2) ? $num1 : $num2;

    for ($i = 1; $i <= $min; $i++)
      {
        if($num1 % $i == 0 && $num2 % $i == 0)
        {
            $gcd = $i;
        }
      }   
             echo "GCD: " $gcd;
    }
?>
