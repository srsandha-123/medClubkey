<!DOCTYPE html>
<html>
<head>
    <title>MedclbKey</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Add CSS styles for the dashboard layout */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content:center;
            align-items: center;
        }
        
        .container {
            width:80%;
            height:100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }
        
        .logo {
            color: #333;
            font-size: 24px;
            text-decoration: none;
        }
        
        .navbar {
            display: flex;
        }
        
        .navbar a {
            margin-left: 10px;
            color: #333;
            text-decoration: none;
        }
        
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        
        .card {
            width:100%;
            background: #fff;
            padding: 100px;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 2rem;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body> 
     <header class="header">
            <a class="logo"> <i class="fas fa-heartbeat"></i> MedclbKey </a>
        
            <nav class="navbar">
                <a href="logout.html">Logout</a>
            </nav>
    </header>
    <div class="container">
       
        
        <div class="card">
            <h1 style="text-align:center; padding-bottom:20px;">Booking Details</h1>
            <?php
            // Assuming you have a database connection, you can fetch the data and display it
            $query = "SELECT name, number, email, date, doctor FROM doctor_booking_details ORDER BY date";
            // Execute the query and fetch the data
            
            // Replace the following lines with your database connection and query execution
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "hospital_database";
            
            $connection = mysqli_connect($host, $username, $password, $database);
            
            if (!$connection) {
                die("Database connection failed: " . mysqli_connect_error());
            }
            
            $result = mysqli_query($connection, $query);
            
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr><th>Name</th><th>Email</th><th>Date</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No recent bookings found.</p>";
            }
            
            // Close the database connection
            mysqli_close($connection);
            ?>
        </div>
    </div>
</body>
</html>
