<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'appointment/dbconnect.php';

    // Enable exception mode for mysqli to handle errors with try-catch
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        // Prepare the insert statement
        $stmt = $conn->prepare("INSERT INTO students (name, email, phone, roll, age, gender, issue) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiss", $name, $email, $phone, $roll, $age, $gender, $issue);

        // Set parameters from POST data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $roll = $_POST["roll"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $issue = $_POST["issue"];

        // Execute the statement
        $stmt->execute();

        // Retrieve the last inserted ID
        $sql2 = "SELECT ID FROM students ORDER BY ID DESC LIMIT 1";
        $result2 = mysqli_query($conn, $sql2);
        $token = mysqli_fetch_assoc($result2);
        echo 'Appointment Successful!  ';
        echo '<br>';
        echo 'Your appointment number is ' . $token['ID'];

    } catch (mysqli_sql_exception $e) {
        // Check for primary key violation (error code 1062)
        if ($e->getCode() == 1062) {
            echo 'Account cannot be created: Duplicate entry for primary key.';
        } else {
            echo 'Account cannot be created due to an error: ' . $e->getMessage();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style2.css" rel="stylesheet">
</head>
<body class="transparent-bg">
</body>
</html>