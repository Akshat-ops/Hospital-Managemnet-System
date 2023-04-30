<?php
$insert = false;
if (isset($_POST['firstName'])) {
    
    $server = "localhost";
    $username = "root";
    $password = "";
    

    
    $con = mysqli_connect($server, $username, $password);

    
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());}
 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $issuefaced = $_POST['issuefaced'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];

 
    $sql = "INSERT INTO `appointment`.`appointment` (`firstName`, `lastName`,`gender`,`email`,`issuefaced`,`phonenumber`,`address`) VALUES ('$firstName','$lastName','$gender','$email','$issuefaced','$phonenumber','$address');";   
    


    if ($con->query($sql) == true) {
    
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

  
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Appointment..</div>
        <div class="content">
            <form action="appointment.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter your name" name="firstName" required>
                    </div>
                    <div class="input-box">
                        <span class="details">last name</span>
                        <input type="text" placeholder="Enter your username" name="lastName" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" name="phonenumber" required>
                    </div>
                    <div class="input-box">
                        <span class="details">issue faced</span>
                        <input type="text" placeholder="describe your condition" name="issuefaced" required>
                    </div>
                    <div class="input-box">
                        <span class="details">address</span>
                        <input type="text" placeholder="enter your current address" name="address" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="m">
                    <input type="radio" name="gender" id="dot-2" value="f">
                    <input type="radio" name="gender" id="dot-3" value="o">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Make an Appointment">
                </div>
            </form>
        </div>
    </div>

</body>

</html>