<div class="mt-4 container-fluid content shadow rounded-3" style="max-width: 500px;">
    <?= form_open("admin/login") ?>
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control custom-control" autocomplete="off" id="form_nama" placeholder="nama" name="name">
        <label for="form_nama">Nama</label>
        <p class="text-danger"><?=$this->session->flashdata("username")?></p>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control custom-control" autocomplete="off" id="form_password" placeholder="password" name="password">
        <label for="form_password">Password</label>
        <p class="text-danger"><?=$this->session->flashdata("password")?></p>
    </div>
    <input class="btn btn-custom float-end mb-3" type="submit" name="submit" value="Masuk !">
    </form>
</div>
<style>
    .custom-control:focus {
        border-color: #ddb892 !important;
        box-shadow: 0 0 0 0.25rem #edc53140 !important;
    }

    .custom-control {
        background-color: var(--bs-white);
    }

    .content {
        background-color: var(--bs-white) !important;
    }
</style>
<script>
    function ready() {
        document.querySelector("input#form_nama").focus();
    }
</script>