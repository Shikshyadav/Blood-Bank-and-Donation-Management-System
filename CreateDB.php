<?php
$servername="localhost";
$username="root";
$password="";
//create connection
$conn=mysqli_connect($servername,$username,$password);//new mysqli_connect for object oriented
//check connection
if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}
echo"connected successfully";//non object oriented only for mysql

//create database
$sql="CREATE DATABASE ProjectDB";
if(mysqli_query($conn,$sql)){
    echo "database created successfully";
}
else{
    echo"error cresting database:" . mysqli_error($conn);
}
mysqli_close($conn);

?>
