<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" type="text/css" href="crud.css">

</head>

<body>
  <div>
    <nav class="nav">
      <div class="flex-container">

        <img src="orangered.png" height="60px" width="80px" style="margin-left: 10vh;" alt="logo">
        <ul>
          <b>
            <li><a href="HemoGive.php" style="margin-left: 30vh;">Home</a></li>
          </b>
          <b>
            <li><a href="HemoGive.php" style="margin-left: 20px;">About Us</a></li>
          </b>
          <b>
            <li><a href="HemoGive.php" style="margin-left: 20px;">Why Us?</a></li>
          </b>
          <b>
            <li><a href="HemoGive.php" style="margin-left: 20px; ">Contact Us</a></li>
          </b>
          <b>
            <li><a href="crud.php" class="button" style="margin-left: 30vh;">Donate Records</a></li>
          </b>
          
        </ul>
      </div>
    </nav>
  </div>
  <br><br><br><br><br><br>
    <div>
        <h2>Requests List.</h2>
        <hr>
        <br>

        <table border="1" width="90%">
            <tr class="th">
                <td>id</td>
                <td>Full_Name</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Blood_Group</td>
                <td>Addreess</td>
                <td>Note</td>
                <td>Actions</td>
            </tr>


            <?php

                //database connection
            $server_name= "localhost";
            $username= "root";
            $password= "";
            $database_name = "ProjectDB";

             //create connection
             $conn= mysqli_connect($server_name,$username,$password,$database_name);
                if(!$conn){
                die("Connection Failed: " . mysqli_connect_error());
                 }

                 //read data from database table
                 $sql= "SELECT * FROM REQUESTS";
                 $result= mysqli_query($conn,$sql);

                 if(!$result){
                    die("Invalid query: " . mysqli_connect_error());
                 }

                 while($row= mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[Full_Name]</td>
                    <td>$row[Phone]</td>
                    <td>$row[Email]</td>
                    <td>$row[Blood_Group]</td>
                    <td>$row[Addreess]</td>
                    <td>$row[Note]</td>

                    <td>
                      <a class='btn btn-primary btn-sm'  href='requestedit.php?id=$row[id]'>Edit</a>
                      <a class='btn btn-danger btn-sm'  href='deleterequest.php?id=$row[id]'>Delete</a>

                </tr>";
                 }
            ?>
        </table>

    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <div class="text" style="display: inline-block;">

    <h3><b>Contact info</b></h3>
    <br>
    Address: Khwopa Engineering College,
    <br>
     Libali, Bhaktapur
    <br>
    <br>
    Phone: 9835679854, 01-2638296
    <br>
    <br>
    Email Address: shikshyadav81@gmail.com
    </p>
    </div>
    &nbsp;
    <div class="icon" style="display: inline-block;">
      <a href="#" target="_blank">
        <img src="facebook.png" height="40px" width="40px">
      </a>
      &nbsp;

   <a href="#" target="_blank">
        <img src="instagram.png" height="40px" width="40px">
      </a>
      &nbsp;
      <a href="#" target="_blank">
        <img src="twitter-hlb.png" height="40px" width="40px">
      </a>
      &nbsp;
      <a href="#" target="_blank">
        <img src="linkedin.png" height="40px" width="40px">
      </a>
    
     </div>
    
    <br>
    <hr>
    <P style="margin-top: 20px; margin-bottom: 10px; color: #888;">
       Copyright ©
      <script> 
      document.write(new Date().getFullYear());
      </script>
       | All rights reserved | Privacy Policy 
    </P>

    </div>
                </footer>

</body>

</html>