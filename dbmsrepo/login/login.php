<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '12345789';
    $db = 'users';

    $conn = mysqli_connect($server, $username, $password, $db);
    if ($conn) {
        echo '<div style="color:green"><b>Connection successful</b></div>';
    } else {
        echo 'Connection failed';
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM admin WHERE username = '$username' AND pass = '$pass'";
        $res = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($res);

        if ($num == 1) {
            session_start();
            // Redirect to index.html if credentials are correct
            $_SESSION['loggedin']=true;
            $_SESSION['username']='$username';
            header("Location: ../welcome.php");
        } else {
            // Redirect back to login.php if credentials are incorrect
            header("Location: login.php");
            exit();
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style3.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Admin</title>
    
</head>

<body class="transparent-bg">
<header class="header" id="header">
        <nav class="nav ">
            <a href="../index.php" class="nav__logo">
                <i class="ri-hospital-fill"></i>
                <span>HealthCare</span>
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <div class="button"><a href="../index.php"  class="nav__link">Home</a></div>
                    </li>
                </ul>
            </div>
        </nav>
   </header>
   <br><br><br><br><br>
  
  <section>
  <div class="heading">Login</div>
  <div class="container reveal form ">
  <form action="login.php" method="POST">
          <div class="input-box">
            <label>Username</label>
            <input type="text" name="username" placeholder="username" required />
          </div>
          <br>
          <div class="input-box">
            <label>Password</label>
            <input type="password" name="pass"  required />
          </div>
          <br>
          <button>Submit</button>
        </form>
  </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
