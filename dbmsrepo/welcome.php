<?php
    session_start();
    if(isset($_SESSSION['loggedin'])==true){
        header("location: login/login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://unpkg.com/scrollreveal"></script>
<script>
    function showtextarea(studentroll){
        document.getElementById("textAreaContainer").style.display="block";
        document.getElementById("studentroll").value=studentroll;
    }
    function hidetextarea(){
        document.getElementById("textAreaContainer").style.display="none";
    }
    </script>
    <title>Document</title>
    
</head>

<body class="transparent-bg">
    <br><br>
    <header class="header" id="header">
        <nav class="nav ">
            <a href="#" class="nav__logo">
                <i class="ri-hospital-fill"></i>
                <span>HealthCare</span>
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <div class="button"><a href="medicine/medic.php" class="nav__link">Medication Stock</a></div>
                    </li>
                    <li>
                        <div class="button"><a href="login/logout.php" class="nav__link">Logout
                            </a></div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br>
    <br><br>
    <section class="main_table">
        <div class="heading container reveal flex">
        <h2 >Appointments</h2>
        </div>
        <div class="appoint_table">
            <?php
            // Step 1: Connect to the database
            $server = 'localhost:3307';
            $username = 'root';
            $password = '12345789';
            $dbname = 'users';
            
            $conn = mysqli_connect($server, $username, $password, $dbname);
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // Step 2: Write and execute a query
            $appoin = "SELECT * FROM students";
            $result = mysqli_query($conn, $appoin);
            
            // Step 3 & 4: Fetch and display the data
            if (mysqli_num_rows($result) > 0) {
                echo "<table class=\"table_des container\" border='1'>";
                echo "<tr class=\"test\" \"reveal\">
                    <th class=\"test\">Name</th><th class=\"test\">Roll Number</th><th class=\"test\">Age</th> <th class=\"test\">Gender</th><th class=\"test\">Issue</th><th class=\"test\">Prescription</th>
                </tr>";
            
                // Fetch each row and output the data in HTML
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class=\"test\" \"reveal\">";
                    echo "<td class=\"test\">" . $row['name'] . "</td>";
                    echo "<td class=\"test\">" . $row['roll'] . "</td>";
                    echo "<td class=\"test\">" . $row['age'] . "</td>";
                    echo "<td class=\"test\">" . $row['gender'] . "</td>";
                    echo "<td class=\"test\">" . $row['issue'] . "</td>";
                    echo "<td class=\"test\"><button type='button' onclick=\"showtextarea(".$row['roll'].")\">Add Prescription</button></td>";
                    
                    echo "</tr>";
                }            
                echo "</table>";
               
                    echo '<div class="pres" id="textAreaContainer" style="text-align:center ;display:  none; margin-top: 50px;">
                <form action="data/log.php" method="POST">
                <label for="textContent"><h3 style="color:rgb(3, 3, 64);">Enter your comment:</h3></label><br>
                <textarea id="textContent" name="textContent" rows="4" cols="50" required></textarea><br><br>
                
                    <!-- Submit button for form -->
                    <button  class="button" type="submit" id="studentroll" name="studentroll" >Submit Comment</button>
                </form>
            </div>';

            } else {
                echo "No records found";
            }
            
            // Close the connection
            mysqli_close($conn);
            
            
        ?>

    </div>
    </section>
    
    <script src="main.js"></script>

</body>

</html>