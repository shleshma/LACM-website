<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Add your styling here */
        body {
            font-family: 'Inter', sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #333; /* Add border to the table */
        }

        th, td {
            padding: 15px; /* Increase padding to add more space */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .user-info {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        .user-info p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <h2>Welcome, Admin!</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>

        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_messages";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to select data from the table
        $sql = "SELECT userID, name, email, message FROM tbluser";

        // Execute the query
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["userID"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>

</html>
