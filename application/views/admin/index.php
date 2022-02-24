<div class="container">
    <div class="row g-0 justify-content-between">
        <div class="custom-hero-text border-0 ps-2 mt-3 col-sm-6 text-custom">List Produk</div>
        <div class="col-sm-6 m-0">
            <?=form_open(base_url('admin'))?>
            <div class="input-group mb-3 cari-container shadow-sm">
                <input type="text" class="form-control custom-control" autocomplete="off" id="form-cari" placeholder="Nama kue" name="cari">
                <input type="submit" class="btn btn-custom" value="Cari"></input>
            </div>
            <?=form_close()?>
        </div>
    </div>
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
            <?php $index = 0;
            foreach ($produk as $e) : ?>
                <tr>
                    <th scope="row">#<?= $e["id"] ?></th>
                    <td><?= $e["nama"] ?></td>
                    <td><?= $e["harga"] ?></td>
                    <td class="produk-desc"><?php echo substr($e["deskripsi"], 0, 50);
                                            if (strlen($e["deskripsi"]) >= 50) {
                                                echo ". . . .";
                                            }; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-outline-success" onclick="edit(<?= $index ?>)">Edit</button>
                            <a target="_blank" href="<?= base_url("produk/detail/") . $e['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Detail</a>
                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmHapus(<?= $e['id'] ?>,`<?= $e['nama'] ?>`)">Hapus</button>
                        </div>
                    </td>
                </tr>
                <?php $index++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button class="btn btn-primary d-none edit-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#editCollapse" aria-expanded="false" aria-controls="editCollapse"></button>
    <div class="collapse edit-container" id="editCollapse">
        <div>
            <div class="custom-hero-text border-3 border-brown ps-2 mb-3 text-custom" id="form-hero">HAI</div>
        </div>
        <?= form_open("admin/edit", array("class" => "form-admin", "onkeydown" => "return event.key != 'Enter';")) ?>
        <input type="hidden" name="id" value="0" id="form_id" />
        <div class="form-floating shadow-sm mb-3">
            <input type="text" class="form-control custom-control" autocomplete="off" id="form_nama" placeholder="Cookies" name="nama">
            <label for="form_nama">Nama</label>
        </div>
        <div class="form-floating shadow-sm mb-3">
            <input type="text" class="form-control custom-control" autocomplete="off" id="form_harga" placeholder="10,000 Rp / pack" name="harga">
            <label for="form_harga">Harga</label>
        </div>
        <div class="form-floating shadow-sm mb-3">
            <input type="text" class="form-control custom-control" autocomplete="off" id="form_image_path" placeholder="John Doe" name="image_path">
            <label for="form_image_path">Image Path</label>
        </div>
        <div class="form-floating shadow-sm mb-3">
            <textarea style="height: 100px;" type="number" required class="form-control custom-control" id="form_deskripsi" placeholder="" name="deskripsi"></textarea>
            <label for="form_deskripsi">Deskripsi</label>
        </div>
        <input class="btn btn-custom float-end" id="form_submit" type="submit" name="submit" value="Edit !">
        <?= form_close() ?>
    </div>
</div>
<?php
echo form_open('admin/delete', array("class" => "delete-form d-none"));
echo form_hidden('id', '0');
echo form_submit('submit', 'submit');
echo form_close();
?>
<style>
    .cari-container {
        margin-top: 1.5rem;
    }

    .border-brown {
        border-color: var(--yellow-5) !important;
    }

    .custom-hero-text {
        border-left: 1px dashed var(--bs-secondary);
        font-size: calc(1rem + 2.7vw);
        font-weight: 700;
        font-family: "Baloo 2";
    }

    .custom-control:focus {
        border-color: #ddb892 !important;
        box-shadow: 0 0 0 0.25rem #edc53140 !important;
    }

    @media only screen and (max-width: 768px) {

        .produk-desc,
        .produk-head {
            display: none !important;
        }
    }
</style>
<script>
    let bsSwal

    function ready() {
        document.querySelector("input#form-cari").focus();
        bsSwal = Swal.mixin({
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-custom'
            },
            background: '#f8f9fa',
            color: '#343a40',
            iconColor: '#dbb42c'
        })
        if (typeof teredit != "undefined") {
            if (teredit) {
                bsSwal.fire({
                    icon: 'success',
                    title: 'Berhasil !',
                    text: 'Kolom telah teredit'
                })
            } else {
                bsSwal.fire({
                    icon: 'error',
                    title: 'Error !',
                    text: 'Kolom tidak berhasil teredit'
                })
            }
        }
        if (typeof terhapus != "undefined") {
            if (terhapus) {
                bsSwal.fire({
                    icon: 'success',
                    title: 'Terhapus !',
                    text: 'Kolom telah terhapus'
                })
            } else {
                bsSwal.fire({
                    icon: 'error',
                    title: 'Error !',
                    text: 'Kolom tidak terhapus'
                })
            }
        }
    }
    let editButton = document.querySelector(".edit-collapse");
    let editContainer = document.querySelector(".edit-container");
    const produk = <?= json_encode($produk); ?>

    editButton.lastOpen = null

    function edit(index) {
        let timeOut = 0;
        if (editButton.ariaExpanded == "true" && editButton.lastOpen != index) {
            editButton.click()
            timeOut = 400;
        }
        setTimeout(() => {
            document.querySelector(".custom-hero-text#form-hero").textContent = `Edit ${produk[index]['nama']}`;
            document.querySelector('.form-admin').action = "<?= base_url("admin/edit") ?>"
            document.querySelector("input#form_id").value = produk[index]['id'];
            document.querySelector("input#form_nama").value = produk[index]['nama'];
            document.querySelector("input#form_harga").value = produk[index]['harga'];
            document.querySelector("input#form_image_path").value = produk[index]['image-path'];
            document.querySelector("textarea#form_deskripsi").value = produk[index]['deskripsi'];
            document.querySelector("input#form_submit").value = "Edit !";
            editButton.lastOpen = index
            editButton.click()
        }, timeOut);
    }

    function add() {
        let timeOut = 0;
        if (editButton.ariaExpanded == "true" && editButton.lastOpen != -1) {
            editButton.click()
            timeOut = 400;
        }
        setTimeout(() => {
            document.querySelector('.form-admin').action = "<?= base_url("admin/add") ?>"
            document.querySelector("input#form_id").value = "";
            document.querySelector("input#form_nama").value = "";
            document.querySelector("input#form_harga").value = "";
            document.querySelector("input#form_image_path").value = "";
            document.querySelector("textarea#form_deskripsi").value = "";
            document.querySelector("input#form_submit").value = "Tambah !";
            editButton.lastOpen = -1
            editButton.click()
        }, timeOut);
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
                document.querySelector('.delete-form>input[type=hidden]').value = id
                document.querySelector('.delete-form>input[type=submit]').click();
            }
        })
    }
</script>