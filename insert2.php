<?php
include 'conn.php';

    if(isset($_POST['submit']))
{
    $Full_Name = $_POST['Full_Name'];
    $Email= $_POST['Email'];
    $Blood_Group= $_POST['Blood_Group'];
    $Phone= $_POST['Phone'];
    $Note= $_POST['Note'];
    $Addreess = $_POST['Addreess'];

    $sql_query= "INSERT INTO REQUESTS(Full_Name,Email,Blood_Group,Phone,Note,Addreess) VALUES ('$Full_Name','$Email','$Blood_Group','$Phone','$Note','$Addreess')";
    if(mysqli_query($conn,$sql_query))
        {
            header("location: HemoGive.php");
                }
    else
        {
            echo "Data failed to insert" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>