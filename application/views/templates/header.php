<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset_url() ?>/css/style.css">
    <title>Fulla Cookies</title>
    <meta name="keywords" content="fulla cookies">
    <meta name="description" content="fulla cookies">
</head>

<body class="d-none flex-column h-100">
    <nav class="navbar nav-custom navbar-expand-md sticky-top mx-0 pb-0">
        <div class="container-fluid pb-2 px-4">
            <div class="fs-4 navbar-brand ms-2">Fulla Cookies</div>
            <button class="btn btn-sidebar py-1 px-2 text-primary" onclick="sidebar('show')" type="button">
                <img src="<?= asset_url() ?>/img/menu.svg" width="25" alt="Menu">
            </button>
            <div class="collapse navbar-collapse menu">
                <div class="navbar-nav nav-top">
                    <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="<?=base_url("beranda")?>">Beranda</a>
                    <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="<?=base_url("tentang-kami")?>">Tentang Kami</a>
                    <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="<?=base_url("produk")?>">Produk</a>
                    <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="<?=base_url("kontak")?>">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex shadow flex-column flex-shrink-0 p-3 bg-light position-fixed h-100 top-0 sidebar">
        <div class="d-flex justify-content-between align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Menu</span>
            <button class="btn me-3 text-primary" onclick="sidebar('show')" type="button"><img src="<?=asset_url()?>/img/cross.svg" width="25" alt="Close"></button>
        </div>
        <hr>
        <div class="nav nav-pills flex-column mb-auto nav-sidebar">
            <a href="<?=base_url("beranda")?>" class="nav-link nav-link-custom">Beranda</a>
            <a href="<?=base_url("tentang-kami")?>" class="nav-link nav-link-custom">Tentang Kami</a>
            <a href="<?=base_url("produk")?>" class="nav-link nav-link-custom">Produk</a>
            <a href="<?=base_url("kontak")?>" class="nav-link nav-link-custom">Kontak</a>
        </div>
    </div>