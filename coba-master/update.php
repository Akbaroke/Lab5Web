<?php

include "Form.php";
include "Database.php";
$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ];
    $database->update("tb_coba", $data, "nim=" . $nim);
}

$data = $database->get("tb_coba", "where nim=" . $nim);

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "submit");
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("alamat", "Alamat", $data["alamat"]);
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
