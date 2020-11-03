<?php
    echo "First DB Connection!";

    $db = pg_connect("ec2-3-214-46-194.compute-1.amazonaws.com
                dbname=d6bq1npck5mqga
                port=5432
                user=jgcueqvfawmkuu
                password=e1112f9db8e9077a1835d208a8ffedda8c89c220ae2b5960e76bc38addcf1ed1");
   
    echo "Script Executed!";
?>
