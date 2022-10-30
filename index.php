<?php
   $myPDO = new PDO('sqlite:/var/www/database.sqlite');
    $result = $myPDO->query("SELECT LastName FROM Persons");
    //$add = $myPDO->query("Insert Into Persons (LastName) values ('name')");
 foreach($result as $row)
    {
        print $row['LastName'] . "\n";
    }