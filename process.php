<?php
include_once 'dbconfig.php';
 
  $php_name=$_POST["firstname"];
  $php_password=$_POST["password"];
 
  $query=mysql_query("INSERT INTO ajaxsample(name,password)values('$php_name','$php_password') ");
 
  if($query){
    echo "Your value is inserted successfully kudos";
  }
  else{
    echo "Error in sending your value";
  }
?>