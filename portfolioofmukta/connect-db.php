<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
*/

 // Database Variables (edit with your own server information)
 $server = 'localhost';
 $user = 'root';
 $pass = 'lict@2';
 $db = 'students';
 
 // Connect to Database
 $connection = mysql_connect('localhost', 'root', 'lict@2', 'students')
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());


?>