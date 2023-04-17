<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="registration.css">
    <div class="header">
        <h1>Medical Store Management System</h1>
        <p style="margin-top:-20px;line-height:1;font-size:30px;"></p>
        <p style="margin-top:-20px;line-height:1;font-size:20px;"></p>
    </div>
    <title>Medical Store Management System</title>
</head>

<body>
    <br><br><br><br>
    <div class="container">
        <form method="post" action="">
            <div id="div_regis">
                <h1>Chemist Registration Form</h1>
                <center>
                    <input type="text" name="username" class="textbox" placeholder="Username"><br><br>
                    <input type="password" name="password" class="textbox" placeholder="Password"><br><br>
                    <input type="text" name="first_name" class="textbox" placeholder="First Name"><br><br>
                    <input type="text" name="last_name" class="textbox" placeholder="Last Name"><br><br>
                    <label>Photo:</label>
                    <input type="file" name="photo" placeholder="Choose photo"><br><br>
                    <label>Birthdate:</label>
                    <input type="date" name="birthdate"><br><br>
                    <input type="submit" value="Register" name="rsubmit" id="submit" />
                    <input type="submit" value="Chemist Login" name="csubmit" id="csubmit" />
                </center>
            </div>
        </form>
        <?php
        include "config.php";

        if (isset($_POST['rsubmit'])) {
            $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
            $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
            $first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
            $last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
            $photo = mysqli_real_escape_string($conn, $_REQUEST['photo']);
            $birthdate = mysqli_real_escape_string($conn, $_REQUEST['birthdate']);

            $sql = "INSERT INTO registration(username, password, f_name, l_name, photo, b_date) 
                        VALUES ('$username','$password','$first_name','$last_name','$photo','$birthdate')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Chemist registered successfully!');</script>";
            } else {
                echo "<script>alert('Error! Check details.');</script>";
            }
        }

        $conn->close();

        if (isset($_POST['rsubmit'])) {
            header("location:mainpage.php");
        }
       

        if (isset($_POST['csubmit'])) {
        header("location:mainpage.php");
        }

        ?>

    </div>

    <div class=footer>
        <br>
        CopyRight. All Rights are reserved.
        <br><br>
    </div>

</body>

</html>