<?php
$e = $this->session->flashdata("terkirim");
if(isset($e) && $e) {
    echo "<script>alert('terkirim')</script>";
} else if(isset($e)) {
    echo "<script>alert('kasian')</script>";
}
?>
<div class="container-md row mx-auto bg-light d-flex g-0 flex-wrap mt-4">
    <div class="col-lg-10 p-4">
        <?=form_open("kontak/send")?>
        <div class="form-floating mb-3">
            <input type="text" class="form-control custom-control" id="form_nama" placeholder="John Doe" name="nama">
            <label for="form_nama">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" required class="form-control custom-control" id="form_email" placeholder="john@gmail.com" name="email">
            <label for="form_email">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" required class="form-control custom-control" id="form_nomor" placeholder="087734529XX" name="nomor">
            <label for="form_nomer">Nomor telp.</label>
        </div>
        <div class="form-floating mb-3">
            <textarea style="height: 100px;" type="number" required class="form-control custom-control" id="form_nomer" placeholder="" name="pesan"></textarea>
            <label for="form_nomer">pesan</label>
        </div>
        <input class="btn btn-custom float-end" type="submit" name="submit" value="Kirim !">
        </form>
    </div>
    <div class="col-lg-2"></div>
</div>
<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #666;
        border-radius: 20px;
    }

    ::-webkit-scrollbar-track {
        background: #ddd;
        border-radius: 20px;
    }

    .custom-control:focus {
        border-color: #ddb892 !important;
        box-shadow: 0 0 0 0.25rem #edc53140 !important;
    }
</style>