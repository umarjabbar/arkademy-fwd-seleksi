<?php
function getProducts($table) {
  $koneksi = new mysqli("localhost", "root", "", "arkademy");
  $koneksi->query("SELECT * FROM $table ORDER BY id DESC");
}



