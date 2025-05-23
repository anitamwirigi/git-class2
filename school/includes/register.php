<?php 
// PROTECT OUR ROUTES IF USER HAS SUBMITED DATA
if ($_SERVER["REQUEST_METHOD"] === "POST"){
              // DATA FROM INPUT FORM
              $fname = $_POST["firstname"];
              $email = $_POST ["email"];
              $uname = $_POST ["username"];
              $pass = $_POST ["password"];

try {
              // connect to DB
              require_once "connect.php";
              // NAMED PLACEHOLDERS
              $stmt =$connect->prepare("INSERT INTO students_form (username,firstname,email,password) VALUES (:fname, :uname, :pass, :email)");
              // HASH PASSWORD
              $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

              // BLIND VALUES
              $stmt->bindParam("fname",$fname);
              $stmt->bindParam(":email",$email);
              $stmt->bindParam(":uname", $uname);
              $stmt->bindParam(":pass", $hashedPassword);
              
              

              $stmt->execute();
              // CLOSED THE DB AND STATEMENT
              $connect = null;
              $stmt = null;
              // SEND LOCATION TO FRONT PAGE
              header("location:../home.php");

              die ();
              //  use if there is a connection created
              // exit ();
}
catch (PDOException $e) {
              die("Query Failed :".$e->getMessage());}
}
else {
                            header("location:../index.html");}
              
