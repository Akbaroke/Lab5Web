<?php

include "Form.php";
include "Database.php";
$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ];
    $database->insert("tb_coba", $data);
}

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("form_input.php", "submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("alamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
