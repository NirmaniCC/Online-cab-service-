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

                <img src="../images/credit-card (1).png" class="cfffe">
                <h2 class="cfffe">New Payments</h2><br><br><br><br><br><br>


                <div>
                    <div>
                        <img src="../images/credit-card (2).png" class="cf"><button class="lov">View Payment Details</button><br>
                        <div class="labss" id="done">12 PM<br> 2KM <br>Threweel-tvs <br>Driver:JP.perera <br><br><br><button class="axy">Add Payment</button><br><br><button class="axy">Return Payment</button></div>

                    </div>
                    <div class="movett">
                        <img src="../images/credit-card (2).png" class="cf" id="cf-f"><button class="lov">View Payment Details</button><br>
                        <div class="labssss" id="done">1205 PM<br> 10KM <br>Car-toyota <br>Driver:SK.peter <br><br><br><button class="axy">Add Payment</button><br><br><button class="axy">Return Payment</button></div>
                    </div>
                    <div class="movettet">
                        <img src="../images/credit-card (2).png" class="cf" id="cf-fff"><button class="lov">View Payment Details</button><br>
                        <div class="labss" id="done">12.07 PM<br> 3KM <br>Threweel-tvs <br>Driver:KP.James<br><br><br><button class="axy">Add Payment</button><br><br><button class="axy">Return Payment</button></div>
                    </div>

                </div>

                <div>
                    <div class="header_fixed">
                        <table>
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Passenger</th>
                                    <th> Date</th>
                                    <th>Journey started Time</th>
                                    <th>Booked Vehicle </th>
                                    <th>Driver</th>
                                    <th>Far(Km)</th>
                                    <th>Total Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $passenger_rs = Database::search("SELECT * FROM payment 
                                inner join passenger on passenger.id=payment.passenger_id
                                inner join driver on driver.id=payment.driver_id");
                                $passenger_num = $passenger_rs->num_rows;
                                for ($i = 0; $i < $passenger_num; $i++) {
                                    $passenger_data = $passenger_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td>#<?php echo $passenger_data['id'] ?></td>
                                        <td> <img src="../images/user.png">
                                            <p class="pass_imge"><?php echo $passenger_data['f_name'] ?></p>
                                        </td>
                                        <td><?php echo $passenger_data['pay_date'] ?></td>
                                        <td><?php echo $passenger_data['pay_time'] ?></td>
                                        <td>Treweel-bajaj</td>
                                        <td> <img src="../images/user.png">
                                            <p class="pass_imge"><?php echo $passenger_data['name'] ?></p>
                                        </td>
                                        <td><?php echo $passenger_data['km'] ?></td>
                                        <td>LKR.<?php echo $passenger_data['pay_amount'] ?></td>

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