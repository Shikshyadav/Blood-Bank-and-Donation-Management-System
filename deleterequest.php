<?php

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  include 'conn.php';

  // Check if the user confirmed the deletion
  if (isset($_GET["confirm"]) && $_GET["confirm"] === "true") {
    // Perform the deletion
    $sql = "DELETE FROM Requests WHERE id=$id";
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
              window.location.href = "requestcrud.php";
            }
          </script>';
    exit;
  }
}

header("location: requestcrud.php");
exit;

?>