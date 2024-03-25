<?php 
    
    ///MySQLi
  //connect to database
  $conn =mysqli_connect('localhost','user','123','kh');
  //cheack connection
  if(!$conn){
    echo 'connection error: '. mysqli_connect_error();
  }