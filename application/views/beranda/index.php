<div class="big-image w-100 position-absolute shadow"></div>
<div class="content-1 mx-0 px-2" style="min-height: 100vh !important;">
    <div class="d-flex justify-content-center mt-5 align-items-center">
        <h1 class="display-4 fw-bold">Fulla Cookies</h1>
    </div>
    <div class="container-md mt-2">
        <p class="lead mb-4 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam quos debitis odio. Doloribus consequuntur beatae praesentium debitis sunt. Eius, quaerat.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
        </div>
    </div>
</div>
<div class="px-4 pt-5 my-5 text-center border-bottom">
    <div class="overflow-hidden" style="max-height: 100vh;">
        <div class="container px-0 d-flex flex-wrap flex-lg-row-reverse">
            <img src="<?= asset_url() ?>img/hero-image.jpg" class="img-fluid col-lg-6 border rounded-3 shadow mb-4" alt="Hero Imgae" width="700" height="500" loading="lazy">
            <div class="col-lg-6 ps-4 lead text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, odit dolore et consequuntur aspernatur ex molestiae ab recusandae! Explicabo, dolorum.</div>
        </div>
    </div>
</div>
<style>
    .big-image {
        z-index: -1;
        height: 100vh !important;
        background: url("<?= asset_url() ?>img/bread.jpg");
        background-size: cover;
        background-position: center center;
    }

    @media only screen and (min-width: 768px) {
        .content-1 {
            padding-left: 3rem !important;
            padding-right: 3rem !important;
        }
    }
</style>