<? php      
        <form method ="post">
            Enter First  Number: <input type ="number" name ="num1"/><br><br>
            Enter Second Number: <input type ="number" name ="num2"/><br><br>
                <input type = "Submit" name= "submit" value = "+">
                <input type = "Submit" name= "submit2" value = "-">
                <input type = "Submit" name= "submit3" value = "*">
                <input type = "Submit" name= "submit4" value = "/">
                </form>

                <?php
                if (isset($_POST['submit']))
                {
                    $num1=$_POST['num1'];
                    $num2=$_POST['num2'];
                    $sum = $num1+$num2;
                    echo " ",$sum;
                }
                else if (isset($_POST['submit2']))
                {
                    $num1=$_POST['num1'];
                    $num2=$_POST['num2'];
                    $sum = $num1-$num2;
                    echo " ",$sum;
                }
                else if (isset($_POST['submit3']))
                {
                    $num1=$_POST['num1'];
                    $num2=$_POST['num2'];
                    $sum = $num1*$num2;
                    echo " ",$sum;
                }
                else if (isset($_POST['submit4']))
                {
                    $num1=$_POST['num1'];
                    $num2=$_POST['num2'];
                    $sum = $num1/$num2;
                    echo " ",$sum;
                }
?>
<br>
<form action="Choice.php" method"post">
<br>
<input type="submit" value = "Back">