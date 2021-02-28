<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
    require('connection/connection.php');
    require('links.php'); 
    ?>
    <title> Dashboard </title>

</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <img src="image/sit_logo.jpg" alt="logo" style="height: 60px;">

                <a href="index.html" class="easion-logo"><span></span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="index.php" class="dash-nav-item"> <i class="fas fa-home"></i> Home </a>
                <?php
                $rs=mysqli_query($conn,"select * from subject");
                while($row=mysqli_fetch_array($rs))
                {
                ?>
                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle"> <?php echo $row['sub_name']; ?> </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="java_history.php" class="dash-nav-dropdown-item"> History of JAVA </a>
                        <a href="java_byte.php" class="dash-nav-dropdown-item"> Bytecode </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <h4 style="margin-left: 255px;"> Siliguri Institute Of Technology </h4>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <!-- put your rows / columns here -->
                </div>
            </main>
        </div>
    </div>
    <?php require("links.php"); ?>
</body>

</html>