<?php
$koneksi = mysqli_connect("localhost", "root", "") or die("No conncet");
$db = mysqli_select_db($koneksi, "belajar_database") or die("no db");
