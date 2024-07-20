<?php
$server_name = "localhost";
$username = "root";
$password = ""; // Replace with your database password
$dbname = "hospital_database";

$conn = mysqli_connect($server_name, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
$popup_message = "";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];

    $query = "INSERT INTO doctor_booking_details (name,number,email, date,doctor)
   VALUES ('$name', '$number', '$email','$date','$doctor')";

    if (mysqli_query($conn, $query)) {
        $popup_message = "New details entered successfully";
        header("Location: booking.php");
    } else {
        $popup_message = "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>MedclbKey</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }
        
        .message-box {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #428bca;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .back-button:hover {
            background-color: #3071a9;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Booking Successful!</h1>
        <p>Thank you for booking. Your details have been successfully registered.</p>
        
        <a href="index.html" class="back-button">Back</a>
    </div>
</body>
</html>

