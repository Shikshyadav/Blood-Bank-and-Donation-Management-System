<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request</title>
  <link rel="stylesheet" href="request1.css">
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
            <li><a href="admin.php" class="button" style="margin-left: 30px;">Request Blood</a></li>
          </b>
        </ul>
      </div>
    </nav>
  </div>
  <br><br><br><br><br><br>
  <div class="bg-image" style="background-image: url(girl.jpg); height: 100%; width: 100%;"></div>
  <div>
    <h1>Request Blood</h1>
  </div>
  <div class="mainbody">

    <div class="img" style="display: inline-block;">
      <img src="donate1.jpg" height="400" width="350">
    </div>
    <div class="outerbox" style="display: inline-block;">
    <form action="insert2.php" name="formfill" method="POST" onsubmit="return validation()">
        <span class="title"> <b>Blood Request Form</b></span><br>
        <input type="text" name="Full_Name" placeholder="Name" required><br>
        <input type="tel" name="Phone" placeholder="Phone" required><br>
        
        <input type="email" name="Email" placeholder="Email" required><br>
        <textarea name="Note" id="note" cols="43" rows="4" placeholder="Note"></textarea>     
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
        <input type="submit" value="Request" name="submit">
        <a href="admin.php"><input type="button" value="View Record" name="View"></a>

        
        </center>
       
      </form>
    </div>
    <script>
      function validation() {
        var x=document.formfill.Email.value;
        var atpos=x.indexOf('@');
        var dotpos=x.lastIndexOf('.');
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
        else if((document.formfill.Phone.value=="")||(document.formfill.Phone.value.length!=10)){
            alert("Please enter valid contact number!");
            document.formfill.Phone.focus();
            return false;
        }
        else if(document.formfill.Addreess.value==""){
            alert("Please provide valid address");
            document.formfill.Addreess.focus();
            return false;
        }
        else if(document.formfill.Note.value==""){
            alert("Please provide valid address");
            document.formfill.Note.focus();
            return false;
        }
        alert("Thank You! Your Request has been submitted. We will get back to you soon!");
        return true;
    }
  </script>
  </div>
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
