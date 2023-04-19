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
    <?php global $uname;
    $uname = $_GET['username'];
    ?>
    <div class=" sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center"></p>
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="inventory-add.php">Add New Medicine</a>
            <a href="inventory-view.php">Manage Inventory</a>
        </div>
        <button class="dropdown-btn">Suppliers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="supplier-add.php">Add New Supplier</a>
            <a href="supplier-view.php">Manage Suppliers</a>
        </div>
        <button class="dropdown-btn">Stock Purchase
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="purchase-add.php">Add New Purchase</a>
            <a href="purchase-view.php">Manage Purchases</a>
        </div>

        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="customer-add.php">Add New Customer</a>
            <a href="customer-view.php">Manage Customers</a>
        </div>
        <a href="sales-view.php">View Sales Invoice Details</a>
        <a href="salesitems-view.php">View Sold Products Details</a>
        <button class="dropdown-btn">Reports
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="stockreport.php">Medicines - Low Stock</a>
            <a href="expiryreport.php">Medicines - Soon to Expire</a>
            <a href="salesreport.php">Transactions Reports</a>
        </div>
    </div>

    <div class="topnav">
        <a href="logout.php">Logout (Logged in as <?php echo $uname; ?>)</a>
    </div>

    <center>
        <div class="head" style="background:linear-gradient(#141e30, #243b55);
color: white;">
            <h2> CHEMIST DASHBOARD</h2>
        </div>
    </center>

    <a href="inventory-view.php" title="View Inventory">
        <img src="inventory.png" style="padding:8px;margin-left: 450px;margin-top:120px;width:200px;height:200px;border:2px solid black; box-shadow: 0 8px 25px 0 rgba(71, 43, 229, 0.2), 0 8px 25px 0 rgba(71, 43, 229, 0.2);
    text-align: center;" alt="Inventory"></a>
    <a href="salesreport.php" title="View Transactions">
        <img src="moneyicon.png" style="padding:8px; margin-left: 40px;width:200px;height:200px;border:2px solid black; box-shadow: 0 8px 25px 0 rgba(71, 43, 229, 0.2), 0 8px 25px 0 rgba(71, 43, 229, 0.2);
    text-align: center;" alt="Transactions List">
    </a>

    <a href="stockreport.php" title="Low Stock Alert">
        <img src="alert.png"
            style="padding:8px;margin-left: 40px;width:200px;height:200px;border:2px solid black; box-shadow: 0 8px 25px 0 rgba(71, 43, 229, 0.2), 0 8px 25px 0 rgba(71, 43, 229, 0.2);"
            alt="Low Stock Report">
    </a>
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