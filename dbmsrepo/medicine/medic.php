<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style3.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>
</head>

<body class="transparent-bg">
    <header class="header" id="header">
        <nav class="nav">
            <a href="../index.php" class="nav__logo">
                <i class="ri-hospital-fill"></i>
                <span>HealthCare</span>
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">                  
                    <div class="button"><li><a href="../welcome.php" class="nav__link">Appointment List</a></li></div>
                    <div class="button"><a href="../login/logout.php" class="nav__link">Logout</a></div>
                    
                </ul>
            </div>
        </nav>
    </header>

    <div class="appoint_table">
    <div class="heading container reveal flex">
        <h2 style="text-align: center;" >Medication Stock</h2>
</div>
<br><br>
        <?php
        
            include '../appointment/dbconnect.php';

            // Correct query execution
            $sql = "SELECT * FROM `medicine`";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                if (mysqli_num_rows($res) > 0) {
                    echo "<table class=\"table_des container\" border='1'>";
                    echo "<tr class=\"test\" \"reveal\">
                            <th class=\"test\">Code</th><th class=\"test\">Drug</th><th class=\"test\">Supplier</th><th class=\"test\">Usage</th><th class=\"test\">Price</th>
                          </tr>";

                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr class=\"test\" \"reveal\">";
                        echo "<td class=\"test\">" . ($row['code']) . "</td>";
                        echo "<td class=\"test\">" . ($row['drug']) . "</td>";
                        echo "<td class=\"test\">" . ($row['supplier']) . "</td>";
                        echo "<td class=\"test\">" . ($row['use']) . "</td>";
                        echo "<td class=\"test\">" . ($row['price']) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No medicines found in the inventory.</p>";
                }
            } else {
                echo "<p>Error executing query: " . mysqli_error($conn) . "</p>";
            }
        
        ?>
    </div>

    <script src="main.js"></script>
</body>

</html>
