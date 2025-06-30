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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style2.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
  </head>
  
  <body class="transparent-bg">
    <section class="container reveal">
      <header class="header">Appointment Form</header>
      <form action="insert.php" target='_blank' method="POST" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="name"  placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" name="email"  placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" name="phone"  placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Age</label>
            <input type="number" name="age"  placeholder="Enter age" required />
          </div>
          <div class="input-box">
            <label>Roll no</label>
            <input type="number" name="roll"  placeholder="Enter roll no" required />
          </div>
        </div>
        <br>
        <div class="gender-box flex">
            <h3>Gender</h3>
            <div class="gender">
              <div class="gender">
                <input type="radio" id="check-male" name="gender" value="male" checked />
                <label for="check-male">male</label>
              </div>
              <div class="gender">
                <input type="radio" id="check-female" name="gender" value="female" />
                <label for="check-female">Female</label>
              </div>
              <div class="gender">
                <input type="radio" id="check-other" name="gender" value="other" />
                <label for="check-other">prefer not to say</label>
              </div>
            </div>
          </div>
        <br>
        <div class="input-box address">
          <label>Brief Your Problem</label>
          <br>
          <textarea id="address" name="issue" rows="3" cols="100" placeholder="Enter your problem here "></textarea>
        </div>
        <button>Submit</button>
      </form>
    </section>
    <script src="main.js"></script>
  </body>
</html>