<?php
include 'conn.php';

    if(isset($_POST['submit']))
{
    $Full_Name = $_POST['Full_Name'];
    $Email= $_POST['Email'];
    $Blood_Group= $_POST['Blood_Group'];
    $Phone= $_POST['Phone'];
    $Gender= $_POST['Gender'];
    $Addreess = $_POST['Addreess'];
    $Age =$_POST['Age'];

    $sql_query= "INSERT INTO DONORS(Full_Name,Email,Blood_Group,Phone,Gender,Addreess,Age) VALUES ('$Full_Name','$Email','$Blood_Group','$Phone','$Gender','$Addreess','$Age')";
    if(mysqli_query($conn,$sql_query))
        {
            echo "Thank You For the contribution :)";
           header("location: HemoGive.php");

                }
    else
        {
            echo "Data failed to insert" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>