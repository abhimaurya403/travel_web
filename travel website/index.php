<?php
  $server="localhost";
  $username="root";
  $password="";

  $con=mysqli_connect($server,$username,$password);
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error());
  }
  echo "Successfully connected to database";

  $visitor_name=$_POST['visitor_name'];
  $visitor_email=$_POST['visitor_email'];
  $text=$_POST['text'];
  $number=$_POST['number'];
  $phone=$_POST['phone'];
  $date1=$_POST['date1'];
  $date2=$_POST['date2'];

  $sql="INSERT INTO `Booking`.`form` (`name`, `email`, `whereto`, `noofguests`, `phone`, `arrival`, `leaving`) VALUES ('visitor_name', 'visitor_email', 'text', 'number', 'phone', 'date1', 'date2');";
//   echo $sql;

  if($con->query($sql)==true){
    //   echo "Successfully inserted";
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
?>

