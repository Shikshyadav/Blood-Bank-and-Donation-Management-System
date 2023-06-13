<!DOCTYPE html>
<html>
<head>
  <title>Admin panel</title>
  <style>
    body {
      background-color: rgb(230, 183, 165);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    
    .container {
      width: 300px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    

    .container input[type="button"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #e49797;
      border-radius: 4px;
      box-sizing: border-box;
      cursor: pointer;
    }
    

  </style>
</head>

<body>  

  <div class="container">
    <h2>View Records</h2>
    <a href="crud.php"><input type="button" value="Donors Record" name="Dview"></a> <br>
    <a href="requestcrud.php"><input type="button" value="Requests Record" name="Rview"></a>
    </form>
  </div>
</body>
</html>