<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'dbconnect.php';
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $roll=$_POST["roll"];
  $age=$_POST["age"];
  $gender=$_POST["gender"];
  $issue=$_POST["issue"];
  $sql="INSERT INTO students(name, email,phone,roll, age, gender, issue) values('$name', '$email','$phone','$roll', '$age', '$gender', '$issue')";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    $sql2="SELECT ID FROM students";
    $result2=mysqli_query($conn,$sql2);
    $token=mysqli_fetch_assoc($result2);
    echo 'your appointment number is '.$token['ID'];
  }
  else{
    echo'Account cannot be created';
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Get an Appointment</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="signup.php" method="POST">
          
    <body class="transparent-bg">
      <section class="container reveal">
       
        <header class=" header text-center fs-1">Get an Appointment</header>
        <form action="#" class="form">
          <div class="input-box">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter full name" required />
          </div>
          <br>
          <div class="input-box">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="College mail address" required />
          </div>
  
          <div class="column">
            <div class="input-box">
              <label>Phone Number</label>
              <input type="text" name="phone" placeholder="Enter phone number" required />
            </div>
          <div>
              <label for="issue">Roll No.</label>
              <input type="number" name="roll" id="roll "placeholder="your roll number" required>
            </div>
            <div class="input-box">
              <label>Age</label>
              <input type="number" name="age" placeholder="Enter age" required />
            </div>
          </div>
          <br>
          <div class="gender-box">
            <h3>Gender</h3>
  
            <div class="gender-option" >
              <div class="gender">
                <input type="radio" id="check-male" name="gender" value="M"  required/>
                <label for="check-male">Male</label>
              </div>
  
              <div class="gender">
                <input type="radio" id="check-female" name="gender" value="F" required />
                <label for="check-female">Female</label>
              </div>
  
              <div class="gender">
                <input type="radio" id="check-other" name="gender" value="PNS" required/>
                <label for="check-other">Prefer not to say</label>
              </div>
  
            </div>
          </div>
          <div>
            <label for="issue">Brief Your Problem</label>
            <input type="text" name="issue" id="issue " required>
          </div>
          <br>
          <button>Submit</button>
        </form>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>