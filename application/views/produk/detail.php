<div class="container mt-5">
<div class="p-5 mb-4 bg-custom shadow rounded-3 row g-0">
    <div class="col-md-6">
        <a class="btn btn-custom btn-sm float-end" href="<?=base_url("produk")?>">Back</a>
        <h1 class="display-5 fw-bold text-custom mb-0"><?=$detail["nama"]?></h1>
        <p class="text-muted"><?=$detail["harga"]?></p>
        <p class="col-md-8 fs-4"><?=$detail["deskripsi"]?></p>
    </div>
    <div class="col-md-6">
        <img src="<?=asset_url() . "/img/produk/" . $detail["image-path"]?>" alt="Gamber Kue" class="w-100 shadow rounded-3">
    </div>
</div>
</div>
<style>
    .bg-custom {
        background-color: #f0efeb;
    }
    @media only screen and (min-width: 768px) {
        a.btn-custom {
            margin-right: 1rem !important;
        }
    }
</style>