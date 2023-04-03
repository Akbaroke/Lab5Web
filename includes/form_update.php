<?php

include "./requires/form.php";
include "./requires/database.php";
$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['update'])) {
  $data = [
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat']
  ];
  $database->update("tb_coba", $data, "nim=" . $nim);
}

$data = $database->get("tb_coba", "where nim=" . $nim);

$form = new Form("", "update");
$form->addField("txtnama", "Nama", $data["nama"]);
$form->addField("txtalamat", "Alamat", $data["alamat"]);
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
