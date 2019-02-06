<?php 
if(isset($_POST['databasename'])) {  //this lets us know the form has posted
   // 1. Check for acceptable name
   $name = $_POST['databasename'];
   $name = strtolower($name);       //all lowercase (makes things easier to deal with)
   $name = preg_replace("/[^a-z]/", '', $name);  //get rid of things that aren't letters

   if($name != '') {
       // 2. Create the database
       $mysqli = new mysqli('localhost', 'root', '');

       if ($mysqli->connect_error) {
           throw new Exception("Connect Error ($mysqli->connect_errno) $mysqli->connect_error");
       }
       $query = "CREATE DATABASE `$name`";
       $mysqli->query($query);
       if($mysqli->errno) {
           throw new Exception("Error creating database: $mysqli->error");
           // I am pretty sure this is enough to catch the error of the database already existing
       }
       echo "Database $name created.";
    } else {
       throw new Exception("Invalid name");
    }
}




 ?>