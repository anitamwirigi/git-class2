<?php
$host ='localhost';
$dbname='school_db';
$username='root';
$password ='';

// PDO CONNECTION TO DATABASE
try {
              $connect = new PDO("mysql: host=$host;dbname=$dbname;", $username, $password);
              
              // CATCH ERROR AND DISPLAY
              $connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              // CONNECT SUCCESS MESSAGE
              echo "Connected to Database";

} catch (PDOException $e) {
              echo "Connection to Database Failed:".$e->getMessage();
}
