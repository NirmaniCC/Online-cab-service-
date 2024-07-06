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
                                    <th>P No.</th>
                                    <th>Rider name</th>
                                    <th>Join Date</th>
                                    <th>Maximum far</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $passenger_rs = Database::search("SELECT * FROM passenger");
                                $passenger_num = $passenger_rs->num_rows;
                                for ($i = 0; $i < $passenger_num; $i++) {
                                    $passenger_data = $passenger_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td><?php echo $passenger_data["id"] ?></td>
                                        <td> <img src="<?php echo $passenger_data["photo"] ?>">
                                            <p class="pass_imge"><?php echo $passenger_data["f_name"] ?> <?php echo $passenger_data["l_name"] ?></p>
                                        </td>
                                        <td>23/10/2022</td>
                                        <td>5Km</td>
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