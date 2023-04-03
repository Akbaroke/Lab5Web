<?php
include "Database.php";
$database = new Database();
$nim = $_GET["nim"];

if (isset($_GET["nim"])) {
    $database->delete("tb_coba", "where nim=" . $nim);
}
