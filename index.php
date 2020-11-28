<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php
    if (isset($_POST['add'])) {
//        $host = 'localhost';
//        $user = 'root';
//        $password = '';
//        $database = 'de';
//        $port = 3306;
        $host = 'database-1.c6jevgf51ssc.us-east-1.rds.amazonaws.com';
        $user = 'admin';
        $password = '123admin';
        $database = 'visdb';
        $port = 3306;

        $stud_name = $_POST['stud_name'];
        $stud_email = $_POST['stud_email'];
        $stud_city = $_POST['stud_city'];
        $stud_phone = $_POST['stud_phone'];
        $stud_department = $_POST['date'];

        $conn = mysqli_connect($host, $user, $password, $database, $port);



        if ($conn) {
            
        } else {
            die("Database Connection Failed.");
        }

        $query = "INSERT INTO `vis`(`name`, `email`, `city`, `phone`, `date`) VALUES ('" . $stud_name . "','" . $stud_email . "','" . $stud_city . "','" . $stud_phone . "','" . $stud_department . "')";

        $res = mysqli_query($conn, $query);

        if ($res > 0) {
            header('location:view.php');
        }
    }
    ?>
    <body>
    <center>
        <h1>Registration</h1>
        <form method = "post">
            <table width = "400" border = "0" cellspacing = "1" 
                   cellpadding = "2">

                <tr>
                    <td width = "100">Name</td>
                    <td><input name = "stud_name" type = "text" 
                               id = "stud_name"></td>
                </tr>

                <tr>
                    <td width = "100">Email Address</td>
                    <td><input name = "stud_email" type = "text" 
                               id = "stud_email"></td>
                </tr>

                <tr>
                    <td width = "100">City</td>
                    <td><input name = "stud_city" type = "text" 
                               id = "stud_city"></td>
                </tr>
                <tr>
                    <td width = "100">Phone</td>
                    <td><input name = "stud_phone" type = "text" 
                               id = "stud_phone"></td>
                </tr>
                <tr>
                    <td width = "100">Date</td>
                   <td><input name = "stud_department" type = "text" 
                               id = "stud_department"><td>
                   
                </tr>

                <tr>
                    <td width = "100"> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td width = "100"> </td>
                    <td>
                        <input name = "add" type = "submit" id = "add" value = "Add visitor">
                    </td>
                </tr>

            </table>
        </form>
        <a href="view.php">Click To View visitor</a>
    </center>
</body>
</html>
