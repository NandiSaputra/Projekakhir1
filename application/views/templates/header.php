<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <title><?= $title ?></title>
</head>

<body>
 <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('pelanggan') ?>">TOKO SEPEDA YG SANGAT SEDERHANA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
       <a class="nav-link active" aria-current="page" href="<?= base_url('Kategori') ?>">KATEGORI</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="<?= base_url('barang') ?>">SEPEDA</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="<?= base_url('penjualan') ?>">PENJUALAN</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="<?= base_url('Pelanggan') ?>">PEMBELI</a>
      </li>
     </ul>
     <span class="navbar-text">
      Stay SAfE AND Healty
     </span>
    </div>
   </div>
  </nav>

  <div class="row">
   <?= $this->session->flashdata('message') ?>
  </div>