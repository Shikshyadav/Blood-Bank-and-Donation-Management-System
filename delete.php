
<?php

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  include 'conn.php';

  // Check if the user confirmed the deletion
  if (isset($_GET["confirm"]) && $_GET["confirm"] === "true") {
    // Perform the deletion
    $sql = "DELETE FROM DONORS WHERE id=$id";
    $result = mysqli_query($conn, $sql);
  } else {
    // Display the confirmation alert box
    echo '<script>
            var confirmDelete = confirm("Do you really want to delete the record?");
            if (confirmDelete) {
                                                                  // Redirect with confirmation flag
              window.location.href = "delete.php?id=' . $id . '&confirm=true";
            } else {
                                                        // Redirect without confirmation flag
              window.location.href = "crud.php";
            }
          </script>';
    exit;
  }
}

header("location: crud.php");
exit;

?>


<!--using the html code-->
<!--?php

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  include 'conn.php';

  if (isset($_GET["confirm"]) && $_GET["confirm"] === "true") {
    // Perform the deletion
    $sql = "DELETE FROM DONORS WHERE id=$id";
    $result = mysqli_query($conn, $sql);
  } else {
    // Display the confirmation alert box
    echo '
      <div>
        <p>Do you really want to delete the record?</p>
        <form action="delete.php" method="GET">
          <input type="hidden" name="id" value="' . $id . '">
          <input type="hidden" name="confirm" value="true">
          <input type="submit" value="Yes">
        </form>
        <form action="crud.php" method="GET">
          <input type="submit" value="No">
        </form>
      </div>';
    exit;
  }
}

header("location: crud.php");
exit;

?-->

