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

    <style>
        .sidenav {
            overflow: auto;
        }

        img:hover {
            opacity: 0.5;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
        }
    </style>
    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center;margin-top:30px;"></p>
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">

            <a href="inventory-add.php"><img src="./img/pill.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Medicine</a>
            <a href="inventory-view.php"><img src="./img/pill.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Medicine</a>
        </div>
        <button class="dropdown-btn">Suppliers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="supplier-add.php"><img src="./img/Supplier.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Supplier</a>
            <a href="supplier-view.php"><img src="./img/Supplier.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Suppliers</a>
        </div>
        <button class="dropdown-btn">Stock Purchase
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="purchase-add.php"><img src="./img/StorageBox.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Purchase</a>
            <a href="purchase-view.php"><img src="./img/StorageBox.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Purchases</a>
        </div>

        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="customer-add.php"><img src="./img/patient.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Customer</a>
            <a href="customer-view.php"><img src="./img/patient.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Customers</a>
        </div>
        <a href="sales-view.php"><img src="./img/invoice.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">View
            Sales Invoice Details</a>
        <a href="salesitems-view.php"><img src="./img/product.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">View
            Sold Products Details</a>
        <button class="dropdown-btn">Reports
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="stockreport.php"><img src="./img/lowstock.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Medicines
                - Low Stock</a>
            <a href="expiryreport.php"><img src="./img/expire.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Medicines
                - Soon to Expire</a>
            <a href="salesreport.php"><img src="./img/transactions.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Transactions
                Reports</a>
        </div>
    </div>

    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="./about.html">About Us</a>
        <a href="./service.html">Services</a>
        <a href="./home.html">Home</a>
    </div>

    <center>
        <div class="head" style="border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> <u>CUSTOMER LIST</u></h2>
        </div>
    </center>


    <table align="right" id="table1" style="margin-right:100px;">
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Action</th>
        </tr>
        <?php

        include "config.php";
        $sql = "SELECT c_id,c_fname,c_lname,c_age,c_sex,c_phno,c_mail FROM customer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row["c_id"] . "</td>";
                echo "<td>" . $row["c_fname"] . "</td>";
                echo "<td>" . $row["c_lname"] . "</td>";
                echo "<td>" . $row["c_age"] . "</td>";
                echo "<td>" . $row["c_sex"] . "</td>";
                echo "<td>" . $row["c_phno"] . "</td>";
                echo "<td>" . $row["c_mail"] . "</td>";
                echo "<td align=center>";
                echo "<a class='button1 edit-btn' href=customer-update.php?id=" . $row['c_id'] . ">Edit</a>";
                echo "<a class='button1 del-btn' href=customer-delete.php?id=" . $row['c_id'] . ">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        $conn->close();
        ?>

</body>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

</html>