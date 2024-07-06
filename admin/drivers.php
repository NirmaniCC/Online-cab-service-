<?php
require "connection.php";
?>
<html>

<head>
    <title>CabWave</title>
    <link rel="stylesheet" href="../css/styletext.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>



    <div>

        <?php include "adminheader.php"; ?>
        <div class="space">
            <div>
                <?php include "sidebar.php"; ?>

            </div>
            <div class="admins" id="admsss"><br><br>

                <div>
                    <div class="header_fixed">
                        <table>
                            <thead>

                                <tr>
                                    <th>D No.</th>
                                    <th>Driver name</th>
                                    <th>Birth Date</th>
                                    <th>Vehicle Model</th>
                                    <th>Vehicle Number</th>
                                    <th>License Photo</th>
                                    <th>Vehicle Photo</th>
                                    <th>Status</th>
                                    <th>Accept</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $driver_rs = Database::search("SELECT *
                                FROM driver
                                INNER JOIN vehicle ON vehicle.vehicle_id = driver.vehicle_id
                                WHERE
                                `delete`=1");
                                $driver_num = $driver_rs->num_rows;
                                for ($i = 0; $i < $driver_num; $i++) {
                                    $driver_data = $driver_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td> <img src="../images/user.png">
                                            <p class="pass_imge"><?php echo $driver_data["name"] ?></p>
                                        </td>
                                        <td><?php echo $driver_data["birth_day"] ?></td>
                                        <td><?php echo $driver_data["vehicle_type"] ?>-<?php echo $driver_data["vehicle_name"] ?></td>
                                        <td><?php echo $driver_data["registration_no"] ?></td>
                                        <td> <img src="../images/pdf-file.png"></td>
                                        <td> <img src="../images/"></td>
                                        <td><button class="btn4">New</button></td>
                                        <td> <img src="../images/accept.png"></td>
                                        <td> <img src="../images/remove.png" onclick="window.location='remove_driver.php?id=<?php echo $driver_data['id'] ?>'"></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div><br><br><br>

            </div>
        </div><br>
        <?php include "../footer.php"; ?>

    </div><br>
</body>

</html>