<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col" class="produk-head">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 0; foreach ($produk as $e) : ?>
                <tr>
                    <th scope="row"><?= $e["id"] ?></th>
                    <td><?= $e["nama"] ?></td>
                    <td><?= $e["harga"] ?></td>
                    <td class="produk-desc"><?= $e["deskripsi"] ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-outline-success" onclick="edit(<?=$index?>)">Edit</button>
                            <a target="_blank" href="<?= base_url("produk/detail/") . $e['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Detail</a>
                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmHapus(<?= $e['id'] ?>,`<?= $e['nama'] ?>`)">Hapus</button>
                        </div>
                    </td>
                </tr>
                <?php $index++;?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button class="btn btn-primary d-none edit-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#editCollapse" aria-expanded="false" aria-controls="editCollapse"></button>
    <div class="collapse edit-container" id="editCollapse">
        
    </div>
</div>
<style>
    @media only screen and (max-width: 768px) {

        .produk-desc,
        .produk-head {
            display: none !important;
        }
    }
</style>
<script>
    let editButton = document.querySelector(".edit-collapse");
    let editContainer = document.querySelector(".edit-container");
    const produk = <?=json_encode($produk);?>

    function edit(index) {
        if(editButton.ariaExpanded == "true"){
            editButton.click()
            console.log("LOL");
        }
        setTimeout(() => {
        editButton.click()
        }, 800);
        console.log(index);
    }
    function confirmHapus(id = "0", nama = "kue") {
        Swal.fire({
            title: `Yakin untuk menghapus ${nama}?`,
            icon: "question",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Hapus',
            customClass: {
                confirmButton: "btn btn-danger",
                cancelButton: "btn btn-secondary ms-3"
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: `terhapus !`,
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: 'Ok',
                    customClass: {
                        confirmButton: "btn btn-success",
                    }
                })
            }
        })
    }
</script>