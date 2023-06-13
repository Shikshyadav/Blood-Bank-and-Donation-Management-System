<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate</title>
  <link rel="stylesheet" type="text/css" href="donate.css">
  <link rel="icon" href="drop1.jpg">

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
            <li><a href="#about" style="margin-left: 20px;">About Us</a></li>
          </b>
          <b>
            <li><a href="#whyus" style="margin-left: 20px;">Why Us?</a></li>
          </b>
          <b>
            <li><a href="#footer" style="margin-left: 20px;">Contact Us</a></li>
          </b>
          <b>
            <li><a href="donate.php" class="button" style="margin-left: 30vh;">Donate Blood</a></li>
          </b>
          <b>
            <li><a href="request1.php" class="button" style="margin-left: 30px;">Request Blood</a></li>
          </b>
        </ul>
      </div>
    </nav>
  </div>
  <br><br><br><br><br><br>
  <div>
    <h1>Donate Blood</h1>
  </div>
  <div class="mainbody">
    <div class="img" style="display: inline-block;">
      <img src="girl.jpg" height="400" width="450">
    </div>
    <div class="outerbox" style="display: inline-block;">
      <form action="insert.php" name="formfill" method="POST" onsubmit="return validation()">
        <span class="title"> <b>Please send us your detail</b></span><br>
        <input type="text" name="Full_Name" placeholder="Name" required><br>
        <input type="tel" name="Phone" placeholder="Phone" required><br>

        <input type="email" name="Email" placeholder="Email" required><br>
        <input type="number" name="Age" placeholder="Age" required><br>
        <select name="Gender" id="gender" required>
          <option value="Gender">Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <select name="Blood_Group" id="bloodgrp" required>
          <option value="bloodgrp">Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="unknown">Unknown</option>
        </select><br>
        <input type="text" name="Addreess" placeholder="Address"><br>
        <input type="submit" value="Register" name="submit">
       <a href="admin.php"><input type="button" value="View Record" name="View"></a>

        
        </center>
      </form>
    </div>
    <script>
      function validation() {
        var x = document.formfill.Email.value;
        var atpos = x.indexOf('@');
        var dotpos = x.lastIndexOf('.');
        if (document.formfill.Full_Name.value == "") {
          alert("Please enter your Name!");
          document.formfill.Full_Name.focus();
          return false;
        }

        else if ((document.formfill.Email.value == "") || (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)) {
          alert("Please enter valid email!");
          document.formfill.Email.focus();
          return false;
        }
        else if ((document.formfill.Phone.value == "") || (document.formfill.Phone.value.length != 10)) {
          alert("Please enter valid contact number!");
          document.formfill.Phone.focus();
          return false;
        }
        else if (document.formfill.Addreess.value == "") {
          alert("Please provide valid address!");
          document.formfill.Addreess.focus();
          return false;
        }
        else if (document.formfill.Age.value == "") {
          alert("Please enter your age!");
          document.formfill.Age.focus();
          return false;
        }
        alert("Form submitted successfully!");
        return true;

      }
    </script>
    
    
  </div>
  <br><br>

  <br><br>

  <div id="footer">
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

    <br><br>
    <hr>
    <P style="margin-top: 20px; margin-bottom: 10px; color: #888;">
      Copyright ©
      <script>
        document.write(new Date().getFullYear());
      </script>
      | All rights reserved | Privacy Policy
    </P>

  </div>
  </div>

</body>

</html>