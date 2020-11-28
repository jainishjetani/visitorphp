<!DOCTYPE html>
<html>
    <head>
        <title>View visitor</title>
    </head>
    <body>


    <center>
        <table  class="tb_view" cellpadding="5">
            <caption style="margin-bottom: 10px;">
                <div style="border-bottom: 2px solid #008080;text-align: center;">
                    <h1 style="color:#008080;font-variant: all-petite-caps;text-shadow: 0px 0px 1px #333;">visitor Details</h1>
                </div>
            </caption>
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Contact Number</th>
                    <th>date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = 'database-1.c6jevgf51ssc.us-east-1.rds.amazonaws.com';
                $user = 'admin';
                $password = '123admin';
                $database = 'visdb';
                $port = 3306;

//                $host = 'localhost';
//                $user = 'root';
//                $password = '';
//                $database = 'de';
//                $port = 3306;
                $con = mysqli_connect($host, $user, $password, $database, $port);
                $query = "SELECT * FROM `vis`";
                $result = mysqli_query($con, $query);

                $c = 0;
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo ++$c; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['city']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td><?php echo $data['date']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                <?php ?>
            </tbody>
        </table>

    </center>

</body>
</html>

