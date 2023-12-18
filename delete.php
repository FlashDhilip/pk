<?php
include "db_conn.php";

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the user has confirmed the deletion
    if(isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // User confirmed deletion, proceed with deletion
        $sql = "DELETE FROM `zemo` WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: index.php?msg=Record deleted successfully");
        } else {
            echo "Failed:" . mysqli_error($conn);
        }
    } else {
        // User has not confirmed deletion, show confirmation alert
        echo "<script>
                var confirmDelete = confirm('Are you sure you want to delete this record?');

                if(confirmDelete) {
                    // If user clicks 'OK', redirect with confirmation parameter
                    window.location.href = 'delete.php?id=$id&confirm=true';
                } else {
                    // If user clicks 'Cancel', redirect without confirmation parameter
                    window.location.href = 'index.php?msg=Deletion canceled';
                }
              </script>";
    }
} else {
    echo "Invalid request.";
}
?>