
<?php
        if ($_COOKIE["number"]!=""){
            $a=$_COOKIE["number"];
        }else{
            $a=mt_rand(100000,999999);
            echo 'ssd';
        }

        $b=intval($a);
        echo $b;

        setcookie("number", $a, time()+600);
?>