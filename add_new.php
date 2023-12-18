<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
        $reported = $_POST['reported'];
        $date = $_POST['date'];
        $role = $_POST['role'];
        $incident_no = $_POST['incident_no'];
        $incident_type = $_POST['incident_type'];
        $incident = $_POST['incident'];
        $location = $_POST['location'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $about = $_POST['about'];
        $about_action = $_POST['about_action'];


        $sql= "INSERT INTO `zemo`(`id`, `reported`, `date`, `role`, `incident_no`, `incident_type`, `incident`, `location`, `state`, `city`, `zip`, `about`, `about_action`) VALUES 
        (NULL,'$reported','$date','$role','$incident_no','$incident_type','$incident','$location','$state','$city','$zip','$about','$about_action')";
        $result = mysqli_query($conn, $sql);
            
             if($result) 
             {
                header ("Location: index.php?msg=New record created successfully");
            }
            else
            {
                echo "Failed:" . mysqli_error($conn);
            }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css" type="text/css">
</head>
<body class="body">
    <p>Incident Template</p>
    <br>
    <br>
    <form action="" method="POST">
            
        <header class="form">
          <div class="datepicker">
            <label for="reported">REPORTED BY:</label>
            <input type="text" name="reported" id="reported" required maxlength="15">
          </div>   
          <div>        
            <label for="datePicker">DATE OF REPORT:</label>
            <input type="datetime-local" name="date" id="datePicker" required > 
          </div> 
        </header>
        <header class="form1">
            <div>
            <label for="role">TITLE/ROLE:</label>
            <input type="text" name="role" id="role" required maxlength="15">
            </div>
            <div>
            <label for="incident_no">INCIDENT NO:</label>
            <input type="number" name="incident_no" id="incident_no" required>
            </div>
        </header>
        
        <h2>INCIDENT INFORMATION</h2>
        <footer class="incident">
            <div>
            <label for="incident_type">INCIDENT TYPE:</label>
            <input type="text" name="incident_type" id="incident_type" required maxlength="25">
            </div>
            <div>
            <label for="incident">DATE OF INCIDENT:</label>
            <input type="date" name="incident" id="incident" required>
            </div>
        </footer>
        <div class="location" style="text-align:center";>
            <label for="location">LOCATION:</label>
            <input type="text" id="location" name="location" required maxlength="35">
        </div>
        <footer class="dropdown">
         <div> STATE:
          <select name="state" id="state" required onchange="populateCities()"> 
          <option value="Select State" >Select State</option>
          <option value="Tamilnadu">TAMIL NADU</option>
          <option value="Karnataka">KARNATAKA</option>
          <option value="Kerala">KERALA</option>
          </select>
         </div>  
         <div> CITY:
          <select name="city" id="city" required> 
          <option value="">Select City</option>
          </select>
         </div>   
         <div >
         <label for="zip">ZIP CODE:</label>
         <input type="number" id="zipCodeInput" name="zip" required maxlength="5" oninput="validateZipCode()" 
         autocomplete="off">
         <p id="zipCodeError" style="color: red;"></p>
         </div>
        </footer>
        <div class="textarea">
         <label for="about">INCIDENT DESCRIPTION</label>
         <textarea name="about" id="about" cols="30" rows="9" required></textarea>
         <br>
         <label for="aboutaction">FOLLOW-UP ACTION</label>
         <textarea name="about_action" id="aboutaction" cols="30" rows="7" required></textarea>
        </div>
        <div class="submit" style="text-align: center;">
            <button type="submit" name="submit">ADD INCIDENT</button>
            <button type="reset"> RESET </button>
        </div>
      
    </form>  
    <script src="scriptt.js"></script>
</body>
</html>