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

                    <div class="hh">
                        <img src="../images/tuk-tuk.png" class="tuk"><br>

                    </div>
                    <div class="hh">
                        <img src="../images/car.png" class="tuk">

                    </div>
                    <div class="hh">
                        <img src="../images/car.png" class="tuk">

                    </div><br><br><br><br><br><br><br>

                    <div class="lab" id="done">Vehicle Model-Treweel-bajaj <br> Vehicle Number-CPKD5539 <br>Chassis Number-77778 <br><br><br><button class="axy">Accept</button><br><br><button class="axy">Disaccept</button></div>
                    <div class="lab" id="tabss">Vehicle Model-Car-Suzuki alto <br> Vehicle Number-CPAK90908 <br>Chassis Number-77778 <br><br><br><button class="axy">Accept</button><br><br><button class="axy">Disaccept</button></div>
                    <div class="lab" id="tabss">Vehicle Model-Car-Suzuki alto <br> Vehicle Number-CPAK90958 <br>Chassis Number-77765 <br><br><br><button class="axy">Accept</button><br><br><button class="axy">Disaccept</button></div><br><br><br><br><br><br>



                </div><br><br><br><br>

                <div>
                    <div class=" header_fixed">
                        <table>
                            <thead>
                                <tr>
                                    <th>V No.</th>
                                    <th>Vehicle name</th>
                                    <th>Added Date</th>
                                    <th>Vehicle Model</th>
                                    <th>Vehicle Number</th>
                                    <th>Chassis Number</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $vehicle_rs = Database::search("SELECT * FROM vehicle");
                                $vehicle_num = $vehicle_rs->num_rows;
                                for ($i = 0; $i < $vehicle_num; $i++) {
                                    $vehicle_data = $vehicle_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td><?php echo $vehicle_data["id"] ?></td>
                                        <td> <img src="../images/user.png">
                                            <p class="pass_imge"><?php echo $vehicle_data["vehicle_name"] ?></p>
                                        </td>
                                        <td></td>
                                        <td><?php echo $vehicle_data["vehicle_type"] ?>-<?php echo $vehicle_data["vehicle_name"] ?></td>
                                        <td><?php echo $vehicle_data["registration_no"] ?></td>
                                        <td><?php echo $vehicle_data["chassi_no"] ?></td>
                                        <td><button class="btn4">New</button></td>
                                        <td> <img src="../images/pen.png"></td>
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