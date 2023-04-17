<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="table1.css">
    <title>
        Customers
    </title>
</head>

<body>

    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center"></p>
        <a href="adminmainpage.php">Dashboard</a>
        <a href="adminchemistview.php">View Chemist</a>

    </div>

    <center>
        <div class="head">
            <h2> ADMIN DASHBOARD</h2>
        </div>
    </center>

    <a href="adminchemistview.php" title="View Chemist">
        <img src="inventory.png"
            style="padding:8px;margin-left: 700px;margin-top:120px;width:200px;height:200px;border:2px solid black;"
            alt="View Chemist">
    </a>



    <div class="topnav">
        <a href="logout.php">Logout(Logged in as <?php echo $_GET['username']?>)</a>
    </div>


</body>

</html>