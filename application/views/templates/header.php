<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset_url() ?>css/style.css">
    <title>Fulla Cookies</title>
    <meta name="keywords" content="fulla cookies">
</head>

<body>
    <nav class="navbar nav-custom navbar-expand-md mx-5 pt-3">
        <div class="container-fluid">
            <div class="fs-4 navbar-brand" href="#">Fulla Cookies</div>
            <button class="btn btn-sidebar" onclick="sidebar('show')" type="button" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu">
                <div class="navbar-nav">
                        <a class="p-2 mx-2 fs-6 nav-link nav-link-custom uc-active" href="#">Beranda</a>
                        <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="#">Tentang Kami</a>
                        <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="#">Produk</a>
                        <a class="p-2 mx-2 fs-6 nav-link nav-link-custom" href="#">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light position-fixed h-100 top-0 sidebar">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Menus</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link uc-active">Home</a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">Dashboard</a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">Orders</a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">Products</a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">Customers</a>
            </li>
        </ul>
    </div>