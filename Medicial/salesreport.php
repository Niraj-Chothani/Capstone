<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="table1.css">
    <link rel="stylesheet" type="text/css" href="form3.css">
    <title>
        Reports
    </title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
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
            <h2> <u>TRANSACTION REPORTS</u></h2>
        </div>

        <br><br><br><br><br><br><br><br><br>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
            <p>
                <label for="start">Start Date:</label>
                <input type="date" name="start">
            </p>
            <p>
                <label for="end">End Date:</label>
                <input type="date" name="end">
            </p>

            <input type="submit" name="submit" value="View Records" style="border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
        </form>

        <?php
        include "config.php";
        if (isset($_POST['submit'])) {

            $start = $_POST['start'];
            $end = $_POST['end'];
            $res = mysqli_query($conn, "SELECT P_AMT('$start','$end') AS PAMT") or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($res)) {
                $pamt = $row['PAMT'];
            }

            $res = mysqli_query($conn, "SELECT S_AMT('$start','$end') AS SAMT;") or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($res)) {
                $samt = $row['SAMT'];
            }

            $profit = $samt - $pamt;
            $profits = number_format($profit, 2);
        ?>

            <table align="right" id="table1" style="margin-right:100px;">
                <tr>
                    <th>Purchase ID</th>
                    <th>Supplier ID</th>
                    <th>Medicine ID</th>

                    <th>Quantity</th>
                    <th>Date of Purchase</th>
                    <th>Cost of Purchase(in Rs)</th>
                </tr>
                <?php
                $sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date FROM purchase 
			WHERE pur_date >= '$start' AND pur_date <= '$end';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        echo "<tr>";
                        echo "<td>" . $row["p_id"] . "</td>";
                        echo "<td>" . $row["sup_id"] . "</td>";
                        echo "<td>" . $row["med_id"] . "</td>";
                        echo "<td>" . $row["p_qty"] . "</td>";
                        echo "<td>" . $row["pur_date"] . "</td>";
                        echo "<td>" . $row["p_cost"] . "</td>";

                        echo "</tr>";
                    }
                }

                echo "<tr>";
                echo "<td colspan=5>Total</td>";
                echo "<td >Rs." . $pamt . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</table>";
                ?>

                <table align="right" id="table1" style="margin-right:100px;">
                    <tr>
                        <th>Sale ID</th>
                        <th>Customer ID</th>
                        <th>Employee ID</th>
                        <th>Date</th>
                        <th>Sale Amount(in Rs)</th>
                    </tr>

                    <?php
                    include "config.php";
                    $sql = "SELECT sale_id, c_id,s_date,s_time,total_amt,e_id FROM sales
			WHERE s_date >= '$start' AND s_date <= '$end';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {


                            echo "<tr>";
                            echo "<td>" . $row["sale_id"] . "</td>";
                            echo "<td>" . $row["c_id"] . "</td>";
                            echo "<td>" . $row["e_id"] . "</td>";
                            echo "<td>" . $row["s_date"] . "</td>";
                            echo "<td>" . $row["total_amt"] . "</td>";

                            echo "</tr>";
                        }
                        echo "<tr>";
                        echo "<td colspan=4>Total</td>";
                        echo "<td >Rs." . $samt . "</td>";
                        echo "</tr>";
                        echo "</table>";
                    }
                    ?>

                    <table align="right" id="table1" style="margin-bottom:100px;margin-right:100px;">
                        <tr style="background-color: #f2f2f2;">
                            <td>Transaction Amount </td>
                            <td>Rs.<?php echo $profits;
                                } ?></td>
                        </tr>
                    </table>

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