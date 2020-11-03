<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-34-200-72-77.compute-1.amazonaws.com
                          dbname=dec6cnnpb551m6
                          port=5432
                          user=mscadanwunvapm
                          password=c61a80cb7559f9f131577c427abca1c218470de15f12ac8a82c2cd8b10a1f4bb")
                          or die("Connection failed!");
    }

 ?>