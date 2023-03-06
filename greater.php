<html>
    <body>
        <form method="POST">
            Enter first number :
            <input type="text" name="t1"><br>
            Enter second number : 
            <input type="text" name="t2"><br>
            <input type="submit" value="submit">
        </form>
    </body>
    <?php
    
   
        $t1=(float)$_POST["t1"];
        $t2=(float)$_POST["t2"];
        if($t1>$t2)
        {
            print(" Greater number is :".$t1);
        }
        elseif($t2>$t1)
        {
            print("Greater number is : ".$t2);
        }
        else
        {
            echo"Both are equal";
        }
    
    ?>
</html>