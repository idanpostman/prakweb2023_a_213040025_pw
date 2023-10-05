<?php 
require 'functions.php';

$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Buku</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun Terbit</th> 
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) :?>
    <tr>
        <td><?= $row["id_buku"]; ?></td>
      <td><?= $row["judul_buku"]; ?></td>
      <td><?= $row["penerbit"]; ?></td>
      <td><?= $row["penulis"]; ?></td>
      <td><?= $row["tahun_penerbit"]; ?></td>
    </tr>
    <?php $i++; ?>
        <?php endforeach ?>
  </tbody>
</table>

