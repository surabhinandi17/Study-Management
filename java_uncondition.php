<!--<!DOCTYPE html>
<html>
<?php require('links.php');?>
<body>

<?php
//include "connection/connection.php";
include "include/list.php";
abc2('Java','Unconditional Control/Jump Statements');
include "include/sidebar.php";
abc('file/unconditional.pdf');
?>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require('links.php'); ?>
    <title> Dashboard </title>
    <style type="text/css">
        @media only screen and (max-width: 800px) {
            .if{
                width:100%!important;

                }
            }
    </style>
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
                <a href="index.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Home </a>
                    <?php
                    require('connection/connection.php');
                    $rs=mysqli_query($conn,"select * from subject");
                    while($row=mysqli_fetch_array($rs))
                    {
                    ?>
                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle"> <?php echo $row['sub_name']; ?></a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="java_history.php" class="dash-nav-dropdown-item"> History of JAVA </a>
                        <a href="java_byte.php" class="dash-nav-dropdown-item"> Bytecode </a>
                    </div>
                </div>
                <?php
            }
            ?>
                <!--<div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle"> OOPs Concepts </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="java_oop.php" class="dash-nav-dropdown-item"> OOP </a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle"> Data Types </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="java_datatypes.php" class="dash-nav-dropdown-item"> Data Types </a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle"> Condition Control </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="java_condition.php" class="dash-nav-dropdown-item"> Conditional Control Statements </a>
                        <a href="java_loop.php" class="dash-nav-dropdown-item"> Looping Control Statements </a>
                        <a href="java_uncondition.php" class="dash-nav-dropdown-item"> Unconditional Control/Jump Statements </a>
                    </div>
                </div>
            -->
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <h4 style="margin-left: 250px;"> Siliguri Institute Of Technology </h4>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <?php
                    include "include/list.php";
                   abc2('Java','Unconditional Control/Jump Statements');
                    ?>
                    <iframe src="file/unconditional.pdf" class="if" style="height: 450px; width: 1020px; border: none;"></iframe>
                        <?php 
                        /*function abc($link)
                        {
                        ?>
                        
                        <iframe src="<?php echo $link?>" style="height: 350px; width: 850px; border: none;"></iframe>
                            
                        <?php
                        }*/
                        ?>
                    <!-- put your rows / columns here -->
                </div>
            </main>
        </div>
    </div>
    <?php require("links.php"); ?>
</body>

</html>