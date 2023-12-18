<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCIDENT INFORMATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-4 mb-5" style="background-color: mediumblue"> INCIDENT INFORMATION</nav>
    
    <div class="container">
        <?php
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.' 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>
        
            <table class="table table-hover text-center">
                <thead class="table-dark">
                     <tr>
                                <th scope="col">Id</th>
                                <th scope="col">REPORTED_BY</th>
                                <th scope="col">DATE_OF_REPORT</th>
                                <th scope="col">TITLE/ROLE</th> 
                                <th scope="col">INCIDENT_NO</th> 
                                <th scope="col">INCIDENT_TYPE</th> 
                                <th scope="col">DATE_OF_INCIDENT</th> 
                                <th scope="col">LOCATION</th> 
                                <th scope="col">STATE</th> 
                                <th scope="col">CITY</th> 
                                <th scope="col">ZIP_CODE</th> 
                                <th scope="col">INCIDENT_DESCRIPTION</th> 
                                <th scope="col">ABOUT_ACTION</th>
                                <th scope="col">OPTION</th>
                     </tr>
                </thead>
            <tbody>
                <?php
                include "db_conn.php";
 
                $sql = "SELECT * FROM `zemo`"; 
                $result =mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result))
                {
                              ?>
                              <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['reported']?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['role']?></td>
                                <td><?php echo $row['incident_no']?></td>
                                <td><?php echo $row['incident_type']?></td>
                                <td><?php echo $row['incident']?></td>
                                <td><?php echo $row['location']?></td>
                                <td><?php echo $row['state']?></td>
                                <td><?php echo $row['city']?></td>
                                <td><?php echo $row['zip']?></td>
                                <td><?php echo $row['about']?></td>
                                <td><?php echo $row['about_action']?></td>
                              
                  <td>
                          <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5"></i></a>
                          <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
                    <?php 
                }
                ?>
  </tbody>
</table>

    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>