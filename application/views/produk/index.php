<div class="container-fluid d-flex justify-content-evenly mt-5 flex-wrap">
	<?php foreach ($list_produk as $e) : ?>
		<div class="card mb-3 px-0 col-11">
			<div class="row g-0">
				<div class="card-image col-sm-4 rounded-start" style="background-image: url(<?= asset_url() . "/img/produk/" . $e["image-path"] ?>);">
					<img src="<?= asset_url() . "/img/produk/" . $e["image-path"] ?>" class="w-100 h-100 d-none rounded-start" alt="...">
				</div>
				<div class="col-sm-8 p-3 pb-1">
					<h5 class="card-title"><?= $e["nama"] ?></h5>
					<p class="card-text mb-1"><?= $e["harga"] ?></p>
					<a class="btn btn-custom btn-sm mb-2" href="<?=base_url("produk/detail/" . $e['id'])?>">detail</a>
					<p class="card-text"><span class="text-success">tersedia</span></p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<style>
	.card-image {
		background-size: cover;
		background-position: center;
	}
	@media only screen and (min-width: 768px) {
		.card {
			width: 45% !important;
		}
	}

	@media only screen and (min-width: 1200px) {
		.card {
			width: 30% !important;
		}
	}
	@media only screen and (max-width: 576px) {
		.card-image {
			background-image: none !important;
		}
		.card-image > img {
			display: block !important;
		}
	}
</style>