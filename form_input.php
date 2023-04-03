<?php

/**
 * Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
 **/
include "form.php";
include "database.php";
$db = new Database();


if (isset($_POST['submit'])) {
  $data = [
    "nim" => $_POST['txtnim'],
    "nama" => $_POST['txtnama'],
    "alamat" => $_POST['txtalamat']
  ];
  $db->insert("mahasiswa", $data);
}

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("form_input.php", "submit");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
