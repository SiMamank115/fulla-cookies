<footer class="footer mt-5 mx-0 py-3 bg-light">
    <div class="container d-flex justify-content-between">
        <p>&copy; Fulla Cookies Inc.</p>
        <div class="nav nav-pills mb-auto flex-column nav-bottom">
            <a href="<?= base_url("beranda") ?>" class="nav-link nav-link-custom p-1 mx-1">Beranda</a>
            <a href="<?= base_url("tentang-kami") ?>" class="nav-link nav-link-custom p-1 mx-1">Tentang Kami</a>
            <a href="<?= base_url("produk") ?>" class="nav-link nav-link-custom p-1 mx-1">Produk</a>
            <a href="<?= base_url("kontak") ?>" class="nav-link nav-link-custom p-1 mx-1">Kontak</a>
        </div>
    </div>
</footer>
<script>
    const pillNum = <?php if (isset($pill)) {
                        echo $pill;
                    } else {
                        echo "undefined";
                    } ?>
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?= asset_url() ?>/js/script.js"></script>
</body>

</html>