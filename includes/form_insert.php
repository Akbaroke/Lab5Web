<?php

include "./requires/form.php";
include "./requires/database.php";
$db = new Database();


if (isset($_POST['insert'])) {
  $data = [
    "nim" => $_POST['txtnim'],
    "nama" => $_POST['txtnama'],
    "alamat" => $_POST['txtalamat']
  ];
  $db->insert("tb_mahasiswa", $data);
}

$form = new Form("", "insert");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
