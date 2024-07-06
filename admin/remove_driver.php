<?php
session_start();
require "connection.php";

Database::iud("UPDATE `driver` SET `delete` = '2' WHERE `id` = '" . $_GET['id'] . "'");

header("Location:drivers.php");
